<?php

return function($site, $pages, $page) {

	// get all articles and add pagination
	function responsiveImage($array){

		// error handling
		if(!array_key_exists("widths", $array)) {
			throw new Exception('no image widths defined – "widths" => [400,800,1200]');
		}
		if(!array_key_exists("src", $array)) {
			throw new Exception('no image src defined – "src" => $page->image()->first()');
		}


		// set crop to true if height is set
		$crop = false;
		if(array_key_exists("heights", $array)) {
			$crop = true;
			$targetWidth = $array['widths'][0];
			$targetHeight = $array['heights'][0];
		}else{
			$targetWidth = $array['src']->width();
			$targetHeight = $array['src']->height();
		}

		// create srcSet string
		$srcSet = "";
		$ratio = 100/($targetWidth/$targetHeight);
		$ratio = number_format($ratio, 3, '.', '');

		// add count and length of array to check position in loop
		$i = 0;
		$length = count($array['widths']);

		// start loop
		foreach ($array['widths'] as $size) {

			// create the src string
			$src = "";

			if(!$crop){
				$thumb = thumb($array['src'], array('width' => $size))->url();
			}else{
				// get thumb src with the right size
				$thumb = thumb($array['src'], array('width' => $size, 'height' => $array['heights'][$i], 'crop' => '1'))->url();
			}

			// add thumb src to string
			$src = $src . $thumb . " ";

			// add size of the thumb
			$src = $src . $size . 'w';

			// check if last iteration
			if($i < $length - 1){
				// add delimiter to string
				$src = $src . ', ';
			}

			// add src to srcSet
			$srcSet = $srcSet . $src;

			$i++;
		}

		return <<<HTML
			<figure style="position: relative; height: 0; overflow: hidden; padding-bottom: {$ratio}%">
				<img style="position: absolute;" class="lazyload" sizes="auto" srcset="{$srcSet}" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
			</figure>
HTML;


  	}
  	// pass $articles and $pagination to the template
  	return compact('responsiveImage');

};
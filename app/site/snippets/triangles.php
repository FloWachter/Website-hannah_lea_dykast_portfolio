<div class="triangles--container">
	<div class="triangles--container--items">
				<div class="triangles--container--items">
		<?php foreach( page('work')->children()->visible() as $subnav): ?>
			<?php $i++; ?>
				<!-- <?php echo $subnav->title(); ?> -->
					<div class="triangles--container--items-item" ">
				<!-- <?php echo $subnav->index()->count() ?> -->
					</div>
		<?php endforeach ?>
	</div>
</div>
(function(window, document, $) {
    $(document).ready(function() {

<!-- Onload  -->
    	$("body").delay(1000).animate({ opacity: 1 }, 800);​
<!-- curtain -->
    	
    	$('.curtain').one('click', function(event) {
    		event.preventDefault();
    		$el = $(this);
			  	$('.curtain').animate({top:$(".curtain").height()}, 900, 
			  	function() {
					console.log('remove curtain');
					$el.remove();

					$(".menu").delay(500).addClass('is-active');
                    //coneccted to curton fktionallity
                    $(".main--container").addClass('is-active');
			});
    	});

<!-- curtain ende-->

<!-- Navigation -->

    $m_el_1 = $('.js-menu-lvl-1');
    $m_el_2 = $('.js-menu-lvl-2');
    $m_el_bg = $('.js-menu-bg');
    $m_el_text = $('.menu--items--item'); 

        // burger -> js-menu-lvl-1
    $('.js-menu-burger').on('click', function(event) {
        event.preventDefault();
        
        if( $m_el_1.hasClass('is-active') || $m_el_2.hasClass('is-active')){
            $m_el_2.removeClass('is-active');
            $m_el_1.removeClass('is-active');
            $m_el_bg.removeClass('is-active');
            $m_el_text.removeClass('is-active');
        }else {
            $m_el_1.addClass('is-active');
            $m_el_bg.addClass('is-active');
            $m_el_text.addClass('is-active');
        }
    });

    $('.js-menu-lvl-1--work').on('click', function(event) {
        
        $m_el_2.toggleClass('is-active'); 

        if($m_el_1.hasClass('is-active')){
            $('.js-menu-lvl-1').toggleClass('is-active');
        }
    });

   
     
    

    });
})(window, document, $);

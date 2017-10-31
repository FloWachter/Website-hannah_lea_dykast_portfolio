(function(window, document, $) {
    $(document).ready(function() {

<!-- Onload  -->
    	// $("body").animate({ opacity: 1 }, 0);​
<!-- curtain -->
    	
	$('.curtain').one('click', function(event) {
		event.preventDefault();
		$el = $(this);
		  	$('.curtain').animate({top:$(".curtain").height()}, 900, 
		  	function() {
				console.log('remove curtain');
				$el.remove();
				$(".menu").addClass('is-active');
                //coneccted to curton fktionallity
                $(".main--container").addClass('is-active');
		});
	});

<!-- curtain ende-->

<!-- Navigation -->

    var $m_el_1 = $('.js-menu-lvl-1');
    var $m_el_2 = $('.js-menu-lvl-2');
    var $m_el_bg = $('.js-menu-bg');
    var $m_el_text = $('.menu--items--item'); 
    
    function nav_default() {
        $m_el_2.removeClass('is-active');
        $m_el_1.removeClass('is-active');
        $m_el_bg.removeClass('is-active');
        $m_el_text.removeClass('is-active');
    };

        // burger -> js-menu-lvl-1
    $('.hamburger').on('click', function(event) {
        if( $m_el_1.hasClass('is-active') || $m_el_2.hasClass('is-active')){
            nav_default();
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

    // Burger Menu
    $('.hamburger').on('click', function(event) {
        $(this).toggleClass('is-active');
    });

   $('.menu').on('mouseleave', function(event) {
       nav_default();
       console.log("leave");
   });

    <!-- Navigation ende--> 
    

    });
})(window, document, $);

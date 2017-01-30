(function ($) {
    "use strict";
    /*---------------------
     1. Menu & Toggle function
     --------------------- */
    $('.menu-toggle').on('click', function(){
        $( ".header-area" ).toggleClass( "opened" );
    });
    $('.toggle-cart').on('click', function(){
        $(".mini-cart-inner").slideToggle();
        $(".header-menu-lang").css("display","none");
        $(".header-menu-account").css("display","none");
    });
    $('.toggle-account').on('click', function(){
        $(".header-menu-account").slideToggle();
        $(".mini-cart-inner").css("display","none");
        $(".header-menu-lang").css("display","none");
    });
    $('.toggle-language').on('click', function(){
        $(".header-menu-lang").slideToggle();
        $(".mini-cart-inner").css("display","none");
        $(".header-menu-account").css("display","none");
    });

    /*----------------------------
     2. wow js active
     ------------------------------ */
    new WOW().init();
    /*----------------------------
     3. Testimonial List owl active
     ------------------------------ */
    $('.testimonial-list').owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:false,
        navigation:true,
        singleItem : true,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText:["<i class='zmdi zmdi-arrow-left'></i>","<i class='zmdi zmdi-arrow-right'></i>"]
    });
    /*--------------------------
     4. scrollUp
     ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*----------------------------
     5. price-slider active
     ------------------------------ */
    $( '#slider-range' ).slider({
        range: true,
        min: 40,
        max: 600,
        values: [ 60, 496 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    /*----------------------------------
     6. Ship Address toggle function
     ----------------------------------*/
    $( '#ship-box' ).on('click', function() {
        $( '#ship-box-info' ).slideToggle(1000);
    });

    /*--------------------------------
     7. Create an account toggle function
     ---------------------------------*/
    $( '#cbox' ).on('click', function() {
        $( '#cbox_info' ).slideToggle(900);
    });

    /*----------------------------
     8. Input Plus Minus Button
     ------------------------------ */
    $('.cart-plus-minus').append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $('.qtybutton').on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    /*-------------------------
     9. showlogin toggle function
     --------------------------*/
    $( '#showlogin' ).on('click', function() {
        $( '#checkout-login' ).slideToggle(900);
    });

    /*-------------------------
     10. showcoupon toggle function
     --------------------------*/
    $( '#showcoupon' ).on('click', function() {
        $( '#checkout_coupon' ).slideToggle(900);
    });

    /*---------------------
     11. Faq page Accrodian
     --------------------- */
    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".fa-plus-square").removeClass("fa-plus-square").addClass("fa-minus-square");
    }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".fa-minus-square").removeClass("fa-minus-square").addClass("fa-plus-square");
    });

    /*----------------------------
     12. jQuery MeanMenu
     ------------------------------ */
    $('.mobile-menu').meanmenu();

    /*----------------------------
     13. jQuery Date Picker
     ------------------------------ */
    $('#date-picker').datepicker({ dateFormat: 'dd-mm-yy'});

})(jQuery);
/**
 * Created by algattuso on 28/01/2017.
 */

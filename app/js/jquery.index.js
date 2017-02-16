( function(){

    $( function() {

        $.each( $( '.home-slider' ), function() {

            new HomeSlider ( $( this ) );

        } );

    } );



} )();

var HomeSlider = function ( obj ) {

    //private properties
    var _self = this,
        _obj = obj,
        _swiper;

    //private methods
    var _onEvents = function () {


        },
        _init = function () {

            _obj[0].obj = _self;
            _initSwiper();
            _onEvents();


        },
        _initSwiper = function () {

            _swiper = new Swiper( _obj.find( '.swiper-container' ), {
                speed: 1,
                autoplay: 4000,
                loop: true,
                simulateTouch: false,
                autoplayDisableOnInteraction: false,
                noSwiping: false,
                onSlideChangeStart: function (swiper) {
                    if( swiper.slides.eq( swiper.activeIndex ).hasClass( 'home-slider__item_black' ) ){
                        $( '.logo').addClass( 'logo_index-black' );
                        $( '.site__menu').addClass( 'site__menu_black' );
                    } else {
                        $( '.logo').removeClass( 'logo_index-black' );
                        $( '.site__menu').removeClass( 'site__menu_black' );
                    }
                }
            } );

        };

    _init();

};
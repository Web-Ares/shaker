( function() {

    $( function() {

        $( '.popup' ).each(function() {

            new Popup( $( this ) );

        } );

    } );


} )();

var Popup = function( obj ) {

    //private properties
    var _self = this,
        _popupPadding = 40,
        _btnShow =  $( '.popup__open' ),
        _obj = obj,
        _btnClose = _obj.find( '.popup__close, .popup__cancel' ),
        _wrap = _obj.find( '.popup__wrap' ),
        _contents = _obj.find( '.popup__content' ),
        _scrollConteiner = $( 'html' ),
        _window = $( window ),
        _swiperFull = null,
        _body = $( 'body'),
        _timer = setTimeout( function() {}, 1 );

    //private methods
    var _centerWrap = function() {
            if ( _window.height() - ( _popupPadding * 2 ) - _wrap.height() > 0 ) {
                _wrap.css( { top: ( ( _window.height() - ( _popupPadding * 2 ) ) - _wrap.height() ) / 2 } );
            } else {
                _wrap.css( { top: 0 } );
            }
        },
        _getScrollWidth = function () {
            var scrollDiv = document.createElement( 'div'),
                scrollBarWidth;

            scrollDiv.className = 'popup__scrollbar-measure';

            document.body.appendChild( scrollDiv );

            scrollBarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;

            document.body.removeChild(scrollDiv);

            return scrollBarWidth;
        },
        _hide = function() {
            _obj.css( {
                overflowY: 'hidden'
            } );
            _scrollConteiner.css( {
                overflowY: 'auto',
                paddingRight: 0
            } );

            _obj.removeClass( 'popup_opened' );
            _obj.addClass( 'popup_hide' );

            _timer = setTimeout( function(){

                _obj.css ({
                    overflowY: 'auto'
                });

                _obj.removeClass( 'popup_hide' );

                _body.find( '.single-photos-slider .single-photos-slider__item' ).removeClass( 'active' );
                _body.find( '.gallery-full .swiper-wrapper' ).html( '' );
                _swiperFull.destroy( false, true );

            }, 300 );

        },
        _init = function() {
            _obj[ 0 ].obj = _self;
            _onEvents();

        },
        _onEvents = function() {
            _window.on( {
                resize: function() {
                    _centerWrap();
                }
            } );
            _btnShow.on( {
                click: function() {
                    _show( $( this ).attr( 'data-popup' ) );

                    var activeElem = $( this ).parents( '.single-photos-slider__item' ).addClass( 'active' ),
                        elemsSwiper = $( this ).parents( '.single-photos-slider' ).find( '.single-photos-slider__item'),
                        elemsSwiperClones = elemsSwiper.clone();

                    $.each( elemsSwiperClones, function() {

                        var curElem = $( this),
                            wrap = $( '<div class="swiper-slide"></div>' );

                        curElem.find( '.single-photos-slider__zoom').remove();
                        curElem.addClass( 'gallery-full__item swiper-slide' );
                        wrap.append( curElem );

                        $( '.gallery-full .swiper-wrapper' ).append( wrap );

                    } );

                    $.each( $( '.gallery-full' ).find( '.single-photos-slider__sizes' ), function(){

                        new DropDown ( $(this) )

                    } );
                    _swiperFull = new Swiper( $( '.gallery-full' ), {
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        spaceBetween: 30,
                        onSlideChangeEnd: function() {
                            $( '.single-photos-slider__sizes-selected' ).removeClass ( 'active' );
                        }
                    } );

                    setTimeout( function() {
                        _swiperFull.slideTo( $( '.gallery-full' ).find( '.gallery-full__item.active').parent('.swiper-slide').index(), 1);

                    }, 10);

                    return false;
                }
            } );
            _wrap.on( {
                click: function( e ) {
                    e.stopPropagation();
                }
            } );
            _obj.on( {
                click: function() {
                    _hide();
                    return false;
                }
            } );
            _btnClose.on( {
                click: function() {
                    _hide();
                    return false;
                }
            } );
        },
        _show = function( className ) {
            _setPopupContent( className );

            _scrollConteiner.css( {
                overflowY: 'hidden',
                paddingRight: _getScrollWidth()
            } );
            _obj.addClass( 'popup_opened' );
            _centerWrap();

        },
        _setPopupContent = function( className ) {
            var curContent = _contents.filter( '.popup__' + className );

            _contents.css( { display: 'none' } );
            curContent.css( { display: 'block' } );
        };

    //public properties

    //public methods

    _self.show = function( elem ) {

        elem.on( {
            click: function(){
                _show( $( this ).attr( 'data-popup' ) );
                return false;
            }
        } );

    };

    _init();
};
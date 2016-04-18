"use strict";
( function() {

    $( function() {

        $.each( $( '.art' ), function() {

            new CategoryChangeContent ( $( this ) );

        } );

        $.each( $( '.gallery-full' ), function() {

            new LikedPhotos ( $( this ) );

        } );

        $.each( $( '.single-photos-slider__sizes' ), function() {

            new DropDown ( $(this) )

        } );

        $.each( $( '.single-photos-slider__zoom' ), function() {

            new GalleryFull ( $(this) )

        } );

    } );

} )();

var CategoryChangeContent = function ( obj ) {

    //private properties
    var _self = this,
        _obj = obj,
        _request = new XMLHttpRequest(),
        _window = $( window),
        _windowHeight = $( window).height(),
        _body = $( 'body'),
        _swiperMulti,
        _swiperSingle,
        _flagAdd = true,
        _flagRemove = false,
        _multiSlider = _obj.find( '.multi-photos-slider' ),
        _singleSlider = _obj.find( '.single-photos-slider' ),
        _categories = _obj.find( '.categories' ),
        _categoriesSet = _obj.find( '.categories__set' ),
        _sliderWrap = _obj.find( '.art__sliders'),
        _name = _categories.find( '.categories__name' ),
        _setWrap = _categories.find( '.categories__set'),
        _loading = $( '.site__loading' );

    //private methods
    var _addEvents = function() {

            _categories.on( 'click', '.categories__btn', function() {
                var curItem = $( this ),
                    curItemDataId = curItem.data( 'id' );

                _loading.addClass( 'show' );

                _requestForCategoryContent( curItemDataId );

                return false;
            } );

            _categories.on( 'click', '.categories__set-item', function() {

                var curItem = $( this),
                    curItemDataSlider = curItem.data( 'slider'),
                    activeItemBtn = _obj.find( '.categories__set-active' );

                if( !( curItem.hasClass( 'active' ) ) ) {
                    _categories.find( '.categories__set-item' ).removeClass( 'active' );
                    curItem.addClass( 'active' );
                    _swiperMulti.slideTo( curItemDataSlider, 500 );
                }

                activeItemBtn.text( $( this ).text() );
                activeItemBtn.removeClass( 'opened' );

                return false;

            } );

            _categoriesSet.on( 'click', '.categories__set-active', function() {
                var curItem = $( this );

                if( !( curItem.hasClass( 'opened' ) ) ) {
                    curItem.addClass( 'opened' );
                    _addNiceScroll( _categoriesSet.find( '.categories__set-drop-down' ) );
                } else {
                    curItem.removeClass( 'opened' );
                }

                return false;
            } );

            $.each( _obj, function() {

                new LikedPhotos ( $( this ) );

            } );

            _body.on( {
                click: function() {
                    var curItem = _categoriesSet.find( '.categories__set-active' );

                    if( curItem.hasClass( 'opened' ) ) {

                        curItem.removeClass( 'opened' );
                    }

                    _body.find( '.single-photos-slider__sizes-selected' ).removeClass( 'active' );
                }
            } );

            _window.on( {
                resize: function () {
                    _updateSlider( _multiSlider );

                    _body.find( '.single-photos-slider__sizes-selected' ).removeClass( 'active' );

                    if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _changeCategoryView();

                    } else if( _window.width() >= 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _resetStyleCategoryView();
                    }
                },
                load: function () {

                    setTimeout( function() {
                        _updateSlider( _multiSlider );
                    }, 1 );

                    if( _categoriesSet.hasClass( 'categories__set_minimize' ) ) {
                        _changeCategoryView();
                    }

                    if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _changeCategoryView();
                    }
                }
            } );

        },
        _addNiceScroll = function( elem ) {
            var dropMenu = elem,
                dropMenuDiv = dropMenu.find( 'div'),
                dropMenuDivHeight = dropMenuDiv.outerHeight(),
                maxHeight = dropMenu.css( 'max-height' );

            if( dropMenuDivHeight > parseInt(maxHeight) ) {
                dropMenu.niceScroll( {
                    horizrailenabled: false,
                    autohidemode: "scroll",
                    cursoropacitymin: 0
                } );
            }
        },
        _changeCategoryView = function() {

            if( _flagAdd ) {
                _flagAdd = false;
                _categoriesSet.find( '.categories__set-item').wrapAll( '<div class="categories__set-drop-down"><div></div></div>' );
                _categoriesSet.prepend( '<span class="categories__set-active">Landscape</span>' );
                _categoriesSet.find( '.categories__set-active' ).text( _categoriesSet.find( '.categories__set-item' ).filter( '.active' ).text() );
                _flagRemove = true;
            }

        },
        _init = function() {

            _obj[0].obj = _self;
            _initSwiper( _multiSlider, _singleSlider );

            _multiSlider.css( {
                opacity: 1
            } );
            setTimeout( function() {
                _updateSlider( _multiSlider );
            },100 );

            _addEvents();

            if( _categoriesSet.hasClass( 'categories__set_minimize' ) ) {
                _changeCategoryView();
            }

            if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                _changeCategoryView();
            }

        },
        _initSwiper = function( multi, single ) {

            _swiperMulti = new Swiper( multi, {
                direction: 'vertical',
                slidesPerView: 1,
                paginationClickable: true,
                spaceBetween: 27,
                mousewheelControl: true,
                onSlideChangeEnd: function( swiper ) {
                    _categories.find( '.categories__set-item' ).removeClass( 'active' );
                    _categories.find( '.categories__set-item' ).filter( '[data-slider = ' + swiper.activeIndex + ']').addClass( 'active' );
                    _categories.find( '.categories__set-active' ).text( _categories.find( '.categories__set-item' ).filter( '.active' ).text() );
                    $( '.single-photos-slider__sizes-selected' ).removeClass ( 'active' )
                }
            } );
            _swiperSingle = new Swiper( single, {
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 30,
                onSlideChangeEnd: function() {
                    $( '.single-photos-slider__sizes-selected' ).removeClass ( 'active' )
                }
            } );

        },
        _requestForCategoryContent = function( data ) {
            _request.abort();
            _request = $.ajax( {
                url: _categories.data( 'action' ),
                dataType: 'json',
                timeout: 20000,
                data: 'data-id=' + data ,
                type: "GET",
                success : function( content ) {

                    _name.html( '' );
                    _setWrap.html( '' );

                    _name.append( '<a href="#" class="categories__btn" data-id="' + content.id + '">' + content.btn + '</a>' );

                    for( var i = 0; i < content.set.length; i++ ) {
                        _setWrap.html( function() {
                            $( this ).append( '<a href="#" class="categories__set-item" data-slider="' + i + '">' + content.set[ i ] + '</a>' )
                        } );
                    }

                    _requestForSliderContent( data );


                },
                error: function ( XMLHttpRequest ) {
                    if ( XMLHttpRequest.statusText != "abort" ) {
                        alert( 'Error!' );
                    }
                }
            } );
        },
        _requestForSliderContent = function( data ) {
            _request.abort();
            _request = $.ajax( {
                url: _sliderWrap.data( 'action' ),
                dataType: 'html',
                timeout: 20000,
                data: 'data-id=' + data ,
                type: "GET",
                success : function( content ) {

                    _flagAdd = true;
                    _flagRemove = false;

                    _sliderWrap.html( '' );

                    _sliderWrap.append( $( content ) );

                    _obj.find( '.multi-photos-slider').css( {
                        opacity: 1
                    } );

                    setTimeout( function() {
                        _initSwiper( _obj.find( '.multi-photos-slider'), _obj.find( '.single-photos-slider') );
                        _updateSlider( _obj.find( '.multi-photos-slider') );
                    }, 1 );

                    if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _changeCategoryView();

                    }

                    $.each( $( '.single-photos-slider__sizes' ), function(){

                        new DropDown ( $(this) )

                    } );

                    new Popup ( $( '.popup' ) ).show( _obj.find( '.single-photos-slider__zoom' ) );
                    new GalleryFull ( $( '.art' ) ).createSlider( _obj.find( '.single-photos-slider__zoom' ) );

                    setTimeout( function() {
                        _loading.removeClass( 'show' );
                    }, 500 );

                },
                error: function ( XMLHttpRequest ) {
                    if ( XMLHttpRequest.statusText != "abort" ) {
                        alert( 'Error!' );
                    }
                }
            } );
        },
        _resetStyleCategoryView = function() {

            if( _flagRemove ) {

                var items = _categoriesSet.find( '.categories__set-drop-down div').html();

                _flagRemove = false;
                _categoriesSet.find( '.categories__set-drop-down' ).remove();
                _categoriesSet.find( '.categories__set-active' ).remove();
                _categoriesSet.append( items );
                _flagAdd = true;
            }

        },
        _setHeight = function( multi ) {
            multi.innerHeight( _windowHeight - multi.offset().top );
        },
        _updateSlider = function( multi ) {
            _windowHeight = $( window ).height();
            _setHeight( multi );
            _swiperMulti.update();
        };

    _init();

};

var DropDown = function ( obj ) {

    //private properties
    var _self = this,
        _obj = obj,
        _btn = _obj.find( '.single-photos-slider__sizes-selected' ),
        _dropMenu = _obj.find( '.single-photos-slider__drop'),
        _countBlock = _obj.find( '.single-photos-slider__count'),
        _dropMenuItem = _dropMenu.find( 'a' ),
        _window = $( window ),
        _body = $( 'body' );

    //private methods
    var _addEvents = function() {

            _btn.on( {
                click: function() {

                    _changeActive( $( this ) );

                    $('.opened-lightbox').find('.single-photos-slider__item').filter('active').index('.opened-lightbox')

                }
            } );
            _obj.on( {
                click: function( event ){
                    event = event || window.event;

                    if ( event.stopPropagation ) {
                        event.stopPropagation();
                    } else {
                        event.cancelBubble = true;
                    }
                }
            } );
            _dropMenuItem.on( {
                click: function() {

                    var curElem = $( this ),
                        curItemIndex =  curElem.index(),
                        curElemText = curElem.text(),
                        mainTextWrap = curElem.parents( '.single-photos-slider__sizes' ).find( '.single-photos-slider__sizes-selected' );

                    _btn.removeClass( 'active' );
                    _dropMenuItem.removeClass( 'active' );
                    curElem.addClass( 'active' );
                    mainTextWrap.text( curElemText );
                    _setCount( curElem.index() + 1 );

                    if( _obj.parents().hasClass( 'gallery-full' ) ) {
                        $( '.art').find( '.single-photos-slider__item.active' ).find( '.single-photos-slider__drop a').eq( curItemIndex ).trigger( 'click' );
                    }

                    return false;
                }
            } );

        },
        _changeActive = function( elem ) {

            var curElem = elem;

            if( curElem.hasClass( 'active' ) ) {

                curElem.removeClass( 'active' );


            } else {

                curElem.addClass( 'active' );

            }

        },
        _setCount = function( activeItem ) {
            _countBlock.find( 'span:first-child' ).text( activeItem );
            _countBlock.find( 'span:last-child' ).text( _dropMenuItem.length );
        },
        _init = function () {
            _obj[ 0 ].obj = _self;
            _addEvents();
            _setCount( _dropMenuItem.filter( '.active' ).index() + 1 );
        };

    //public properties

    //public methods
    _self.addEventsAfterAjax = function() {
        _btn.on( {
            click: function() {

                _changeActive( $( this ) );

            }
        } );
        _obj.on( {
            click: function( event ){
                event = event || window.event;

                if ( event.stopPropagation ) {
                    event.stopPropagation();
                } else {
                    event.cancelBubble = true;
                }
            }
        } );
        _dropMenuItem.on( {
            click: function() {

                var curElem = $( this ),
                    curElemText = curElem.text(),
                    mainTextWrap = curElem.parents( '.single-photos-slider__sizes' ).find( '.single-photos-slider__sizes-selected' );

                _btn.removeClass( 'active' );
                _dropMenuItem.removeClass( 'active' );
                curElem.addClass( 'active' );
                mainTextWrap.text( curElemText );
                _setCount( curElem.index() + 1 );
            }
        } );
    };

    _init();
};

var GalleryFull = function ( obj ) {

    //private properties
    var _self = this,
        _obj = obj,
        _btn = _obj.find( '.single-photos-slider__zoom' ),
        _singleSlider = $( '.gallery-full' ),
        _btnClose = $( '.popup' ).find( '.popup__close, .popup__cancel' ),
        _swiperFull = null,
        _body = $( 'body');

    //private methods
    var _addEvents = function() {

            _btnClose.on( {
                click: function() {

                    setTimeout( function(){

                        $( '.gallery-full')[0].swiper.destroy( false, true );

                        _body.find( '.single-photos-slider .single-photos-slider__item' ).removeClass( 'active' );
                        _body.find( '.single-photos-slider' ).removeClass( 'opened-lightbox' );
                        _body.find( '.gallery-full .swiper-wrapper' ).html( '' );
                        _swiperFull = null;

                    }, 300 );

                }
            } );

            _obj.on( {
                click: function() {

                    var curItem = $( this );

                    _createSlider( curItem );

                }
            } )

        },
        _init = function() {

            _obj[0].obj = _self;
            _addEvents();

        },
        _createSlider = function( elem ) {

            var activeElem = elem.parents( '.single-photos-slider__item' ).addClass( 'active' ),
                elemsSwiper = elem.parents( '.single-photos-slider' ).find( '.single-photos-slider__item'),
                elemsSwiperClones = elemsSwiper.clone();

            activeElem.parents( '.single-photos-slider' ).addClass( 'opened-lightbox' );

            $.each( elemsSwiperClones, function() {

                var curElem = $( this),
                    wrap = $( '<div class="swiper-slide"></div>' );

                curElem.find( '.single-photos-slider__zoom').remove();
                curElem.addClass( 'gallery-full__item' );
                wrap.append( curElem );

                $( '.gallery-full .swiper-wrapper' ).append( wrap );

            } );

            $.each( _singleSlider.find( '.single-photos-slider__sizes' ), function(){

                new DropDown ( $(this) )

            } );

            setTimeout( function() {

                _initSwiper();

            }, 10 );



        },
        _initSwiper = function() {


            _swiperFull = new Swiper( _singleSlider, {
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 30,
                onSlideChangeEnd: function() {
                    $( '.single-photos-slider__sizes-selected' ).removeClass ( 'active' );
                }
            } );

            setTimeout( function() {
                _swiperFull.slideTo( _singleSlider.find( '.gallery-full__item.active').parent('.swiper-slide').index(), 1);
            }, 10);

        };
    _init();

    _self.createSlider = function( elem ) {
        elem.on( 'click', function() {

            _createSlider( $( this ) );

        } );
    }

};

var LikedPhotos = function ( obj ) {

    //private properties
    var _self = this,
        _obj = obj,
        _request = new XMLHttpRequest();

    //private methods
    var _addEvents = function() {

            _obj.on( 'click', '.single-photos-slider__like', function() {
                var curItem = $( this ),
                    curItemDataId = curItem.data( 'id'),
                    curItemClass = curItem.attr( 'class').split(' '),
                    liked;

                for (var i = 0; i < curItemClass.length; i++) {

                    if( curItemClass[i] == 'liked' ) {
                        liked = curItemClass[i];
                    }

                }

                if( _obj.hasClass( 'gallery-full' ) ) {
                    $( '.art').find( '.single-photos-slider__like').filter( '[data-id=' + curItemDataId + ']').trigger( 'click' )
                }

                _requestLikedPhoto( curItem, curItemDataId, liked );

                return false;

            } );

        },
        _init = function() {

            _obj[0].obj = _self;
            _addEvents();
        },
        _requestLikedPhoto = function( elem, data, dataClass ) {
            _request.abort();
            _request = $.ajax( {
                url: elem.data( 'action' ),
                dataType: 'json',
                timeout: 20000,
                data: {
                    'data-id':  data ,
                    'class':    dataClass
                },
                type: "GET",
                success : function( content ) {

                    if( !content.like ) {
                        elem.addClass( 'liked' )
                    } else {
                        elem.removeClass( 'liked' )
                    }

                },
                error: function ( XMLHttpRequest ) {
                    if ( XMLHttpRequest.statusText != "abort" ) {
                        alert( 'Error!' );
                    }
                }
            } );
        };
    _init();

};



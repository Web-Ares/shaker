"use strict";
( function() {

    $( function() {

        $.each( $( '.art' ), function() {

            new CategoryChangeContent ( $( this ) );

        } );

        $.each( $( '.single-photos-slider__sizes' ), function(){

            new DropDown ( $(this) )

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
        _like = _singleSlider.find( '.single-photos-slider__like' ),
        _categories = _obj.find( '.categories' ),
        _categoriesSet = _obj.find( '.categories__set' ),
        _sliderWrap = _obj.find( '.art__sliders'),
        _btn = _categories.find( '.categories__btn' ),
        _name = _categories.find( '.categories__name' ),
        _setWrap = _categories.find( '.categories__set'),
        _loading = $( '.site__loading' );

    //private methods
    var _addEvents = function() {

            _btn.on( {
                click: function() {
                    var curItem = $( this ),
                        curItemDataId = curItem.data( 'id' );

                    _loading.addClass( 'show' );

                    _requestForCategoryContent( curItemDataId );

                    return false;
                }
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

            _window.on( {
                resize: function () {
                    _updateSlider( _multiSlider );

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
                _requestLikedPhoto( curItem, curItemDataId, liked );

                return false;
            } );

            _body.on( {
                click: function() {
                    var curItem = _categoriesSet.find( '.categories__set-active' );

                    if( curItem.hasClass( 'opened' ) ) {

                        curItem.removeClass( 'opened' );
                    }
                }
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

        },
        _addNiceScroll = function( elem ) {
            var dropMenu = elem,
                dropMenuDiv = dropMenu.find( 'div'),
                dropMenuDivHeight = dropMenuDiv.outerHeight(),
                maxHeight = dropMenu.css( 'max-height' );

            if( dropMenuDivHeight > parseInt(maxHeight) ) {
                dropMenu.niceScroll( {
                    horizrailenabled: false
                } );
            }
        },
        _addEventsAfterAjax = function() {

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

            _window.on( {
                resize: function () {
                    _updateSlider( _obj.find( '.multi-photos-slider') );

                    if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _changeCategoryView();

                    } else if( _window.width() >= 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _resetStyleCategoryView();
                    }
                }
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

            _like.on( {
                click: function() {

                    var curItem = $( this ),
                        curItemDataId = curItem.data( 'id'),
                        curItemClass = curItem.attr( 'class').split(' '),
                        liked;

                    for (var i = 0; i < curItemClass.length; i++) {

                        if( curItemClass[i] == 'liked' ) {
                            liked = curItemClass[i];
                        }

                    }
                    _requestLikedPhoto( curItem, curItemDataId, liked );

                    return false;
                }
            } );

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
            _setHeight( _multiSlider );
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

                    setTimeout( function() {
                        _initSwiper( _obj.find( '.multi-photos-slider'), _obj.find( '.single-photos-slider') );
                        _updateSlider( _obj.find( '.multi-photos-slider') );
                    }, 1 );

                    _addEventsAfterAjax();

                    if( _window.width() < 768 && !( _categoriesSet.hasClass( 'categories__set_minimize' ) ) ) {
                        _changeCategoryView();

                    }

                    $.each( $( '.single-photos-slider__sizes' ), function(){

                        new DropDown ( $(this) )

                    } );

                    new Popup ( $( '.popup' ) ).show( _obj.find( '.single-photos-slider__zoom' ) );

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

                    return false;
                }
            } );
            _window.on( {
                resize: function() {
                    _btn.removeClass( 'active' );
                }
            } );
            _body.on( {
                click: function() {
                    _btn.removeClass( 'active' );
                }
            } )

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



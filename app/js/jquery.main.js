"use strict";
( function() {

    $( function() {

        $.each( $( '.site__menu' ), function() {

            new Menu ( $( this ) );

        } );

        $.each( $('.full-height'), function () {

            new FullHeightScreen( $(this) );

        } );

        $.each( $('.site_ajax' ), function () {

            new Page( $(this) );

        } );

        $.each( $('.site_canvas' ), function () {

            new TextureText( $(this) );

        } );

    } );

    var FullHeightScreen = function ( obj ) {

        //private properties
        var _self = this,
            _obj = obj,
            _window = $( window );

        //private methods
        var _onEvents = function () {

                _window.on( {

                    resize: function () {

                        _setHeight();

                    }

                } );

            },
            _init = function () {

                _obj[0].obj = _self;
                _onEvents();
                _setHeight();

            },
            _setHeight = function () {

                if( _window.height() >= 550 ) {

                    _obj.css( {

                        'min-height': _window.height()

                    } );

                } else {

                    _obj.css( {

                        'min-height': '550px'

                    } );

                }

            };

        _init();

        _self.setHeight = function() {
            _setHeight();
        }
    };

    var Menu = function( obj ) {

        //private properties
        var _self = this,
            _obj = obj,
            _body = $( 'body' ),
            _showBtn = _obj.find( '.site__menu-btn'),
            _links = _obj.find( '.site__menu-link' );

        //private methods
        var _addEvents = function() {

                _showBtn.on( {
                    click: function() {

                        _openMenu( $( this ) );

                    }
                } );

                _links.on( {
                    click: function() {

                        _resetStyle();

                    }
                } );

            },
            _init = function() {
                _obj[ 0 ].obj = _self;
                _addEvents();
            },
            _openMenu = function( elem )  {

                var curItem = elem;

                if( curItem.hasClass( 'opened' ) ) {

                    curItem.removeClass( 'opened' );

                } else {

                    curItem.addClass( 'opened' );
                }

            },
            _resetStyle = function() {
                _showBtn.removeClass( 'opened' );
            };

        _init();

        _self.addEvents = function () {
            _body.find( '.site__menu-btn').on();
            _body.find( '.site__menu-link').on();
        }
    };

    var Page = function ( obj ) {

        var _self = this,
            _obj = obj,
            _window = $( window ),
            _request = new XMLHttpRequest(),
            _path = null,
            _actionClick = true,
            _actionScroll = false,
            _wrapper = null,
            _lastPos = 0,
            _duration = 500,
            _dom = $( 'html, body' ),
            _content = $( '.site__layout' ),
            _dataScroll = _content.data( 'scroll' ),
            _body = $( 'body' ),
            _loading = $( '.site__loading'),
            _fireEvent,
            _oldDelta = null;


        var _addEvents = function () {

                $( 'body' ).on( 'click', '.site__down-link', function() {

                    if( _actionClick ) {
                        _changeContent( $( this), $( this ).parents( '.site__layout' ) );
                    }

                    return false;

                } );

                _obj.on( 'click', '.site__menu-nav_ajax .site__menu-link', function() {

                    if( _actionClick ) {
                        _changeContent( $( this), $( 'body').find( '.site__layout' ) );
                    }

                    return false;

                } );

                window.addEventListener( 'popstate', function( e ) {

                    var oldPath = _path;


                    if ( e.state == null ) {

                        _wrapper = $( '.site__layout' );

                        var newWrapper = $(JSON.parse( sessionStorage.getItem( 'index' ) ).content);
                        newWrapper.addClass( 'site__content_absolute' );

                        _loading.addClass( 'show' );

                        setTimeout( function() {

                            _addContent( newWrapper );

                        },200 );


                    } else {

                        _path = 'php/' + e.state.foo + '.php';

                        if ( oldPath != _path ){

                            _wrapper = $( '.site__layout' );
                            _requestForContent();
                        }

                    }

                }, false);

                _window.on( {
                    resize: function() {
                        _checkActionScroll( _body.find( '.site__layout' ) );
                    },
                    scroll: function() {
                        _checkActionScroll( _body.find( '.site__layout' ) );


                    }
                } );

                window.addEventListener("wheel", function( e ) {

                    _wheelEvent( e );

                } );

            },
            _wheelEvent = function (e){

                var newDelta = e.deltaY;

                _fireEvent = EventCheck();
                _oldDelta = newDelta;

                function EventCheck(){
                    if( _oldDelta == null ) return true;
                    if( _oldDelta * newDelta < 0 ) return true;
                    if( Math.abs( newDelta ) > Math.abs( _oldDelta ) ) return true;
                    return false;
                }

                if( _fireEvent ) {
                    var delta = e.deltaY;

                    if ( delta ) {
                        var direction = ( delta > 0 ) ? 1 : -1;

                        _checkScroll( direction );

                    }
                }

            },
            _addContent = function( newWrapper ) {

                _dataScroll = newWrapper.data( 'scroll' );

                _wrapper.addClass( 'site__content_top' );
                _obj.append( newWrapper );
                newWrapper.addClass( 'site__content_from-bottom' );

                setTimeout( function() {

                    newWrapper.removeClass( 'site__content_from-bottom' );
                    newWrapper.removeClass( 'site__content_absolute' );
                    _dom.stop( true, false );
                    _dom.animate( { scrollTop: 0  }, 300 );

                    if( newWrapper.find( '.full-height' ).length ) {
                        new FullHeightScreen( newWrapper.find( '.full-height' ) ).setHeight();
                    }
                    if( newWrapper.find( '.art' ).length ) {
                        new CategoryChangeContent( newWrapper.find( '.art' ) );
                    }
                    if( newWrapper.find( '.popup' ).length ) {
                        new Popup( newWrapper.find( '.popup' ) );
                    }
                    if( newWrapper.find( '.single-photos-slider__sizes' ).length ) {
                        $.each( newWrapper.find( '.single-photos-slider__sizes' ), function(){

                            new DropDown ( $(this) )

                        } );
                    }
                    if( newWrapper.find( '.site_canvas' ).length ) {


                        $.each( newWrapper.find( '.site_canvas'), function () {

                            new TextureText( $( this ) );

                            new TextureText( $( this ) ).drawText();

                        } );

                    }

                    _loading.removeClass( 'show' );

                }, 500 );

                setTimeout( function() {
                    _actionClick = true;
                    _checkActionScroll( _body.find( '.site__layout' ) );
                }, 1000 );

                setTimeout( function() {
                    _wrapper.remove();
                    new Menu( newWrapper.find( '.site__menu' ) ).addEvents();
                }, _duration );


            },
            _requestForContent = function() {

                var hasStorage = ( 'sessionStorage' in window && window.sessionStorage ),
                    path = /[^/]*$/.exec( _path )[ 0 ],
                    pathSplit = path.split( '.'),
                    storageKey = pathSplit[ 0 ],
                    now, expiration, data = false;

                try {
                    if (hasStorage) {
                        data = sessionStorage.getItem( storageKey );

                        if ( data ) {
                            data = JSON.parse( data );

                            now = new Date();
                            expiration = new Date( data.timestamp );
                            expiration.setMinutes( expiration.getMinutes() + 10 );

                            if ( now.getTime() > expiration.getTime() ) {
                                data = false;
                                sessionStorage.removeItem( storageKey );
                            }
                        }
                    }
                }
                catch ( e ) {
                    data = false;
                }

                if ( data ) {

                    var newWrapper = $( data.content );
                    newWrapper.addClass( 'site__content_absolute' );

                    _loading.addClass( 'show' );

                    setTimeout( function() {

                        _addContent( newWrapper );

                    },200 );

                }
                else {
                    _request.abort();
                    _request = $.ajax({
                        url: _path,
                        dataType: 'html',
                        timeout: 20000,
                        data:{
                            'ajax':true
                        },
                        type: "GET",
                        success : function( content ) {

                            if ( hasStorage ) {
                                try {
                                    sessionStorage.setItem( storageKey, JSON.stringify( {
                                        timestamp: new Date(),
                                        content: content
                                    } ));
                                }
                                catch ( e ) {}
                            }

                            var newWrapper = $( content );
                            newWrapper.addClass( 'site__content_absolute' );

                            _loading.addClass( 'show' );

                            setTimeout( function() {

                                _addContent( newWrapper );

                            }, 200 );

                        },
                        error: function ( XMLHttpRequest ) {
                            if ( XMLHttpRequest.statusText != "abort" ) {
                                alert( 'Error!' );
                            }
                        }
                    } );
                }
                return false;

            },
            _checkAction = function() {
                _actionScroll = ( _window.height() >= _content.innerHeight() && !( _dataScroll == false ) );
            },
            _checkActionScroll = function( elem ) {
                _actionScroll = ( ( _window.scrollTop() + _window.height() ) >= elem.innerHeight()  &&  !( _dataScroll == false ) );
            },
            _changeContent = function( elem, elemParent ) {

                _actionClick = false;
                _actionScroll = false;
                _path = elem.data( 'href' );
                _wrapper = elemParent;

                _requestForContent();

                var path = /[^/]*$/.exec( _path )[0],
                    pathSplit = path.split( '.' );
                path = pathSplit[0];

                history.pushState( { foo: path }, null, path + '.html' );

            },
            _checkScroll = function( direction ) {

                if( direction > 0 && _actionScroll ){
                    _changeContent( _body.find( '.site__layout' ), _body.find( '.site__layout' ) );

                }

            },
            _writeIndexBlockToSessionStorage = function() {
                sessionStorage.setItem( 'index', JSON.stringify( {
                    timestamp: new Date(),
                    content: _obj.html()
                } ) );
            },
            _init = function() {
                sessionStorage.clear();
                _obj[0].obj = _self;
                _addEvents();
                _checkAction();
                _writeIndexBlockToSessionStorage();
            };

        _init();
    };

    var TextureText = function( obj ) {

        //private properties
        var _self = this,
            _obj = obj,
            _flag = true,
            _window = $( window);

        //private methods
        var _addEvents = function() {

                _window.on( {
                    load:function() {
                        _splitText();
                    },
                    resize: function() {

                        if( _window.width() >= 992 && _flag ) {
                            _flag = false;
                            _obj.find( 'span' ).each( function() {
                                _redrawCanvas( $( this )[0],  $( this ).find( 'canvas' )[0] )
                            } );
                        } else  if( _window.width() < 992) {
                            _flag = true;
                        }

                    }
                } );
            },
            _splitText = function() {

                _obj.each( function() {
                    var newText = $( this ).text().trim().split(' ').join( '</span> <span>' );
                    newText = '<span>' + newText + '</span>';

                    $( this ).html( newText );
                    $( newText ).append( $( '<span></span>' ) );
                } );

                _obj.find( 'span' ).each( function() {
                    _createCanvas( $( this ) )
                } );

            },
            _createCanvas = function ( elem ) {

                var canvas = document.createElement( 'canvas'),
                    ctx = canvas.getContext( '2d'),
                    img = document.createElement( 'img' );

                canvas.width = $( elem ).width() * 2;
                canvas.height = $( elem ).height() * 2;

                $( img ).on( 'load', function() {

                    _drawText( elem, canvas, ctx, img );

                } );

                img.src = 'img/text_texture.gif';

                $( elem ).append( $( canvas ).html( 'f' ) );
            },
            _drawText = function( elem, canvas, ctx, img ) {
                ctx.font = "" + $( elem ).css( 'font-weight' )+" " + parseInt( $( elem ).css( 'font-size' ) ) * 2 + "px " + $( elem ).css( 'font-family' ) + "";
                ctx.textAlign = 'left';
                ctx.textBaseline="top";
                ctx.fillText( $( elem ).text().toUpperCase(), 0, 0 );
                ctx.globalCompositeOperation = "source-in";
                ctx.drawImage( img, 0, 0, img.width , img.height, 0, 0, canvas.width * 2, canvas.height * 2 );
            },
            _redrawCanvas = function( elem, canvas ) {

                var ctx = canvas.getContext( '2d'),
                    img = document.createElement( 'img' );

                ctx.clearRect( 0, 0, canvas.width, canvas.height );

                canvas.width = $( elem ).width() * 2;
                canvas.height = $( elem ).height() * 2;

                $( img ).on( 'load', function() {

                    _drawText( elem, canvas, ctx, img  )

                } );

                img.src = 'img/text_texture.gif';

            },
            _init = function() {
                _obj[ 0 ].obj = _self;
                _addEvents();

            };

        _self.drawText = function() {
            _splitText();
        };

        _init();
    };

} )();



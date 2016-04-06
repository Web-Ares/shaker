<?php
$button = $_GET['data-id'];

if( $button == '2' ){
    $json_data = " <!-- multi-photos-slider -->
                        <div class='multi-photos-slider swiper-container'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide swiper-slide_vertical'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide2.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='1'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide2.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='2'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='3'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='4'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='5'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='6'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='7'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='8'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='9'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='10'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='11'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='12'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='13'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='14'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='15'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='16'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='17'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='18'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='19'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='20'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='21'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='22'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='23'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='24'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='25'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='26'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='27'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='28'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='29'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='30'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='31'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='32'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='33'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='34'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='35'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='36'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='37'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /multi-photos-slider -->";
}
if( $button == '1'){
    $json_data = " <!-- multi-photos-slider -->
                        <div class='multi-photos-slider swiper-container'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide swiper-slide_vertical'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide2.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='1'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide2.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='2'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='3'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='4'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='5'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='6'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='7'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='8'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='9'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='10'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='11'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='12'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='13'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='14'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='15'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='16'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='17'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='18'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='19'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='20'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='21'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='22'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='23'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='24'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='25'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='26'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='27'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='28'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='29'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='30'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='31'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                                <div class='swiper-slide'>

                                    <div class='single-photos-slider swiper-container'>
                                        <div class='swiper-wrapper'>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='32'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='33'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                            <div class='swiper-slide'>

                                                <!-- single-photos-slider__item -->
                                                <div class='single-photos-slider__item' style='background-image: url(pic/lim-art-slide1.jpg)'>

                                                    <a href='#' class='single-photos-slider__like' data-action='php/like.php' data-id='34'>like</a>

                                                    <a href='#' class='single-photos-slider__zoom popup__open' data-popup='lightbox'>zoom</a>

                                                    <!-- single-photos-slider__info -->
                                                    <div class='single-photos-slider__info'>
                                                        <div>
                                                            <span class='single-photos-slider__author'>Daniella Midenge</span>
                                                            <span class='single-photos-slider__name'>Photo Name</span>
                                                        </div>
                                                        <div>
                                                            <span class='single-photos-slider__price'>5,600 €</span>

                                                            <!-- single-photos-slider__sizes -->
                                                            <div class='single-photos-slider__sizes'>

                                                                <!-- single-photos-slider__sizes-selected -->
                                                                <span class='single-photos-slider__sizes-selected'>10x90 cm</span>
                                                                <!-- /single-photos-slider__sizes-selected -->

                                                                <!-- single-photos-slider__drop -->
                                                                <div class='single-photos-slider__drop'>
                                                                    <a class='active' href='#'>10x90 cm</a>
                                                                    <a href='#'>110x156 cm</a>
                                                                    <a href='#'>250x620 cm</a>
                                                                </div>
                                                                <!-- /single-photos-slider__drop -->

                                                                <!-- single-photos-slider__count -->
                                                                <span class='single-photos-slider__count'>
                                                                    [<span>2</span>/<span>3</span>]
                                                                </span>
                                                                <!-- /single-photos-slider__count -->

                                                            </div>
                                                            <!-- /single-photos-slider__sizes -->

                                                        </div>
                                                    </div>
                                                    <!-- single-photos-slider__info -->

                                                </div>
                                                <!-- /single-photos-slider__item -->

                                            </div>
                                        </div>

                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next swiper-button-white'></div>
                                        <div class='swiper-button-prev swiper-button-white'></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /multi-photos-slider -->";
}

$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);


echo $json_data;
exit;
?>

<!-- multi-photos-slider -->

<!-- /multi-photos-slider -->
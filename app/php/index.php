<?php

// for blocks <div/> which comes from right side we must to add class 'site__content-right'

$json_data = '<!-- site__index-bg -->
            <div class="site__index-bg" style="background-image: url(img/main-bg.jpg)"></div>
            <!-- /site__index-bg -->

            <!--link-to-page-->
            <a href="php/whoweare.php" class="link-to-page link-to-page_left"><span>who we are</span></a>
            <!--/link-to-page-->

            <!--link-to-page-->
            <a href="php/whatwedo.php" class="link-to-page link-to-page_right"><span>what we do</span></a>
            <!--/link-to-page-->

            <!--main-->
            <div class="main">

                <!-- main__centering -->
                <div class="main__centering">

                    <!--main__title-->
                    <h2 class="main__title cd-headline slide">
                        We produce

                        <!-- cd-words-wrapper -->
                        <span class="cd-words-wrapper">

                            <b class="is-visible">commercials</b>
                            <b>films</b>
                            <b>lorem</b>
                            <b>ipsum</b>

                        </span>
                        <!-- /cd-words-wrapper -->

                    </h2>
                    <!--/main__title-->

                    <!--video-link-->
                    <a href="#" class="video-link">Play our showreel</a>
                    <!--/video-link-->

                    <!-- main__works -->
                    <div class="main__works">
                        <a href="#">or view our works</a>
                    </div>
                    <!-- /main__works -->

                </div>
                <!-- /main__centering -->

            </div>
            <!--/main-->';

$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);
echo $json_data;
exit;
?>

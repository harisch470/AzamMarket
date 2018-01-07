@extends('layouts.master')
@section('headAssets')

    <link rel="stylesheet" href="ASSETS FOLDER/home assets/assets/style/stylef.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/home assets/assets/bootstrap/bootstrap.min.css"/>

    <script src="ASSETS FOLDER/home assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="ASSETS FOLDER/home assets/assets/js/image slider/cycle2.js"></script>
    <script src="ASSETS FOLDER/home assets/assets/js/image slider/index.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .hovereffect {
            width: 250px;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 350px;
            position: absolute;
            overflow: hidden;
            left: 0;
            top: auto;
            bottom: 0;
            padding: 1em;
            height: 5em;
            background: #000;
            color: #3c4a50;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
        }

        .hovereffect:hover img {
            -webkit-transform: translate3d(0, -10%, 0);
            transform: translate3d(0, -10%, 0);
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.6);
            float: left;
            margin: 0px;
            display: inline-block;
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            margin: 50px 0 0 0;
            background-color: transparent;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect p.icon-links a {
            float: right;
            color: #3c4a50;
            font-size: 1.4em;
        }

        .hovereffect:hover p.icon-links a:hover,
        .hovereffect:hover p.icon-links a:focus {
            color: #F0C;
        }

        .hovereffect h2,
        .hovereffect p.icon-links a img {
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, 200%, 0);
            transform: translate3d(0, 200%, 0);
        }

        .hovereffect p.icon-links a span:before {
            display: inline-block;
            padding: 8px 10px;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .hovereffect:hover .overlay,
        .hovereffect:hover h2,
        .hovereffect:hover p.icon-links a {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .hovereffect:hover h2 {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        .hovereffect:hover p.icon-links a:nth-child(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        .hovereffect:hover p.icon-links a:nth-child(2) {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        .hovereffect:hover p.icon-links a:first-child {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        .btn {
            background: #090;
            border-radius: 24px;
            font-family: Arial;
            color: #ffffff;
            font-size: 12px;
            padding: 5px 7px 5px 7px;
            text-decoration: none;

        }

        .btn:hover {
            background: #CF9;
            background-image: -webkit-linear-gradient(top, #59bd7a, #6aa85c);
            background-image: -moz-linear-gradient(top, #59bd7a, #6aa85c);
            background-image: -ms-linear-gradient(top, #59bd7a, #6aa85c);
            background-image: -o-linear-gradient(top, #59bd7a, #6aa85c);
            background-image: linear-gradient(to bottom, #59bd7a, #6aa85c);
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@stop
@section('title')Home@stop
@section('pageContent')
    <div id="container">


        <div id="slideshow" class="cycle-slideshow"
             data-cycle-fx="fade"
             data-cycle-manual-fx="scrollHorz"
             data-cycle-pager-fx="fade"
             data-cycle-manual-speed="400"
             data-cycle-prev="#prev"
             data-cycle-next="#next"
             data-cycle-speed="600"
             data-cycle-timeout="3000"
             data-cycle-pager="#pager"
             data-cycle-pager-template="<a href='#'><img src='' width=150 height=100></a>"
        >

            <img src="ASSETS FOLDER/home assets/assets/images/image slider/back.jpg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/Beige Lake Mt.jpg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/footer-photo1.jpg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/Path Through meadow.jpg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/Snow Mt Milky Way.jpg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/Awesome Mountain.jpeg" id="intro_img"/>
            <img src="ASSETS FOLDER/home assets/assets/images/image slider/Spring Scenery.jpg" id="intro_img"/>
        </div>


    </div>


    <div class="slider-wrap">
        <h2 class="daily_arival">DAILY ARRIVAL</h2>
        <div class="slider">
            <ul>
                <li>
                    <div class="hovereffect">
                        <img class="img1"
                             src="ASSETS FOLDER/home assets/assets/images/daily arrival/Diamande-CA-1_large.jpg"
                             alt=""/>
                        <div class="overlay">
                            <button class="btn"> Buy Now</button>
                            <p class="icon-links">
                                <a href="#">
                                    <img src="rate-star-button.svg">
                                </a>
                                <a href="#">
                                    <img src="eye.png">

                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p class="p-detail"></p>


                </li>
                <li>
                    <div class="hovereffect">
                        <img class="img1"
                             src="ASSETS FOLDER/home assets/assets/images/daily arrival/Diamande-CA-1_large.jpg"
                             alt=""/>
                        <div class="overlay">
                            <button class="btn"> Buy Now</button>
                            <p class="icon-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p class="p-detail"></p>

                </li>
                <li>
                    <div class="hovereffect">
                        <img class="img1"
                             src="ASSETS FOLDER/home assets/assets/images/daily arrival/Diamande-CA-1_large.jpg"
                             alt=""/>
                        <div class="overlay">
                            <button class="btn"> Buy Now</button>
                            <p class="icon-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p class="p-detail"></p>

                </li>
                <li>
                    <div class="hovereffect">
                        <img class="img1"
                             src="ASSETS FOLDER/home assets/assets/images/daily arrival/Diamande-CA-1_large.jpg"
                             alt=""/>
                        <div class="overlay">
                            <button class="btn"> Buy Now</button>
                            <p class="icon-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p class="p-detail"></p>

                </li>
                <li>
                    <div class="hovereffect">
                        <img class="img1"
                             src="ASSETS FOLDER/home assets/assets/images/daily arrival/Diamande-CA-1_large.jpg"
                             alt=""/>
                        <div class="overlay">
                            <button class="btn"> Buy Now</button>
                            <p class="icon-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <p class="p-detail"></p>
                </li>
            </ul>

        </div>
        <a href="#" class="slider-arrow sa-left">
            <img src="ASSETS FOLDER/home assets/assets/images/daily arrival/arr2.png" ; style="width:20px;height:20px;"></a>
        <a href="#" class="slider-arrow sa-right">
            <img src="ASSETS FOLDER/home assets/assets/images/daily arrival/arr.png" ; style="width:20px;height:20px;"></a>
    </div>

    <script src="ASSETS FOLDER/home assets/assets/js/product slider/jquery.lbslider.js"></script>
    <script src="ASSETS FOLDER/home assets/assets/js/product slider/lbslider.jquery.json"></script>
    <script>
        jQuery('.slider').lbSlider({
            leftBtn: '.sa-left',
            rightBtn: '.sa-right',
            visible: 4,
            autoPlay: true,
            autoPlayDelay: 3
        });
    </script>
    <div id="frame">
        <div class="wrap">
            <h2 class="feature_products">FEATURE PRODUCTS</h2>
            <div class="first-box">

                <img src="ASSETS FOLDER/home assets/assets/images/feature products/slideshow_5.jpg"/>

            </div>
            <div class="second-box">
                <img src="ASSETS FOLDER/home assets/assets/images/feature products/slideshow_3.jpg"/>
            </div>

            <div class="third-box">

                <img src="ASSETS FOLDER/home assets/assets/images/feature products/slideshow_3.jpg"/>


            </div>
            <div class="fourth-box">

                <img src="ASSETS FOLDER/home assets/assets/images/feature products/slideshow_3.jpg"/>


            </div>
            <div class="fifth-box">

                <img src="ASSETS FOLDER/home assets/assets/images/feature products/slideshow_3.jpg"/>


            </div>
            <p style="clear: both;">
            </p>
        </div>
    </div>
    <h2 class="trending">TRENDING</h2>
    <div class="slider-wrap">
        <div class="slider2">
            <ul>
                <li><span class="black"><img class="img1"
                                             src="ASSETS FOLDER/home assets/assets/images/trending/Louisay-ADD-1_large.jpg"/></span>
                    <br>
                    <p class="p-detail"></p>
                    <br>
                    <p></p>

                </li>
                <li><span class="red"><img class="img1"
                                           src="ASSETS FOLDER/home assets/assets/images/trending/Migdalia-CB-7_large.jpg"/></span>
                    <br>
                    <p class="p-detail"></p>
                    <br>
                    <p></p>
                </li>
                <li><span class="yellow"><img class="img1"
                                              src="ASSETS FOLDER/home assets/assets/images/trending/Voni-Navy-ADD-4_large.jpg"/></span>
                    <br>
                    <p class="p-detail"></p>
                    <br>
                    <p></p>
                </li>
                <li><span class="blue"><img class="img1"
                                            src="ASSETS FOLDER/home assets/assets/images/trending/Vorbasse-ADD-9_large.jpg"/></span>
                    <br>
                    <p class="p-detail"></p>
                    <br>
                    <p></p>
                </li>
                <li><span class="green"><img class="img1"
                                             src="ASSETS FOLDER/home assets/assets/images/trending/Migdalia-CB-7_large.jpg"/></span>
                    <br>
                    <p class="p-detail"></p>
                    <br>
                    <p></p>
                </li>
            </ul>

        </div>
        <a href="#" class="slider-arrow sa-lf"><img src="ASSETS FOLDER/home assets/assets/images/trending/arr2.png" ;
                                                    style="width:20px;height:20px;"></a> <a href="#"
                                                                                            class="slider-arrow sa-rt"><img
                    src="ASSETS FOLDER/home assets/assets/images/trending/arr.png" ;
                    style="width:20px;height:20px;"></a></div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="ASSETS FOLDER/home assets/assets/js/product slider/jquery.lbslider.js"></script>
    <script>
        jQuery('.slider2').lbSlider({
            leftBtn: '.sa-lf',
            rightBtn: '.sa-rt',
            visible: 4,
            autoPlay: true,
            autoPlayDelay: 3
        });
    </script>

    <div id="frame">

        <div class="sign-up">

            <h4>SIGN UP FOR STYLE GUIDES & LATEST OFFERS
                <input type="text" placeholder=" Sign Up with your E-mail..   " onfocus="this.placeholder = ''"
                       onblur="this.placeholder = ' Sign Up with your E-mail..   '"/>
                <button type="submit" class="button">GO</button>
            </h4>
        </div>


        <article>
            <h3 class="cfac">CLOTHING FROM AZAM CLOTH MARKET</h3>
            <p class="arti-p">
                Here at Rare London we are excited to showcase our
                new women's clothing collections alongside our
                fashion forward campaigns. Our designers are one step ahead of the game,
                following new trends hot off the runway. Introducing
                you to statement silhouettes- party dresses, body cons,
                jackets and separates, to bold prints, detailed embellishments and
                longer lengths. We’ve got your style covered with
                our wide range of women's clothes and accessories. Be on trend this
                season with Rare London for womens online fashion.
            </p>
        </article>


    </div>

    <hr class="line"/>
@stop

@section('footerAssets')@stop

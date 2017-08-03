<?php
// Require https
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr" ng-app="pjarts">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peter John Arts | Home</title>
        <link rel="icon" type="image/png" href="public/assets/favicon-32x32.png" sizes="32x32" />
        <link rel="stylesheet" href="public/vendor/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="public/vendor/foundation/css/foundation.min.css" />
        <link rel="stylesheet" href="public/vendor/foundation/css/normalize.min.css" />
        <link rel="stylesheet" href="public/vendor/aos/dist/aos.css" />
        <link rel="stylesheet" href="public/vendor/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="public/css/app.css" />
        <script src="public/vendor/modernizr/modernizr.js"></script>
    </head>
    <body ng-controller="MainController as MainCtrl">
        <header id="home">
            <div class="container">
                <div class="nav-lockup">
                    <ul class="nav">
                        <li ng-repeat="m in menu.list | filter:{ position: 'left' }">
                            <div class="nav-line"><a href="{{ m.target }}" ng-bind="m.title"></a></div>
                        </li>
                        <li class="logo">
                            <a href="#home">
                                <img class="logo" src="public/assets/pj-logo.resized.png" alt="Peter John">
                            </a>
                        </li>
                        <li ng-repeat="m in menu.list | filter:{ position: 'right' }">
                            <div class="nav-line"><a href="{{ m.target }}" ng-bind="m.title"></a></div>
                        </li>
                    </ul>
                </div>

                <div class="claim-lockup">
                    <img src="public/assets/tagline.png" alt="" class="claim">
                </div>
            </div>
            <div class="sticky-header" data-aos="fade-down" data-aos-anchor="#equipments">
                <a href="#home">
                    <img class="logo" src="public/assets/pj-logo.resized.png" alt="Peter John">
                </a>
                <div class="nav-lockup">
                    <ul class="nav">
                        <li ng-repeat="m in menu.list">
                            <div class="nav-line sticky"><a href="{{ m.target }}" ng-bind="m.title"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="content-lockup">
            <div class="section-lockup container">
                <div class="bg-accent">
                    <img src="public/assets/splash.png" alt="">
                </div> 
                <div class="p-relative section">

                    <div class="about" id="about">
                        <h1 class="heading center green" data-aos="fade" data-aos-duration="300">peter john arts</h1>

                        <div class="floating-content">
                            <div class="float-full">
                                <div class="row">
                                    <div class="large-6 columns" data-aos="fade-right">
                                        <h4>who we are</h4>
                                        <p>Since its establishment in March 2013, Peter John Arts and Signs/Advertising has been engaged in the fabrication, supply and printing of various and quality business, tricycle, house number plates and street signs in the most part of luzon.</p>

                                        <a href="" ng-click="$display_about = !$display_about;">
                                            <i class="fa" ng-class="{ 'fa-plus': !$display_about, 'fa-minus': $display_about }"></i>
                                            <span>show {{ !$display_about ? 'more' : 'less' }}</span>
                                        </a>
                                    </div>
                                    <div class="large-6 columns" data-aos="fade-left">
                                        <div class="fill"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="company-profile clearfix" id="company-profile" ng-cloak ng-if="$display_about">
                        <h2 class="heading center" data-aos="fade" data-aos-duration="300">company profile</h2>

                        <div class="content">
                            <div class="row">
                                <ol>
                                    <li>ESTABLISHED IN MARCH 3, 2003 AS SOLE PROPREITORSHIP NAMED PETER JOHN ARTS AND SIGNS/ADVERTISING WITH OFFICE ADDRESS AT BLOCK 3, LOT 23, TEACHERSVILLE SUBD., URDANETA CITY, PANGASINAN.</li>
                                    <li>NAME OF OWNER PROPRIETOR: PEDRO B. DELOS REYES JR. CONTACT NO. 09189175981/09228448921.</li>
                                    <li>SATTELITE OFFICE: 2ND LOOR STAINLESS STAR BUILDING, KM. 14, MCARTHUR HIWAY, MALINTA, VALENZUELA CITY, METRO MANILA. TEL. NO. 02-4406244, FAXNO. 02-2913900</li>
                                    <li>E-MAIL ADD: PETERJOHN.ARTSANDSIGNSADS@YAHOO.COM</li>
                                    <li>DEPARTMENT OF TRADE AND INDUSTRY (DTI) REGISTRATION NO. 00045474 ISSUED ON MARCH 3, 2003 TO MARCH 3, 2008</li>
                                    <li>DEPARTMENT OF TRADE AND INDUSTRY (DTI) REGISTRATION NO. 00368140 ISSUED ON MARCH 1, 2008 TO MARCH 1, 2013</li>
                                    <li>DEPARTMENT OF TRADE AND INDUSTRY (DTI) REGISTRATION NO. 01994197 ISSUED ON MARCH 1, 2013 TO MARCH 1, 2018</li>
                                    <li>BUREAU OF INTERNAL REVENUE REGISTRATION NO. 03-006-012222</li>
                                    <li>PHILGEPS REGISTERED AUGUST 6, 2004 WITH ITS LATEST REGISTRATION CERTIFICATE NO. 2014-14778.</li>
                                </ol>
                                <p class="text-justify">
                                    SINCE ITS ESTABLISHMENT IN MARCH 2003 PETER JOHN ARTS AND SIGNS/ ADVERTISING HAS BEEN ENGAGED IN THE FABRICATION, SUPPLY AND PRINTING OF VARIOUS AND QUALITY BUSINESS, TRICYCLE, HOUSE NUMBER PLATES AND STREET SIGNS IN MOST PARTS OF LUZON.
                                </p>
                                <p class="text-justify">
                                    IT HAD LONG BEEN SERING THE BUSINESS AND TRICYCLE PLATES REQUIREMENTS OF THE CITY GOVERNMENT OF URDANETA, PANGASINAN, AND THAT OF THE MUNICIPALITIES OF ASINGAN, ROSALES, STA. MARIA, TAYUG, SAN QUINTIN, BAUTISTA, CALASIAO, ALL OF THE PROVINCE OF PANGASINAN, MEYCAUAYAN, STA. MARIA, BALAGTAS, PLARIDEL, ALL OF THE PROVINCE OF BULACAN, CITY GOVERNMENT OF BALANGA, PILAR, HERMOSA, DINALUPIHAN, LIMAY AND MARIVELES IN THE PROVINCE OF BATAAN, LIKEWISE IN THE CITY OF SAN JOSE, SCIENCE CITY OF MUNOZ, CUYAPO, LLANERA, TALAVERA AND GUIMBA IN THE PROVINCE OF NUEVA ECIJA. 
                                </p>
                                <p class="text-justify">
                                    IN 2012, IT HAS ALSO ENGAGED IN FABRICATION OF DIFFERENT TRAFFIC AND DIRECTIONAL SIGNAGES AND CANTILEVER POST. The Company continues to establish branches with its latest Satellite Office located in KM. 14 Stainless Star Bldg., Malinta, Valenzuela City.
                                </p>
                                <p class="text-justify">
                                    In August 2016, PETER JOHN ARTS AND SIGNS/ADVERTISING established its print shop located at Stall No. 148, Building A 168 Mall, Urdaneta City, another shop at Ambrosio St., Urdaneta City.
                                </p>
                                <p class="text-justify">
                                    In September of the same year it started its kiosk which engaged in UV PRINTING located at I.T. Zone, SM City Rosales, Carmen Rosales Pangasinan, the first of its kind in Pangasinan, and soon to open its expansion branch at SM Urdaneta City.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="equipments clearfix" id="equipments" ng-if="!$display_about">
                        <h2 class="heading center" data-aos="fade" data-aos-duration="300">our equipments</h2>

                        <div class="floating-content">
                            <div class="float-full">
                                <div class="row" ng-repeat-start="item in equipments" ng-if="$odd">
                                    <div class="large-6 columns image-container" ng-style="{ 'background-image': 'url(' + item.image + ')' }" data-aos="flip-up">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="large-6 columns desc-container {{ item.color }}" data-aos="flip-down">
                                        <h4 ng-bind="item.equipment"></h4>
                                        <p ng-bind="item.description"></p>
                                    </div>
                                </div>
                                <div class="row" ng-if="$even" ng-repeat-end>
                                    <div class="large-6 columns desc-container {{ item.color }}" data-aos="flip-down">
                                        <h4 ng-bind="item.equipment"></h4>
                                        <p ng-bind="item.description"></p>
                                    </div>
                                    <div class="large-6 columns image-container" ng-style="{ 'background-image': 'url(' + item.image + ')' }" data-aos="flip-up">
                                        <div class="fill"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="services clearfix" id="services" ng-if="!$display_about">
                        <h2 class="heading center" data-aos="fade" data-aos-duration="300">our services</h2>

                        <div class="content">
                            <div class="row">
                                <div class="large-4 columns" data-aos="{{ item.anim }}" ng-repeat="item in services">
                                    <div class="item">
                                        <img ng-src="{{ item.src }}" width="90">
                                        <label ng-bind="item.service"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="products clearfix" id="products" ng-show="!$display_about">
                        <h2 class="heading center" data-aos="fade" data-aos-duration="300">featured products</h2>

                        <div class="content p-relative" data-aos="fade">
                            <div class="products-slider">
                                <div ng-repeat="product in products.featured" class="slider-item item p-relative" ng-style="{ 'background-image': 'url(' + product.src + ')' }">
                                    <label ng-bind="product.caption"></label>
                                    <small ng-bind="product.sub"></small>
                                </div>
                            </div>

                            <div class="controls">
                                <a href="#" class="products-prev prev"><i class="fa fa-arrow-left"></i></a>
                                <a href="#" class="products-next next"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact" id="contact" ng-show="!$display_about">
                        <h2 class="heading left" data-aos="fade" data-aos-duration="300">contact us</h2>

                        <div class="floating-content clearfix" data-aos="fade-right">
                            <div class="float-left">
                                <div class="row">
                                    <div class="large-6 columns">
                                        <h4>Reach out to us!</h4>
                                        <p>Got a question about Peter John Arts? Are you interested in partnering with us? Have some suggestions or just want to say hi? Contact us.</p>
                                    </div>
                                    <div class="large-6 columns">
                                        <form>
                                            <fieldset>
                                                <input type="text" name="name" placeholder="Name" autocomplete="off">
                                                <input type="text" name="email" placeholder="Email" autocomplete="off">
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="subject" placeholder="Subject" autocomplete="off">
                                            </fieldset>
                                            <fieldset>
                                                <textarea type="text" name="message" placeholder="Message" autocomplete="off" rows="3"></textarea>
                                            </fieldset>
                                            <button>
                                                <i class="fa fa-arrow-right"></i>
                                                <span>submit</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="p-relative">
                        <div class="row">
                            <div class="large-7 columns">
                                <h5>branches</h5>
                                <ul><li ng-repeat="branch in branches" ng-bind="branch.location"></li></ul>
                            </div>
                            <div class="large-5 columns">
                                <h5>contacts</h5>
                                <ul><li ng-repeat="contact in contacts" ng-bind="contact.number"></li></ul>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <ul><li ng-repeat="m in menu.list"><a ng-href="{{ m.target }}" ng-bind="m.title"></a></li></ul>
                        </div>
                        <div class="social-buttons">
                            <a href="https://www.facebook.com/pjartsandsigns"><img src="public/assets/social-buttons/fb.png"></a>
                            <a href="http://www.twitter.com"><img src="public/assets/social-buttons/twitter.png"></a>
                            <a href="http://plus.google.com"><img src="public/assets/social-buttons/gplus.png"></a>
                        </div>
                        <div class="row">
                            <p>Copyright &copy; 2017. All Rights Reserved.</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <a href="#" class="scrollup">
            <i class="fa fa-arrow-up"></i>
        </a>
        
        <!-- <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <div class="modal-border"></div>
            <div class="content-modal">
            </div>
        </div> -->

        <script src="public/vendor/foundation/js/vendor/jquery.js"></script>
        <script src="public/vendor/foundation/js/foundation.min.js"></script>
        <script src="public/vendor/aos/dist/aos.js"></script>
        <script src="public/vendor/slick-carousel/slick/slick.min.js"></script>
        <script src="public/vendor/angular/angular.min.js"></script>
        <script src="public/vendor/angular-resource/angular-resource.min.js"></script>
        <script src="public/js/app.jquery.js"></script>
        <script src="public/js/app.js"></script>
        <script src="public/js/controller.js"></script>
        <script src="public/js/factory.js"></script>
        <script>
            $(document).ready(function(){
                smoothScroll.init();
                AOS.init({
                    duration: 600,
                    easing: 'ease-in-cubic'
                });
                scrollToTop.init();
                slickSlider.init();
            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-71655560-4', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>

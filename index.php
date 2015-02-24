<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/img/favicon.ico">

        <title>HIT</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/ionicons.min.css" rel="stylesheet">
        <link href="assets/css/cubeportfolio.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">


        <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,
                    scrollwheel: true,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(59.9590244, 30.2703103) // New York

                            // How you would like to style the map. 
                            // This is where you would paste any style found on Snazzy Maps.
                            //styles: [{featureType: 'water', stylers: [{color: '#03C9A9'}, {visibility: 'on'}]}, {featureType: 'landscape', stylers: [{color: '#f2f2f2'}]}, {featureType: 'road', stylers: [{saturation: -100}, {lightness: 45}]}, {featureType: 'road.highway', stylers: [{visibility: 'simplified'}]}, {featureType: 'road.arterial', elementType: 'labels.icon', stylers: [{visibility: 'off'}]}, {featureType: 'administrative', elementType: 'labels.text.fill', stylers: [{color: '#444444'}]}, {featureType: 'transit', stylers: [{visibility: 'off'}]}, {featureType: 'poi', stylers: [{visibility: 'off'}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map-contact');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
           
        </script>


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- ********** HEADER ********** -->
        <div class="demo-1">
            <div class="content">
                <div id="large-header" class="large-header">
                    <?php
                    include 'Mobile_Detect.php';
                    $detect = new Mobile_Detect();
                    if (!$detect->isMobile() and !$detect->isTablet()) {
                        echo '<canvas id="demo-canvas"></canvas>';
                    }
                    ?>

                    <h1 class="main-title col-md-12">high <span class="thin">tech</span></h1>
                    <p class="main-tagline col-md-12">
                        Создай свое IT пространство<br><br>
                        <button class="btn btn-conf btn-theme">Узнать больше</button>
                    </p>
                </div>
            </div><!--content-->
        </div><!-- /demo-1 -->

        <!-- ********** BLACK SECTION ********** -->	
        <div id="blk">
            <div class="container">
                <div class="row">
                    <h5 class="centered">Почему выбирают нас</h5>
                    <hr class="aligncenter mb">
                    <div class="col-md-4 col-md-offset-2">
                        <p>Мы - молодая команда профессионалов. Наша цель - результат.</p>
                    </div>
                    <div class="col-md-4">
                        <p>Мы любим свою работу и делаем ее круто!
                            Потому что мы уважаем в первую очередь себя, а значит,
                            уважаем и Вас — наших друзей и клиентов.</p>
                    </div>
                </div>
            </div><!--/container-->
        </div><!--/blk section -->

        <!-- ********** GREY SECTION ********** -->	
        <div id="grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 centered">
                        <i class="icon ion-iphone"></i>
                    </div>
                    <div class="col-md-3">
                        <h5>Мобильные приложения</h5>
                        <hr>
                        <p>Мы разрабатываем мобильные приложений для iOS (iPhone, iPad, iPod), Android, Windows Phone и других платформ. Вы получите не просто готовое приложение, а комплексное воплощение ваших первоначальных замыслов в надежный, качественный и конкурентоспособный продукт.</p>
                    </div>
                    <div class="col-md-1 centered">
                        <i class="icon ion-earth"></i>
                    </div>            
                    <div class="col-md-3">
                        <h5>Web-приложения</h5>
                        <hr>
                        <p>Мы разрабатываем веб-приложения любой степени сложности. Использование последних технологий в этой сфере позволяет нам осуществлять проекты любой сложности.</p>
                    </div>
                    <div class="col-md-1 centered">
                        <i class="icon ion-monitor"></i>
                    </div>            
                    <div class="col-md-3">
                        <h5>Десктопные приложения</h5>
                        <hr>
                        <p>Мы ведем разработки на базе платформ Windows, Mac OSX, Linux/Unix и на различных языках программирования.</p>
                    </div>                        
                </div><!--/row-->
            </div><!--/container -->
        </div><!-- /grey -->

        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6 section-bg-color">
                        <p><img src="assets/img/ui-01.jpg" class="img-circle mr" height="40"><nm>Александр Кириленко</nm></p>
                        <hr>
                        <h1>Повышение эффективности бизнеса при помощи IT.</h1>
                        <h3>Современный конкурентно способный бизнез не возможен без внедрения IT.</h3>
                        <hr class="blog">
                        <p class="hidden-sm">Мы постоянно общаемся с Бизнесом: владельцами и директорамии компаний, руководителями отделов и рабочих групп. Среди проблем, с которыми сталкивается бизнес при взаимодействии с ИТ можно выделить:</p>
                        <p class="hidden-sm">— ИТ не думает бизнес-категориями: прибыль, сроки, преимущества на рынке</p>
                        <p class="hidden-sm">— ИТ-менеджеры не думают о стратегическом развитии проектов и разрабатываемых продуктов</p>
                        <p class="hidden-sm">— Инженеры, даже самые талантливые зачастую очень далеки от решения реальных бизнес задач, потебностей пользователей или решения проблем производства</p>
                        <p class="hidden-sm">Эти и многие другие проблемы приводят к изоляции потенциала ИТ и превращают ИТ в затраты. Зачастую в затраты вынужденные, просто чтобы не быть хуже или медленне, чем конкуренты. Дорогое удовольствие, на котором при первых сложностях или экономических спадах можно экономить, сокращать как издержки.</p>
                        <p class="mt"><button class="btn btn-conf btn-theme">Читать статью полностью</button></p>
                    </div>
                </div><!--/row -->
            </div><!--/container -->
        </section><!--/NEWS -->


        <!-- ********** PORTFOLIO SECTION ********** -->
        <div id="portfolio">
            <div id="grid-container" class="cbp-l-grid-fullScreen">
                <ul>
                    <li class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Image" href="assets/img/portfolio/1.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Разработка гео-информационных систем для силовыых ведомств</div>
                                        <div class="cbp-l-caption-desc"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end:Item -->
                    <li class="cbp-item web-design">
                        <a class="cbp-caption cbp-lightbox" data-title="Image" href="assets/img/portfolio/2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Создание WEB-приложений</div>
                                        <div class="cbp-l-caption-desc"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end:Item -->
                    <li class="cbp-item graphic identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Image" href="assets/img/portfolio/3.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="cbp-caption-activeWrap">
                              
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Создание мобильных приложений</div>
                                        <div class="cbp-l-caption-desc"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end:Item -->
                    <li class="cbp-item graphic identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Image" href="assets/img/portfolio/4.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/4.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Image LightBox</div>
                                        <div class="cbp-l-caption-desc">by John Doe</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end:Item -->
                </ul>
            </div><!--/grid-container-->
        </div><!--/Portfolio -->

        <div id="g">
            <div class="container">
                <div class="row sponsor centered">
                    <div class="col-sm-2 col-sm-offset-1">
                        <img src="assets/img/client1.png" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="assets/img/client3.png" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="assets/img/client2.png" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="assets/img/client4.png" alt="">
                    </div>
                    <div class="col-sm-2">
                        <img src="assets/img/client5.png" alt="">
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </div><!--/G-->

        <!-- ********** BLACK SECTION **********  
        <div id="blk">
            <div class="container">
                <div class="row">
                    <h5 class="centered">Команда</h5>
                    <hr class="aligncenter mb">
                    <div class="col-md-1 col-md-offset-1 centered">
                        <p><img src="assets/img/ui-01.jpg" class="img-circle" height="60"><nm>Rob</nm></p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="col-md-1 centered">
                        <p><img src="assets/img/ui-02.jpg" class="img-circle" height="60"><nm>Mia</nm></p>
                    </div>        
                    <div class="col-md-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div><!--/container
        </div><!--/blk section -->
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h4 class="centered">Процесс</h4>

                <div class="ensure-step ensure-step-1"></div>
            </div>
            <div class="col-md-4 col-sm-12">
                <h4 class="centered">Непрерывная интеграция</h4>

                <div class="ensure-step ensure-step-2"></div>
            </div>
            <div class="col-md-4 col-sm-12">
                <h4 class="centered">Налаженная коммуникация</h4>
                <div class="ensure-step ensure-step-3"></div>
            </div>
            <!-- <img src="/themes/cactussoft/img/we-ensure-ru.png" class="we-ensure-scheme" alt="We ensure"> -->
        </div>



        <!-- ********** GREY SECTION ********** -->  
        <div id="grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form role="form" action="register.php" method="post" enctype="plain"> 
                            <input type="email" name="email" class="subscribe-input" placeholder="Ведите свой e-mail..." required>
                            <button class='btn btn-lg btn-subscribe subscribe-submit' type="submit">Отправить запрос</button>
                        </form>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-md-6">
                        <h5>Адрес</h5>
                        <hr>
                        <p>
                            Санкт-Петербург, 198000<br/>
                            Петровский остров,<br/>
                            Ремесленная ул., 17.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5>Нашы контакты</h5>
                        <hr>
                        <p>
                            hit@hit-a.com<br/>
                            +7 911 988 88 88
                        </p>
                    </div>


                </div><!--/row-->
            </div><!--/container -->
        </div><!-- /grey -->

        <!-- ********** MAP********** -->
        <div id="map-contact"></div>



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/retina-1.1.0.js"></script>
        <script src="assets/js/TweenLite.min.js"></script>
        <script src="assets/js/EasePack.min.js"></script>
        <script src="assets/js/rAF.js"></script>
        <script src="assets/js/demo-1.js"></script>
        <script src="assets/js/jquery.cubeportfolio.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title ?></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="/assets/img/log.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="/assets/admin/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/admin/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/admin/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="/assets/admin/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/css/lib/helper.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">
</head>

<body>
<!-- end header -->

    <?=$this->include('tempadmin/aside'); ?>

    <?=$this->renderSection('content'); ?>  

<!-- start footer -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="/assets/admin/js/lib/jquery.min.js"></script>
    <script src="/assets/admin/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/assets/admin/js/lib/menubar/sidebar.js"></script>
    <script src="/assets/admin/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="/assets/admin/js/lib/bootstrap.min.js"></script>
    <script src="/assets/admin/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="/assets/admin/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="/assets/admin/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="/assets/admin/js/lib/calendar-2/pignose.init.js"></script>


    <script src="/assets/admin/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="/assets/admin/js/lib/weather/weather-init.js"></script>
    <script src="/assets/admin/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/admin/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="/assets/admin/js/lib/chartist/chartist.min.js"></script>
    <script src="/assets/admin/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="/assets/admin/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="/assets/admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/admin/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="/assets/admin/js/dashboard2.js"></script>
</body>

</html>
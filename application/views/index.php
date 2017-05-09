<!-- Header -->
<!--<header>
    <div class="container">
        <div class="intro-text">
            <a href="#services" class="page-scroll btn btn-xl">Sabe mais</a>
        </div>
    </div>
</header>-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>

<link name="author" href="Faisal Russel(russel365)" />
<meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5">

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Mobile -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!-- CSS start here -->
<!-- CSS end here -->
<!-- Google fonts start here -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<!-- Google fonts end here -->



<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>"/>

<!-- Countdown -->
<script type="text/javascript" src="<?php echo base_url('assets/modern-countdown/demo/js/kinetic.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/modern-countdown/jquery.final-countdown.js') ?>"></script>




<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });
</script>



<section class="background" height="700px">
    <div class="container">
        <div class="row ">
            <div class="center col-xs-12">
                <img  width="440px" height="270px" src="<?php echo base_url('assets/img/home/ebec1.png')?>"
                >
                <img  width="230px" height="270px" src="<?php echo base_url('assets/css/fundo9.gif')?>"
                >

            </div>

        </div>
    </div>
    <!--
                <div class="countdown countdown-container container">
                    <div class="clock row" style="margin-top:250px;">
                        <div class="center top3">
                            <p class="textsize text-gray"><b>A EBEC está a chegar! Faltam:</b></p>
                        </div>
                        <div class="clock-item clock-days countdown-time-value col-sm-3 col-md-3 hidden-xs">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-days" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-days type-time">DIAS</p>
                                    </div><!-- /.text -->
    <!-- /.inner -->
    <!-- /.wrap -->
    <!-- /.clock-item -->
    <!--
                        <div class="clock-item clock-hours countdown-time-value col-sm-3 col-md-3 hidden-xs">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-hours" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-hours type-time">HORAS</p>
                                    </div><!-- /.text -->
    <!-- /.inner -->
    <!-- /.wrap -->
    <!-- /.clock-item -->
    <!--
                        <div class="clock-item clock-minutes countdown-time-value col-sm-3 col-md-3 hidden-xs">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-minutes" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-minutes type-time">MINUTOS</p>
                                    </div><!-- /.text -->
    <!-- /.inner -->
    <!-- /.wrap -->
    <!-- /.clock-item -->
    <!--
                        <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3 hidden-xs">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-seconds" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-seconds type-time">SEGUNDOS</p>
                                    </div><!-- /.text -->
    <!-- /.inner -->
    <!-- /.wrap -->
    <!-- /.clock-item -->

    <div class="center he">
        <p class="textsite"><b>Não percas a póxima edição da maior competição de engenharia da europa!</b></p>
    </div>


</section>
<section class="bg-ebec-orange">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="center teasertitle"><b>Edição 2017</b></p>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/osqsy-kDcU4" allowfullscreen="" frameborder="0" width="100px" height="300px"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-568b1027a1f2a864" async="async"></script>


<!-- Countdown starts here -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.countdown').final_countdown({
            'start': $.now() / 1000,
            'end': 1489104000,
            'now': $.now() / 1000,
            seconds: {
                borderColor: '#3C6F9B',
                borderWidth: '20'
            },
            minutes: {
                borderColor: '#69963F',
                borderWidth: '20'
            },
            hours: {
                borderColor: '#EEA225',
                borderWidth: '20'
            },
            days: {
                borderColor: '#B26912',
                borderWidth: '20'
            }}, function() {
            // Finish callback
        });
    });
</script>


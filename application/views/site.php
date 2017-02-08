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



    <section class="background ">
        <div class="container ">
            <div class="row ">
                    <div class="center">
                        <img width="400px" height="250px" src="<?php echo base_url('assets/img/home/ebec1.png')?>"
                        >
                        <img  width="200px" height="250px" src="<?php echo base_url('assets/css/fundo9.gif')?>"
                        >

                </div>
            </div>

            <div class="countdown countdown-container container">
                <div class="clock row" style="margin-top:250px;">
                    <div class="clock-item clock-days countdown-time-value col-sm-3 col-md-3 hidden-xs">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-days type-time">DIAS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-hours countdown-time-value col-sm-3 col-md-3 hidden-xs">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-hours type-time">HORAS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-minutes countdown-time-value col-sm-3 col-md-3 hidden-xs">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-minutes type-time">MINUTOS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3 hidden-xs">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-seconds type-time">SEGUNDOS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->
                </div><!-- /.clock -->

            </div><!-- /.countdown-wrapper -->

        </div>

    </section>


<style>        
    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background: url("<?php echo base_url('assets/full-width-slider/img/b05.png') ?>") no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
    .jssorb05 .av { background-position: -67px -7px; }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

    /* jssor slider arrow navigator skin 22 css */
    /*
    .jssora22l                  (normal)
    .jssora22r                  (normal)
    .jssora22l:hover            (normal mouseover)
    .jssora22r:hover            (normal mouseover)
    .jssora22l.jssora22ldn      (mousedown)
    .jssora22r.jssora22rdn      (mousedown)
    */
    .jssora22l, .jssora22r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 40px;
        cursor: pointer;
        background: url("<?php echo base_url('assets/full-width-slider/img/a22.png') ?>") center center no-repeat;
        overflow: hidden;
    }
    .jssora22l { background-position: -10px -31px; }
    .jssora22r { background-position: -70px -31px; }
    .jssora22l:hover { background-position: -130px -31px; }
    .jssora22r:hover { background-position: -190px -31px; }
    .jssora22l.jssora22ldn { background-position: -250px -31px; }
    .jssora22r.jssora22rdn { background-position: -310px -31px; }
</style>
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
    <a href="" class="scrollToTop"></a>


<!-- News section -->
<!--<section class="bg-gray">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
              <h2 class="section-heading">Notícias</h2> 
              <br/>                   
        </div>-->              
            
        <!-- News section -->
        <!--<div class="col-md-7" id="posts-left">-->
            
        	<!-- New -->
	        <!--<div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                


	          </div>
	        </div>
	        -->


        <!--</div>-->


        <!-- Facebook page plugin -->
        <!--<div class="col-md-5" id="posts-right">
          <div class="fb-page" data-href="https://www.facebook.com/EBEC.Aveiro" data-tabs="timeline" 
          data-width="500" data-height="710" data-small-header="false" data-adapt-container-width="true" 
          data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/EBEC.Aveiro"><a href="https://www.facebook.com/EBEC.Aveiro">EBEC Aveiro</a></blockquote></div></div>
        </div>
      </div>




  </div>

</section>
    <a href="" class="scrollToTop"></a>





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=916968148360903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

<!-- Countdown -->
<script type="text/javascript" src="<?php echo base_url('assets/modern-countdown/demo/js/kinetic.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/modern-countdown/jquery.final-countdown.js') ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
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

<section class="background">
    <div class="container">
        <div class="row">
            <div class="center">
                <img width="385px" height="230px" src="<?php echo base_url('assets/img/home/ebec1.png')?>"
                >
                <img width="185px" height="230px" src="<?php echo base_url('assets/css/fundo9.gif')?>"
                >

            </div>
        </div>

        <div class="countdown countdown-container container">
            <div class="clock row" style="margin-top:250px;">
                <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-days" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-days type-time">DAYS</p>
                            </div><!-- /.text -->
                        </div><!-- /.inner -->
                    </div><!-- /.wrap -->
                </div><!-- /.clock-item -->

                <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-hours" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-hours type-time">HOURS</p>
                            </div><!-- /.text -->
                        </div><!-- /.inner -->
                    </div><!-- /.wrap -->
                </div><!-- /.clock-item -->

                <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-minutes" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-minutes type-time">MINUTES</p>
                            </div><!-- /.text -->
                        </div><!-- /.inner -->
                    </div><!-- /.wrap -->
                </div><!-- /.clock-item -->

                <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-seconds" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-seconds type-time">SECONDS</p>
                            </div><!-- /.text -->
                        </div><!-- /.inner -->
                    </div><!-- /.wrap -->
                </div><!-- /.clock-item -->
            </div><!-- /.clock -->
            <div class="center">
                <button href="<?php echo base_url('index.php/frontpage/apply')?>" type="button" class="hvr-sweep-to-right button" data-toggle="button" aria-pressed="false" autocomplete="off">
                    Apply!
                </button>
            </div>
        </div><!-- /.countdown-wrapper -->
    </div>
</section>

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
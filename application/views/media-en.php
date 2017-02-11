<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $(document).height()-20) {
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


<!-- Videos -->

<section class="bg-white" style="margin-top:-20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Videos</h2>
            </div>

            <!-- Slider -->
            <div class="container">
                <div class="col-md-12">
                    <div id="responsive"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC Aveiro 2016</h2>
            </div>

            <!-- Slider -->
            <div class="fotorama" data-width="800" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2016/1.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/2.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/3.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/4.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/6.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/7.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/8.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/9.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/10.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/11.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/12.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/13.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/14.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/15.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/16.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/17.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/18.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/19.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/20.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/21.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/22.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/23.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/24.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/25.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/26.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/27.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/28.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/29.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/30.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/31.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/32.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/33.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/34.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2016/35.jpg')?>">

            </div>
        </div>
    </div>
</section>


<!-- EBEC Aveiro 2015 -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC Aveiro 2015</h2>
            </div>

            <!-- Slider -->
            <div class="fotorama" data-width="800" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2015/0.png')?>">
                <img src="<?php echo base_url('assets/img/media/2015/1.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/2.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/3.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/4.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/15.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/17.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/39.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/55.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/61.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/64.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/68.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/72.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/75.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/77.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/97.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/101.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/104.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/105.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/108.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/111.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/112.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/117.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/128.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/136.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/148.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/149.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/153.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/157.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/161.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/162.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/163.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/171.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/175.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/180.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/190.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/199.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/200.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/209.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/215.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/216.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/226.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/228.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/231.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/234.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/235.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/241.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/247.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/249.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/280.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2015/286.jpg')?>">
            </div>
        </div>
    </div>
</section>


<!-- EBEC Aveiro 2014 -->
<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC Aveiro 2014</h2>
            </div>

            <!-- Slider -->
            <div class="fotorama" data-width="800" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2014/2.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/19.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/20.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/26.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/27.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/30.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/31.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/35.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/38.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/39.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/44.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/54.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/55.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/57.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/58.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/60.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/61.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/63.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/64.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/71.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/74.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/78.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/81.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/86.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/87.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/88.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/100.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/111.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/113.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/114.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/120.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/129.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/133.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/140.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/156.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/157.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/163.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/166.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/167.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/168.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/171.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/177.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/180.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2014/181.jpg')?>">
            </div>
        </div>
    </div>
</section>




<a href="" class="scrollToTop"></a>
<script type="text/javascript" src="<?php echo base_url('assets/youtube-tv/ytv.js') ?>"></script>
<script>
    window.onload = function(){
        window.controller = new YTV('responsive', {
            playlist: 'PLcxPfsT_Awdymh1nR9z1R6zm44IqR-jyr,PLcxPfsT_AwdwqVb6xSvAS-lnGQYrXUsJ8,PLcxPfsT_AwdxGvCiQ2QRLmHk2MmMF1UXa,PLcxPfsT_AwdwHwynjUIT8JloazbAz8-6e',
            accent: '#EEA225',
            responsive: true,
            chainVideos: true
        });
    };
</script>
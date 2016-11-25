
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop') ?>"/>
<script>
    $(document).ready(function(){

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
            if ((window.innerHeight - $(this).scrollTop())/window.innerHeight < -2) {
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

<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Vídeos</h2>
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

<!-- EBEC Aveiro 2013 -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC Aveiro 2013</h2>
            </div>

            <!-- Slider -->
            <div class="fotorama" data-width="800" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2013/10.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/19.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/29.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/34.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/48.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/71.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/72.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/77.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/79.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/85.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/94.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/113.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/120.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/122.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/124.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/126.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/128.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/132.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/136.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/156.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/159.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/161.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/164.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/171.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/176.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/179.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/230.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/238.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/259.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/260.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/277.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/278.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/280.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/284.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/288.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2013/308.jpg')?>">                
            </div>
        </div>
    </div>    
</section>

<!-- EBEC Aveiro 2012 -->
<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC Aveiro 2012</h2>
            </div>

            <!-- Slider -->
            <div class="fotorama" data-width="800" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="<?php echo base_url('assets/img/media/2012/4.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/6.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/7.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/11.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/12.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/14.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/19.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/30.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/34.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/38.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/40.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/44.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/46.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/48.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/51.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/52.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/53.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/54.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/55.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/56.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/57.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/58.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/78.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/80.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/81.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/87.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/90.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/91.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/95.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/103.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/136.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/146.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/150.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/177.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/211.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/221.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/236.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/258.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/264.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/276.jpg')?>"> 
                <img src="<?php echo base_url('assets/img/media/2012/285.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/287.jpg')?>">
                <img src="<?php echo base_url('assets/img/media/2012/302.jpg')?>">          
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
            autoplay: true,                 
            responsive: true,
            chainVideos: true
        });        
    };
</script>
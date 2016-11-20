	<!-- Header -->
	<!--<header>
	    <div class="container">
	        <div class="intro-text">	        	
	            <a href="#services" class="page-scroll btn btn-xl">Sabe mais</a>
	        </div>
	    </div>
	</header>-->


	<!-- Slider -->
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo base_url('assets/full-width-slider/img/loading.gif') ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url('assets/img/home/ebec.png') ?>" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url('assets/img/home/case_study.png') ?>" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url('assets/img/home/team_design.png') ?>" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:10px;right:10px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:10px;height:10px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

<!-- Slider script -->
<script>
  jQuery(document).ready(function ($) {
      
      var jssor_1_SlideoTransitions = [
        [{b:5500.0,d:3000.0,o:-1.0,r:240.0,e:{r:2.0}}],
        [{b:-1.0,d:1.0,o:-1.0,c:{x:51.0,t:-51.0}},{b:0.0,d:1000.0,o:1.0,c:{x:-51.0,t:51.0},e:{o:7.0,c:{x:7.0,t:7.0}}}],
        [{b:-1.0,d:1.0,o:-1.0,sX:9.0,sY:9.0},{b:1000.0,d:1000.0,o:1.0,sX:-9.0,sY:-9.0,e:{sX:2.0,sY:2.0}}],
        [{b:-1.0,d:1.0,o:-1.0,r:-180.0,sX:9.0,sY:9.0},{b:2000.0,d:1000.0,o:1.0,r:180.0,sX:-9.0,sY:-9.0,e:{r:2.0,sX:2.0,sY:2.0}}],
        [{b:-1.0,d:1.0,o:-1.0},{b:3000.0,d:2000.0,y:180.0,o:1.0,e:{y:16.0}}],
        [{b:-1.0,d:1.0,o:-1.0,r:-150.0},{b:7500.0,d:1600.0,o:1.0,r:150.0,e:{r:3.0}}],
        [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
        [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
        [{b:-1.0,d:1.0,o:-1.0,r:288.0,sX:9.0,sY:9.0},{b:9100.0,d:900.0,x:-1400.0,y:-660.0,o:1.0,r:-288.0,sX:-9.0,sY:-9.0,e:{r:6.0}},{b:10000.0,d:1600.0,x:-200.0,o:-1.0,e:{x:16.0}}]
      ];
      
      var jssor_1_options = {
        $AutoPlay: true,
        $SlideDuration: 800,
        $SlideEasing: $Jease$.$OutQuint,
        $CaptionSliderOptions: {
          $Class: $JssorCaptionSlideo$,
          $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$
        }
      };
      
      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
      
      //responsive code begin
      //you can remove responsive code if you don't want the slider scales while window resizing
      function ScaleSlider() {
          var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
          if (refSize) {
              refSize = Math.min(refSize, 1920);
              jssor_1_slider.$ScaleWidth(refSize);
          }
          else {
              window.setTimeout(ScaleSlider, 30);
          }
      }
      ScaleSlider();
      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
      //responsive code end
  });
</script>

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

<!-- Teaser -->
<section class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">            
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/hPOjZ_0Iyr0" allowfullscreen="" frameborder="0" width="300px" height="400px"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- News section -->
<section class="bg-gray">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
              <h2 class="section-heading">Notícias</h2> 
              <br/>                   
          </div>              
            
        <!-- News section -->
        <div class="col-md-7" id="posts-left">
            <!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">
	            <h4>Inova-Ria presente na feira de empresas</h4>
	            <p><span class="fa fa-clock-o"></span>&nbsp; 3 MARÇO 2016</p>
	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">
	              <a href="<?php echo base_url('index.php/frontpage/news_inovaria')?>">
	                  <img class="img-responsive " 
	                  src="<?php echo base_url('assets/img/news/news-inovaria.jpg') ?>" alt="">
	              </a>
	          </div>
	          <div class="col-md-8">                
	              <p class="text-justify">Inova-Ria presente na feira de empresas da EBEC Aveiro 2016.</p>
	              <a class="btn btn-new" href="<?php echo base_url('index.php/frontpage/news_inovaria')?>"> Continua &nbsp;<span class="fa fa-chevron-right"></span></a>
	          </div>
	        </div> 

            <!-- New -->
          <div class="row well news-post" style="margin-right:5px">
            <div class="col-md-12">
              <h4>BEST Aveiro associa-se à Cáritas Diocesana de Aveiro</h4>
              <p><span class="fa fa-clock-o"></span>&nbsp; 2 MARÇO 2016</p>
            </div>
            <div class="col-md-4" style="vertical-align: middle;">
                <a href="<?php echo base_url('index.php/frontpage/news_caritas_aveiro')?>">
                    <img class="img-responsive " 
                    src="<?php echo base_url('assets/img/news/news-caritas-aveiro.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col-md-8">                
                <p class="text-justify">Ajuda-nos a ajudar, contribuindo para a recolha de alimentos para a 
                Cáritas Diocesana de Aveiro, na feira de empresas, dia 3 de março no Complexo Pedagógico e 
                Científico.</p>
                <a class="btn btn-new" href="<?php echo base_url('index.php/frontpage/news_caritas_aveiro')?>"> Continua &nbsp;<span class="fa fa-chevron-right"></span></a>
            </div>
          </div>
        	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">
	            <h4>Grupo Visabeira presente na feira de empresas</h4>
	            <p><span class="fa fa-clock-o"></span>&nbsp; 1 MARÇO 2016</p>
	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">
	              <a href="<?php echo base_url('index.php/frontpage/news_grupo_visabeira')?>">
	                  <img class="img-responsive " 
	                  src="<?php echo base_url('assets/img/news/news-grupo-visabeira.jpg') ?>" alt="">
	              </a>
	          </div>
	          <div class="col-md-8">                
	              <p class="text-justify">Grupo Visabeira presente na feira de empresas da EBEC Aveiro 2016.</p>
	              <a class="btn btn-new" href="<?php echo base_url('index.php/frontpage/news_grupo_visabeira')?>"> Continua &nbsp;<span class="fa fa-chevron-right"></span></a>
	          </div>
	        </div> 

        	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">
	            <h4>The Navigator Company na feira de empresas</h4>
	            <p><span class="fa fa-clock-o"></span>&nbsp; 28 FEVEREIRO 2016</p>
	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">
	              <a href="<?php echo base_url('index.php/frontpage/news_the_navigator_company')?>">
	                  <img class="img-responsive " 
	                  src="<?php echo base_url('assets/img/news/news-the-navigator-company.jpg') ?>" alt="">
	              </a>
	          </div>
	          <div class="col-md-8">                
	              <p class="text-justify">The Navigator Company presente na feira de empresas da EBEC Aveiro 2016.</p>
	              <a class="btn btn-new" href="<?php echo base_url('index.php/frontpage/news_the_navigator_company')?>"> Continua &nbsp;<span class="fa fa-chevron-right"></span></a>
	          </div>
	        </div> 

        	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">
	            <h4>XLM na Feira de Empresas</h4>
	            <p><span class="fa fa-clock-o"></span>&nbsp; 26 FEVEREIRO 2016</p>
	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">
	              <a href="<?php echo base_url('index.php/frontpage/news_xlm')?>">
	                  <img class="img-responsive " 
	                  src="<?php echo base_url('assets/img/news/news-xlm.jpg') ?>" alt="">
	              </a>
	          </div>
	          <div class="col-md-8">                
	              <p class="text-justify">XLM presente na feira de empresas da EBEC Aveiro 2016.</p>
	              <a class="btn btn-new" href="<?php echo base_url('index.php/frontpage/news_xlm')?>"> Continua &nbsp;<span class="fa fa-chevron-right"></span></a>
	          </div>
	        </div>
	        <a href="" class="scrollToTop">Scroll To Top</a>

        </div>

        <!-- Facebook page plugin -->
        <div class="col-md-5" id="posts-right">
          <div class="fb-page" data-href="https://www.facebook.com/EBEC.Aveiro" data-tabs="timeline" 
          data-width="500" data-height="710" data-small-header="false" data-adapt-container-width="true" 
          data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/EBEC.Aveiro"><a href="https://www.facebook.com/EBEC.Aveiro">EBEC Aveiro</a></blockquote></div></div>
        </div>

      </div>
  </div>
</section>





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=916968148360903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
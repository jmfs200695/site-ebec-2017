
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

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	              </a>
	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 
              
            <!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	              </a>
	          </div>
	          <div class="col-md-8">                

	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	              </a>
	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	      	<!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4" style="vertical-align: middle;">

	              </a>
	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	        <!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div> 

	        <!-- New -->
	        <div class="row well news-post" style="margin-right:5px">
	          <div class="col-md-12">

	          </div>
	          <div class="col-md-4">

	          </div>
	          <div class="col-md-8">                

	          </div>
	        </div>    
	        
	      </div>

	      <!-- Facebook page plugin -->
	      <div class="col-md-5" id="posts-right">
	        <div class="fb-page" data-href="https://www.facebook.com/EBEC.Aveiro" data-tabs="timeline" 
	        data-width="500" data-height="2330" data-small-header="false" data-adapt-container-width="true" 
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
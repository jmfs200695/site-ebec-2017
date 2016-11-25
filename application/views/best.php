<!-- BEST Internacional -->


<script>
	$(document).ready(function(){

		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
			if ((window.innerHeight - $(this).scrollTop())/window.innerHeight < -0.945) {
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






<section class="">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	            <h2 class="section-heading">BEST Internacional</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-12">                
	            <p class="text-muted text-justify">
	            	O <b>BEST - Board of European Students of Technology -</b> é uma organização europeia sem fins lucrativos 
	            	e apolítica de estudantes de Ciências, Engenharia e Tecnologia, presente em 96 universidades de 
	            	33 países, com cerca de 3000 membros e abrangendo aproximadamente 1 milhão de estudantes.
	            </p>
	        </div>
	    </div>
	    <br/>
	    <div class="row">	    	     
	        <div class="col-md-6">
	        	<img class="img-responsive img-center" alt="" src="<?php echo base_url('assets/img/best/best_map.png')?>">
	            <p class="text-muted text-justify">
	            	A visão do BEST é baseada na criação de um ambiente de diversidade, entre os estudantes, propício 
	            	à aprendizagem, compreensão e respeito pelas diferentes culturas e backgrounds sociais, bem como à 
	            	preparação dos estudantes para um mercado de trabalho global, fazendo com que apliquem todo o seu 
	            	potencial e atuem de forma responsável. O BEST acredita que os ambientes culturalmente enriquecidos 
	            	aumentam a probabilidade de sucesso de um grupo de trabalho.
	            </p>	            
	        </div>
	        <div class="col-md-6">
	        	<p class="text-muted text-justify">
	            	A missão do BEST é desenvolver os estudantes, dando-lhes a oportunidade de complementar o seu 
	            	percurso académico e desenvolver soft-skills, num ambiente multicultural para compreensão da 
	            	sociedade e melhor adaptação a um mercado de trabalho globalizado. Assim, o BEST visa, através 
	            	dos seus eventos, aproximar estudantes, universidades e empresas.
	            </p>
	            <img class="img-responsive img-center" alt="" src="<?php echo base_url('assets/img/best/best_triangle.png')?>">	            
	        </div>
	    </div>
    </div>
</section>

<!-- BEST Aveiro -->
<section class="bg-gray">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	            <h2 class="section-heading">BEST Aveiro</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-12">                
	            <p class="text-muted text-justify">
	            	
	            </p>	            
	        </div>
	    </div>
	    <br/>
	    <div class="row">	    	     
	        <div class="col-md-6">
	        	<img class="img-responsive img-center" alt="" src="<?php echo base_url('assets/img/best/best_aveiro_1.jpg')?>">
	            <br/>
	            <p class="text-muted text-justify">
	            	O <b>BEST Aveiro</b> é um dos 96 grupos locais do <b>BEST</b>.
	            </p>
	            <p class="text-muted text-justify">
	            	O grupo local do BEST em Aveiro foi fundado em 2008, sob a liderança de Eric Bosne, que tinha como 
	            	objectivo desenvolver as suas capacidades académicas, partilhar experiências e conhecer novas pessoas, 
	            	tanto em Portugal como no estrangeiro, contagiando alguns colegas com a mesma vontade. O projecto 
	            	arrancou como BEST Observer group com apenas alguns membros, mas rapidamente evoluiu para o estatuto 
	            	de Baby Member e neste momento o grupo local de Aveiro possui o estatuto de Full Member.
	            </p>            
	        </div>
	        <div class="col-md-6">
	        	<p class="text-muted text-justify">
	            	Esta é uma organização de e para estudantes, trabalhando em prol do desenvolvimento pessoal, 
	            	académico e cultural dos mesmos, oferecendo diversas oportunidades de formação complementar e 
	            	intercâmbio. Para tal, o BEST Aveiro organiza anualmente:
	            </p>
	            <ul class="fa-ul">
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Curso Sazonal;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Competição de engenharia EBEC Aveiro - European BEST Engineering Competition;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; InnovationNow;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; BEST Training Days, durante todo o ano;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; ABCs - Aveiro BEST Competititons;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Workshops.
					</li>
				</ul>
				<br/>
	            <img class="img-responsive img-center" alt="" src="<?php echo base_url('assets/img/best/activities.jpg')?>">	            
	        </div>
	    </div>
    </div>
	<a href="" class="scrollToTop"></a>
</section>
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop') ?>"/>
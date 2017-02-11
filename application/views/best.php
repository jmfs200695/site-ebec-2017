<!-- BEST Internacional -->

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






<section class="">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center text-orange">
	            <h2 class="section-heading">BEST</h2>
	            <br/>
	        </div>
	    </div>
		<div class="row">
			<div class="col-md-6">
				<div class="fotorama" data-width="400" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
					<img src="<?php echo base_url('assets/img/best/tri.png')?>">
					<img src="<?php echo base_url('assets/img/best/pm.jpg')?>">
					<img src="<?php echo base_url('assets/img/best/rm.jpg')?>">

				</div>
				<br/>

			</div>
			<div class="col-md-6">
				<p class="text-muted text-justify text-black">
					O BEST (Board of European Students of Technology) é uma organização europeia sem fins lucrativos, não-governamental e apolítica para estudantes das áreas de Ciências, Tecnologias e Engenharias. Através dos 94 grupos locais presentes em 33 países de toda a Europa, construímos uma rede de estudantes inovadora, flexível e dinâmica em constante crescimento.
				</p>
				<p class="text-muted text-justify text-black">
					Desde 1989 que temos vindo a fortalecer uma relação de cooperação entre estudantes, empresas e universidades, sustentando um desenvolvimento de competências cruciais para um futuro profissional de sucesso. Através de uma educação complementar, de um apoio à carreira e de um aumento do interesse pela análise do sistema educacional, permitimos uma formação de jovens proativos, ambiciosos e versáteis. Para além disso, um dos pontos fundamentais num desenvolvimento de qualidade é ser capaz de interagir com diferentes culturas e adaptar-se a novas circunstâncias. Para tal, criamos oportunidades de progressão académica em ambiente intercultural, providenciando troca de conhecimento e experiências entre jovens de toda a Europa.
				</p>
				<br/>

			</div>
		</div>
	</div>
	    </div>

    </div>
</section>

<!-- BEST Aveiro -->
<section class="bg-ebec-orange">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center text-white">
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
				<div class="fotorama" data-width="400" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
					<img src="<?php echo base_url('assets/img/best/MW.jpg')?>">
					<img src="<?php echo base_url('assets/img/best/summer.jpg')?>">
					<img src="<?php echo base_url('assets/img/best/best.jpg')?>">

				</div>
	            <br/>

	        </div>
	        <div class="col-md-6">
	        	<p class="text-muted text-justify text-white">
					Fundado oficialmente em 2010, o Grupo Local BEST Aveiro, sediado na Universidade de Aveiro, conta com cerca de 45 membros ativos das áreas de Ciências, Tecnologias e Engenharias. Ao longo dos seus 6 anos de história, distingue-se pela diversidade e qualidade de eventos organizados. Estes abrangem tanto os estudantes a nível local, como nacional e europeu, focando-se ainda no próprio desenvolvimento dos membros da Associação, para que estes estejam em constante progressão e aprendizagem.
					O BEST Aveiro oferece aos estudantes a
					oportunidade de participar em eventos que visam a
					complementaridade dos seus estudos, organizando
					anualmente eventos como:
				</p>
	            <ul class="fa-ul">
					<li class="text-muted text-white">
						<i class="fa fa-arrow-right text-white"></i>&nbsp; Curso Sazonal;
					</li>
					<li class="text-muted text-white">
						<i class="fa fa-arrow-right text-white"></i>  EBEC Aveiro - European BEST Engineering Competition;
					</li>
					<li class="text-muted text-white">
						<i class="fa fa-arrow-right text-white"></i>&nbsp; InnovationNow;
					</li>
					<li class="text-muted text-white">
						<i class="fa fa-arrow-right text-white"></i>&nbsp; BEST Training Days, durante todo o ano;
					</li>

				</ul>
				<br/>

	        </div>
	    </div>
    </div>
	<a href="" class="scrollToTop"></a>
</section>


<script>
	$( document ).ready(function() {
		console.log("IIIII");
    	$("#nav-best").trigger('mouseover');
	});
</script>
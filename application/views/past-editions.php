<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop') ?>"/>
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



<section class="bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">VIII Edição</h2>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="text-muted text-justify">
					Nos dias 5,6 e 9 de março de 2016 decorreu no campus da Universidade de Aveiro a <b>VIII Edição da
						EBEC Aveiro</b> que contou com a participação de 104 estudantes de ciências e tecnologias e 26 equipas.
				</p>
				<p class="text-muted text-justify">
					A competição de Team Design foi apoiada pela Uniactiva, enquanto que a competição de Case Study pela
					ergostart. Os vencedores da EBEC Aveiro 2016 representaram Aveiro na fase nacional da competição, que se
					realizou em Coimbra.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding:30px">
				<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
				<img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/33')?>">
			</div>
			<div class="col-md-6" style="padding:30px">
				<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
				<img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/34')?>">
			</div>
		</div>
		<div class="row">
			<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testemunho</b></h3>
			<div class='col-md-12'>
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">

					<!-- Carousel Slides / Quotes -->
					<div class="carousel-inner">

						<!-- Quote 1 -->
						<div class="item active">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="<?php echo base_url('assets/img/contacts/MiguelOliveira.jpg')?>">
									</div>
									<div class="col-sm-8">
										<p class="text-justify">
											A EBEC Aveiro 2016 destacou-se pela evolução em relação às edições anteriores, pela primeira vez o evento contou com um workshop em Presentation Skills para os participantes, onde estes aprenderam novas técnicas e lhes permitiu preparem-se para as apresentações da competição.
											A feira de empresas contou com a participação de 11 parceiros, em que o objetivo de aproximar os nossos parceiros aos estudantes foi cumprido. Na competição tivemos duas empresas parceiras, algo inédito para o evento e que veio aumentar a qualidade do mesmo.
											É para mim um motivo de orgulho ver o crescimento da EBEC Aveiro ano após ano, acredito que a margem de evolução é enorme e antevejo desde já um melhor evento no próximo ano.
										</p>

										<small>
											Miguel Oliveira<br/>
											Coordenadora da EBEC Aveiro 2016
										</small>
									</div>
								</div>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- VII Edição -->
<section class="">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	            <h2 class="section-heading">VII Edição</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <p class="text-muted text-justify">
	            	A <b>VII Edição da EBEC Aveiro</b> realizou-se nos dias 7, 8 e 11 de março de 2015 no campus da Universidade
	            	de Aveiro (UA), esta edição contou com a participação de 96 estudantes de variados cursos da UA.
	            </p>
	        	<p class="text-muted text-justify">
					A competição de Team Design foi apoiada pela Bosch e REN, enquanto que a competição de Case Study pela
					Roboplan. Os vencedores da EBEC Aveiro 2015 representaram Aveiro na fase nacional da competição, que se
					realizou em Aveiro, tendo ambas as equipas obtido a vitória competindo contra as equipas vencedoras de
					Lisboa, Porto, Coimbra e Almada e assim avançaram à fase final da competição - EBEC Final - que se
					realizou no Porto em agosto de 2015.
	        	</p>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-6" style="padding:30px">
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/cs_winners_2015.jpg')?>">
	        </div>
	        <div class="col-md-6" style="padding:30px">                
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/td_winners_2015.jpg')?>">
	        </div>
	    </div>
	    <div class="row">
	    	<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testemunho</b></h3>
		    <div class='col-md-12'>
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="<?php echo base_url('assets/img/past-editions/testimonials/mo_2015.jpg')?>">
		                </div>
		                <div class="col-sm-8">
		                  <p class="text-justify">
		                  Em 2014 surgiu a oportunidade de abraçar o desafio de ser Coordenador da EBEC Aveiro 2015.
		                  Realmente a EBEC foi o evento que me fez tomar a iniciativa de entrar no BEST. Se foi fácil? Não, 
		                  mas sem dúvida foi das experiencias mais gratificantes que poderia ter ao longo do meu percurso 
		                  académico. Ao longo dos meses antecedentes à prova conseguir conciliar as aulas, os trabalhos, 
		                  os testes e ainda todo o trabalho que envolve este evento não foi fácil, mas chegar ao fim e 
		                  ver todo o trabalho de uma fantástica equipa fez com que tudo valesse a pena. Ser Coordenador de um
		                  evento destes é ter novos desafios diariamente, os quais sem dúvida nos fazem crescer. Por 
		                  vezes deixam-nos desconfortáveis mas é o que nos faz desenvolver pessoalmente, mas também 
		                  profissionalmente.<br/>
							Com esta experiência tive também a oportunidade de me aproximar do mundo empresarial, 
							perceber um pouco melhor como funciona e ainda ter contacto direto com as empresas.
						  </p>
		                  <small>
		                  	Orlando Pinheiro<br/>
		                  	Coordenador da EBEC Aveiro 2015
		                  </small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
	          </div>
	      	</div>                          
	    </div>
		</div>
    </div>
</section>

<!-- VI Edição -->
<section class="bg-gray">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	            <h2 class="section-heading">VI Edição</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-12">                
	            <p class="text-muted text-justify">
	            	Nos dias 15, 16 e 19 de março de 2014 decorreu no campus da Universidade de Aveiro a <b>VI Edição da 
	            	EBEC Aveiro</b> que contou com a participação de 96 estudantes de ciências e tecnologias.
	            </p>
	        	<p class="text-muted text-justify">
					À semelhança da VII Edição, os vencedores da EBEC Aveiro garantiram também a vitória na fase nacional 
					da competição, conseguindo assim marcar presença na fase final europeia que se realizou em Riga, na 
					Letónia. 
	        	</p>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-6" style="padding:30px">                
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/cs_winners_2014.jpg')?>">
	        </div>
	        <div class="col-md-6" style="padding:30px">                
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/td_winners_2014.jpg')?>">
	        </div>
	    </div>
	    <div class="row">
	    	<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testemunho</b></h3>
		    <div class='col-md-12'>
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="<?php echo base_url('assets/img/past-editions/testimonials/mo_2014.jpg')?>">
		                </div>
		                <div class="col-sm-8">
		                  <p class="text-justify">
		                  	A minha experiência enquanto Coordenadora da EBEC Aveiro 2014 permitiu-me melhorar várias
		                  	capacidades enquanto pessoa e também enquanto estudante e futura profissional. As áreas de 
		                  	resolução de conflitos, team work, strategic planning e gestão de tempo são aquelas onde notei 
		                  	mais melhorias. A experiência de organizar um evento da magnitude da EBEC Aveiro 2014 foi
		                  	sem dúvida enriquecedora e permitiu-me abraçar novos e mais ambiciosos projetos como foi o 
		                  	caso do meu mandato enquanto Presidente do BEST Aveiro no ano seguinte.
						  </p>
		                  <small>
		                  	Eduarda Morais<br/>
		                  	Coordenadora da EBEC Aveiro 2014
		                  </small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
	          </div>
	      	</div>                          
	    </div>
		</div>
    </div>
</section>

<!-- V Edição -->
<section class="">
	<div class="container">
		<div class="row">
	    	<div class="col-lg-12 text-center">
	            <h2 class="section-heading">V Edição</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">	    	     
		        <div class="col-md-12">                
		            <p class="text-muted text-justify">
		            	A V Edição da EBEC Aveiro realizou-se nos dias 9, 10 e 11 de março de 2013, esta edição teve 
		            	a participação de 92 participantes.
		            </p>
		            <p class="text-muted text-justify">
		            	A competição de Case Study contou com o apoio da Bosch, que pelo 2º ano consecutivo foi parceira 
		            	da EBEC Aveiro.
		            </p>
		        </div>
		    </div>
		    <div class="row">	    	     
		        <div class="col-md-6" style="padding:30px">                
		            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
		            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/cs_winners_2013.jpg')?>">
		        </div>
		        <div class="col-md-6" style="padding:30px">                
		            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
		            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/td_winners_2013.jpg')?>">
		        </div>
		    </div>
	    <div class="row">
	    	<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testemunho</b></h3>
		    <div class='col-md-12'>
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="<?php echo base_url('assets/img/past-editions/testimonials/mo_2013.jpg')?>">
		                </div>
		                <div class="col-sm-8">
		                  <p class="text-justify">Ser Coordenador da EBEC foi não ter um dia normal durante uns meses. Foi maior
		                  	desafio que já tive, vi-me obrigado a criar métodos de trabalho mais rígidos para conciliar
		                  	as aulas com as tarefas a que me propunha. Tive que aprender a delegar, num cargo como este
		                  	nada é possível se não soubermos delegar.
						  </p>
		                  <small>
		                  	José Aquino<br/>
		                  	Coordenador da EBEC Aveiro 2013
		                  </small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
	          </div>
	      	</div>                          
	    </div>
		</div>
</div>
</section>

<!-- IV Edição -->
<section class="bg-gray">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center">
	            <h2 class="section-heading">IV Edição</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-12">                
	            <p class="text-muted text-justify">
	            	A IV Edição da EBEC Aveiro decorreu nos dias 3, 4 e 7 março de 2012, tendo esta edição a
	            	particularidade de a denominação anteriormente utilizada - BEST Engineering Competition - 
	            	passar agora a ser European BEST Engineering Competition e assim estar envolvida na competição 
	            	internacional EBEC. O formato da competição manteve-se, continuando a duração a ser de 24h e iria 
	            	manter-se para as edições seguintes.
	            </p>
	            <p class="text-muted text-justify">
	            	A competição de Case Study foi apoiada pela Bosch e a competição de Team Design foi desenvolvida 
	            	apenas pelos membros do BEST Aveiro. O evento contou com a participação de 72 estudantes, num total 
	            	de 18 equipas. 
	            </p>
	        </div>
	    </div>
	    <div class="row">	    	     
	        <div class="col-md-6" style="padding:30px">                
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/cs_winners_2012.jpg')?>">
	        </div>
	        <div class="col-md-6" style="padding:30px">                
	            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
	            <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/td_winners_2012.jpg')?>">
	        </div>
	    </div>

		</div>
    </div>
</section>
<a href="" class="scrollToTop"></a>
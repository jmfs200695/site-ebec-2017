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



<!-- Edição 2017 -->

<section class="bg-gray">
    <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Edição 2017</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    Nos dias 11, 12 e 15 de março de 2016 decorreu no campus da Universidade de Aveiro a <b>VIII Edição da
                        EBEC Aveiro</b> que contou com a participação de [quantos?] estudantes de ciências e tecnologias e [quantas?] equipas.
                </p>
                <p class="text-muted text-justify">
                    A competição de Team Design foi apoiada pela empresa [qual?], enquanto que a competição de Case Study pela empresa
                    [qual?]. Os vencedores da EBEC Aveiro 2017 representaram Aveiro na fase nacional da competição, que se
                    realizou em [onde?].
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/33.jpg')?>">
            </div>
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/34.jpg')?>">
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
                                        <img class="img-circle" src="<?php echo base_url('assets/img/contacts/PedroReis.jpg')?>">
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-justify">
                                            Após ter sido participante da EBEC Aveiro 2016, surgiu a oportunidade de ser Coordenador da EBEC Aveiro 2017. Desde então, passaram-se 6 meses em que todos os dias eram diferentes. Era necessário organizar-me diariamente, para conseguir conciliar os estudos e o trabalho que tinha para a EBEC Aveiro, sem nunca perder a motivação para nenhum destes aspetos.
                                            Nesta edição, contámos com a presença de um Main Sponsor do evento - a Mahle; reformulamos a modalidade de Case Study - fizemos 2 provas em 24h; mantivemos a existência de um workshop e de uma feira de empresas, desta vez com um espaço de Cocktail Network. A experiência tornou-se assim enriquecedora - criar e coordenar uma equipa, manter todos motivados, encontrar e resolver problemas que apareciam todas as semanas - pode parecer duro (e é) mas, na verdade, hoje sou facilmente capaz de dizer que valeu a pena por todas as aprendizagens que eu e a minha equipa trouxemos para nós, como estudantes, como futuros trabalhadores e também como pessoas.
                                            Por último, gostaria de deixar um apelo a todos: explorem áreas de conhecimento que não conhecem, saiam da vossa zona de conforto e agarrem as oportunidades que aparecem.
                                        </p>

                                        <small>
                                            Pedro Reis<br/>
                                            Coordenador da EBEC Aveiro 2017
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


<!-- Edição 2016 -->

<section class="bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Edição 2016</h2>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="text-muted text-justify">
					Nos dias 5, 6 e 9 de março de 2016 decorreu no campus da Universidade de Aveiro a <b>VIII Edição da
						EBEC Aveiro</b> que contou com a participação de 104 estudantes de ciências e tecnologias e 26 equipas.
				</p>
				<p class="text-muted text-justify">
					A competição de Team Design foi apoiada pela empresa Uniactiva, enquanto que a competição de Case Study pela empresa
					ergostart. Os vencedores da EBEC Aveiro 2016 representaram Aveiro na fase nacional da competição, que se
					realizou em Coimbra.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding:30px">
				<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Case Study</b></h3>
				<img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/33.jpg')?>">
			</div>
			<div class="col-md-6" style="padding:30px">
				<h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Vencedores Team Design</b></h3>
				<img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/34.jpg')?>">
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
											Coordenador da EBEC Aveiro 2016
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
	            <h2 class="section-heading">Edição 2015</h2>
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
					A competição de Team Design foi apoiada pelas empresas Bosch e REN, enquanto que a competição de Case Study pela empresa
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
	            <h2 class="section-heading">Edição 2014</h2>
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


<a href="" class="scrollToTop"></a>
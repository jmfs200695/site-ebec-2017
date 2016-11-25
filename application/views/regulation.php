<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop') ?>"/>
<script>
	$(document).ready(function(){

		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
			if ((window.innerHeight - $(this).scrollTop())/window.innerHeight < -8) {
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



<section class="bg-light-gray">
	<div class="container">
		<div class="row">
	    	<div class="col-lg-12 text-center">
	            <h2 class="section-heading">Regulamento</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">        	        
	        <div class="col-md-12">

	        	<!-- Descarregar PDF -->
				<a class="btn btn-new pull-right" 
				   href="<?php echo base_url('assets/regulation/regulamento_ebec_aveiro_2016.pdf') ?>" 
				   target="_blank"><b><i class="fa fa-file-pdf-o"></i>&nbsp; Descarregar</b>
				</a>
				<br/><br/><br/>
	            <p class="text-justify">
	            	O Local BEST Group Aveiro, adiante designado por BEST Aveiro, 
	            	promove uma Competição de Engenharia sob a designação de <i>European 
	            	BEST Engineering Competition Aveiro</i> - EBEC Aveiro. 
	          	</p>     

	          	<hr-orange></hr-orange>

	          	<!-- Capítulo I -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo I<br>
					European BEST Engineering Competition Aveiro
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 1º<br>
					Princípios Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						A organização é	composta pelos responsáveis	das	provas de ambas	as modalidades,	pelo 
						coordenador	da EBEC	Aveiro e pelos membros do BEST Aveiro;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		A EBEC Aveiro será composta	por	duas modalidades que decorrerão	em paralelo: 
		          		<i>Team Design</i>	e <i>Case Study</i>;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						A EBEC Aveiro tem como objetivos:</p>
						<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><b>i.</b></span>&nbsp; 
				          		Desenvolver competências e capacidades de resolução de 
				          		problemas;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>ii.</b></span>&nbsp; 
				          		Possibilitar a aplicação prática de conhecimentos teóricos 
				          		obtidos no desenvolvimento académico dos estudantes;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>iii.</b></span>&nbsp; 
				          		Motivar a aprendizagem através de novas experiências, 
				          		proporcionando simultaneamente momentos de lazer e diversão;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>iv.</b></span>&nbsp; 
				          		Fomentar a discussão entre alunos, professores e 
				          		representantes de empresas;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>v.</b></span>&nbsp; 
				          		Representar a Universidade de Aveiro na EBEC Portugal.</p>
							</li>
						</ul>
					</li>
				</ul>
				<hr-orange></hr-orange>

				<!-- Capítulo II -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo II<br>
					Destinatários
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 2º<br>
					Para admissão e exclusão
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Apenas poderão participar na EBEC Aveiro os alunos da Universidade de Aveiro que pertençam às 
						Licenciaturas, Mestrados e Doutoramentos referentes	aos	cursos de Biologia,	Biologia 
						e Geologia,	Bioquímica,	Biotecnologia, Ciências Biomédicas,	Ciências do	Mar, Engenharia	Civil,
						Engenharia de Computadores e Telemática, Engenharia	de Materiais, Engenharia do	Ambiente, 
						Engenharia e Gestão	Industrial,	Engenharia Eletrónica e	Telecomunicações, Engenharia Física,
						Engenharia Geológica, Engenharia Informática, Engenharia Mecânica, Engenharia Química, Física,
						Matemática,	Meteorologia, Oceanografia e Geofísica,	Novas Tecnologias da Comunicação, Química
						e Reabilitação do Património;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Os participantes deverão candidatar-se em grupos de quatro 
		          		elementos;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						A inscrição de equipas com menos de quatro elementos poderá 
						ser admitida mediante decisão da organização;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						Os participantes somente podem participar numa das modalidades 
						referidas no Artigo 1º, alínea b);</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						As inscrições são limitadas a quinze equipas por modalidade;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						As equipas são escolhidas por ordem de inscrição;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Ficam excluídos da participação na EBEC Aveiro todos os associados 
						do BEST Aveiro e/ou que estejam vinculados de alguma forma ao 
						grupo BEST;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						Poderão participar na prova antigos membros do BEST Aveiro, desde 
						que não se encontrem de forma alguma associados à associação no 
						presente momento ou não tenham saído da mesma no presente ano civil;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>i)</b></span>&nbsp;  
						A participação no evento implica a aceitação de todas as cláusulas 
						constantes do presente regulamento.</p>						
					</li>
				</ul>
				<hr-orange></hr-orange>

				<!-- Capítulo III -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo III<br>
					Local, Data e Inscrição
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 3º<br>
					Condições Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						A EBEC Aveiro será realizada nas instalações e campus da Universidade de Aveiro;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		O evento terá lugar	nos	dias 2, 3, 5, 6 e 9 de março de	2016;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						As pré-inscrições na EBEC Aveiro serão feitas através do site do BEST, até às 23:59	do dia 
						28 de fevereiro. A ligação de acesso às	inscrições está	disponível no site da competição,
						em <a href="http://bestaveiro.web.ua.pt/ebec/" target="_blank">http://bestaveiro.web.ua.pt/ebec/</a>;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						A organização reserva-se ao	direito	de antecipar ou	prolongar o	prazo de pré-inscrições,
						consoante o	número de equipas inscritas;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						No ato da pré-inscrição, os	participantes deverão fornecer os seguintes	dados: nome, curso,	
						ano	curricular que frequenta, número mecanográfico,	e-mail,	número de telefone,	nome de
						equipa e responsável da	equipa;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						A inscrição	da equipa só é considerada válida após a pré-inscrição de todos	os seus	elementos
						na plataforma, o registo de	todos na respetiva equipa e	a confirmação via e-mail para o	
						responsável	da equipa;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Após a confirmação da inscrição	na EBEC	Aveiro,	o responsável da equipa	terá de proceder ao	
						pagamento de uma caução	de 20 euros, efetuando uma transferência para o	IBAN do	BEST Aveiro,
						PT 50 0035 0123	00133686630	23,	até	4 dias após	a confirmação da inscrição.	Esta será 
						restituída após	o evento a não ser que se verifique	o descrito no Artigo 4º, alínea	e);</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						O não pagamento	da caução implica o	anulamento da inscrição. Casos excecionais poderão ser 
						remetidos para a organização do	evento para	apreciação;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>i)</b></span>&nbsp;  
						O nome da equipa está sujeito a	alteração, no caso de este ser considerado impróprio pela 
						organização.</p>						
					</li>
				</ul>
				<hr-orange></hr-orange>

				<!-- Capítulo IV -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo IV<br>
					Evento
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 4º<br>
					Informações Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Durante	o tempo	reservado para a realização	da prova é necessário que todos	os 
						elementos de cada equipa estejam presentes no local	especificado, salvo	em exceções	
						aprovadas pela organização;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Antes do início	da competição será efetuado	um sorteio de forma	a efetuar a	atribuição 
		          		de salas ou	espaço delimitado para cada	uma	das	equipas;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						A cada equipa inscrita será	entregue no	início da prova:</p>
						<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		horário	da	competição;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		guião da prova;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		regulamento	da competição;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		ferramentas	e/ou acessórios;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		listagem de	materiais contidos na caixa;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		advertências e/ou outras notas de interesse.</p>
							</li>
						</ul>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						A prova	é regulamentada	por	um guião disponibilizado pela organização;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						A caução não será restituída caso haja deterioração do material e/ou espaço, a organização
						considere o comportamento da equipa	inadequado ou a	equipa não compareça no	evento;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						No caso	de algum participante causar qualquer tipo de danos no material pertencente	ao 
						campus universitário a responsabilidade	é do próprio e a caução	não	lhe	será restituída;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Quaisquer materiais	de fotografia ou vídeo recolhidos durante a	competição,	em que os 
						participantes apareçam,	podem ser usados em	futuros	materiais promocionais ou de divulgação	
						do BEST	Aveiro;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						Fotografias	e/ou vídeos	que revelem informações acerca da prova não	serão publicadas durante
						o tempo	da competição.</p>						
					</li>
				</ul>

				<br/>

				<!-- Secção I -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Secção I<br>
					Team Design
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 5º<br>
					Princípios Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Caso a prova de <i>Team Design</i> seja elaborada por uma empresa, as soluções para	a mesmo
						são	da propriedade da entidade fornecedora da prova, no	entanto	a autoria é	da equipa ou da	
						pessoa que propôs os resultados;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Para cada equipa participante será reservado um espaço, onde esta deverá executar a	
		          		tarefa proposta não sendo permitido	o transporte de	qualquer material fornecido	e 
		          		desenvolvido, bem como o protótipo, para fora do local de construção até ao	final do tempo
		          		de trabalho;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						Todos os materiais e ferramentas utilizados na construção do protótipo deverão ser apenas os
						fornecidos pela organização	e contemplados no guião	da prova. O	incumprimento desta	alínea 
						dá direito à invalidação do	protótipo e desqualificação	da equipa;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						No decorrer	da atividade, será permitido chamar	um responsável da organização do evento	com	
						vista ao esclarecimento de qualquer	dúvida referente ao	objetivo da	prova;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						Não	é permitida	a saída	dos	participantes do local de desenvolvimento da prova 
						temporariamente ouantes	do término da mesma. Será dada tolerância de uma hora e	trinta 
						minutos	às equipas que desejem terminar	a prova	antes do tempo previsto. O incumprimento 
						desta alínea dá	direito	à invalidação do protótipo e desqualificação da equipa.	Casos
						excecionais	serão avaliados	pela organização;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						No espaço atribuído a cada equipa, não é permitida a entrada de elementos não pertencentes 
						à equipa, sem autorização da mesma,	à exceção dos membros da organização;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Não	é permitida	a entrada dos participantes	na sala	da organização,	sem	autorização	prévia 
						da mesma;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						Após esgotado o	período	cedido para	a execução da atividade, um	elemento do	BEST Aveiro	
						deslocar-se-á à	sala de	cada uma das equipas com vista a instruir a	equipa quanto ao 
						transporte do protótipo, mesmo que não esteja totalmente terminado;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>i)</b></span>&nbsp;  
						Os participantes deverão seguir	as regras estipuladas no Guião de Prova	caso contrário 
						estarão	sujeitos às	penalizações discriminadas no mesmo;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>j)</b></span>&nbsp;  
						Os participantes, no final da prova, terão de deixar o local de	trabalho limpo.</p>						
					</li>
				</ul>

				<br/>

				<h4 class="text-center text-orange text-no-transform">
	            	Artigo 6º<br>
					Loja
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						A Loja,	associada à prova de <i>Team Design</i>, é o local onde as equipas podem 
						requisitar ferramentas e transacionar créditos por material;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		As equipas de <i>Team Design</i> iniciam a prova com um	dado número	de créditos;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						A loja é constituída por uma banca de material e uma banca de ferramentas;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						Na banca de	material existe	material suplementar cujo valor	de créditos	difere consoante 
						a sua valorização, definida pela organização;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						A tentativa	de sabotagem de	outras equipas e de	manipulação	dos	responsáveis da	loja dá	
						direito	a desqualificação da prova;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						Relativamente à	banca de ferramentas:</p>
						<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><b>a.</b></span>&nbsp; 
				          		Encontram-se disponíveis várias ferramentas que podem ser requisitadas por um 
				          		determinado	intervalo de tempo,	mediante o preenchimento de	uma	folha de requisição. 
				          		A ordem	de utilização da ferramenta	segue a	ordem de inscrição;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>b.</b></span>&nbsp; 
				          		A ferramenta uma vez utilizada, só pode ser requisitada novamente pela mesma equipa, 
				          		no fim de outra equipa a ter utilizado.	Esta alínea	é inválida quando não existirem	
				          		equipas	em lista de	espera.</p>
							</li>
						</ul>						
					</li>
				</ul>

				<br/>

				<h4 class="text-center text-orange text-no-transform">
	            	Artigo 7º<br>
					Mini-provas
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Uma	mini-prova é uma pequena competição, de carácter não obrigatório, entre as equipas 
						participantes e realizada durante o	evento;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Haverá três	mini-provas	durante	a competição em	que cada uma será desvendada de	seis em	seis 
		          		horas, devendo ser estas realizadas dentro do tempo	destinado;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						Será distribuído um	guião para cada	mini-prova no início destinado à mesma;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						Não	haverá competição direta entre as equipas;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						Os materiais utilizados	para a realização das mini-provas deverão ser adquiridos na	loja, 
						com	recurso	aos	créditos de cada equipa;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						Serão atribuídos créditos adicionais às	equipas	que	realizarem as mini-provas com sucesso;</p>												
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Estas serão	avaliadas no final do tempo	destinado a	cada mini-prova	por	dois elementos da 
						organização.</p>												
					</li>
				</ul>

				<br/>

				<!-- Secção II -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Secção II<br>
					Case Study
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 8º<br>
					Princípios Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Caso a prova de <i>Case Study</i> seja elaborada por uma empresa, os resultados 
						provenientes são da	propriedade da entidade	fornecedora	da prova, no entanto a 
						autoria	é da equipa	ou da pessoa que propôs	os resultados;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		O tema desta modalidade	é confidencial,	sendo que durante ou após da prova,	o tema 
		          		não	poderá ser divulgado;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						No decorrer	da atividade, será permitido chamar	um membro da organização do	evento com 
						vista ao esclarecimento de qualquer	dúvida referente ao	objetivo da prova;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						Só haverá autorização de saída do local	da prova mediante consulta e autorização dos 
						organizadores;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						Não	é permitida	a saída	dos	participantes do local de desenvolvimento da prova 
						temporariamente	ou antes do	término da mesma. Será dada tolerância de uma hora e 
						trinta minutos às equipas que desejem terminar a prova antes do	tempo previsto.	O 
						incumprimento desta	alínea dá direito à	invalidação	da solução e desqualificação da equipa. 
						Casos excecionais serão	avaliados pela organização;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						Na sala	atribuída a	cada equipa, não é permitida a entrada de elementos	não	pertencentes à 
						equipa,	sem	autorização da mesma, à	exceção	dos	membros	da organização;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Não	é permitida	a entrada dos participantes	na sala	da organização,	sem	autorização	prévia 
						dos	organizadores;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						É permitida	a utilização de	computadores;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>i)</b></span>&nbsp;  
						Para o caso de os trabalhos serem guardados em formato digital, estes deverão ser 
						guardados em ficheiros com o título: CS_"NUMERO CASE STUDY"_"NOME EQUIPA" e	enviados 
						até	ao final da	prova para o e-mail	a ser indicado posteriormente.</p>						
					</li>
				</ul>

				<br/>

				<h4 class="text-center text-orange text-no-transform">
	            	Artigo 9º<br>
					Mini-provas
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Uma	mini-prova é uma pequena competição, de carácter não obrigatório, entre as equipas 
						participantes e realizada durante o	evento;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Haverá três	mini-provas	durante	a competição em	que cada uma será desvendada de	seis em	seis 
		          		horas, devendo ser estas realizadas dentro do tempo	destinado;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						Será distribuído um	guião para cada	mini-prova no início destinado à mesma;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						A mini-prova será realizada em contrarrelógio, ou seja, serão favorecidas as equipas que 
						apresentarem a solução correta em menor	tempo;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						No final das três mini-provas serão	contabilizados os pontos ganhos	por	cada equipa;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						A escolha da ordem de apresentações	será definida em função	dos	pontos ganhos;</p>												
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Em caso	de empate ou não resolução,	a ordem	de apresentação	será definida aleatoriamente.</p>												
					</li>
				</ul>

				<hr-orange></hr-orange>

				<!-- Capítulo V -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo V<br>
					Competição e Avaliação
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 10º<br>
					Condições Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Todas as condições de avaliação	e teste	dos	protótipos serão dadas a conhecer às 
						equipas	participantes antes	do início da prova;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Os participantes podem optar por apresentar	os protótipos de <i>Team Design</i>	e as 
		          		soluções de	<i>Case	Study</i> em inglês	ou em português. As	apresentações em inglês	
		          		são	preferenciais e	valorizadas	pelo júri;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp;  
						Os guiões de ambas as modalidades apenas estarão disponíveis em	inglês;</p>										
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp;  
						A organização da EBEC Aveiro compromete-se a disponibilizar	os recursos	e infraestruturas necessárias 
						aos	testes dos protótipos, bem como	salvaguardar que as	condições de teste se mantenham	
						inalteradas	no decorrer	da competição;</p>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>e)</b></span>&nbsp;  
						A organização poderá divulgar, durante e após o	final da competição, qualquer componente 
						multimédia obtida durante a	competição;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>f)</b></span>&nbsp;  
						Os protótipos apresentados pelas equipas serão testados/avaliados individualmente e	por	
						turnos,	ou seja, não existirá competição direta	entre protótipos;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>g)</b></span>&nbsp;  
						Compete	à organização do evento	entregar uma grelha	contendo os	parâmetros de avaliação, assim 
						como uma listagem de todas as equipas em competição, a cada	um dos elementos do	júri de	
						forma a	determinar os premiados;</p>						
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>h)</b></span>&nbsp;  
						O anúncio dos vencedores será efetuado em cerimónia	pública.</p>						
					</li>
				</ul>

				<hr-orange></hr-orange>

				<!-- Capítulo VI -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo VI<br>
					Júri
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 11º<br>
					Condições Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						O júri será	constituído:</p>
						<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><b>a.</b></span>&nbsp; 
				          		Para a modalidade de <i>Team Design</i>, por docentes da Universidade de 
				          		Aveiro e/ou representantes de empresas parceiras;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><b>b.</b></span>&nbsp; 
				          		Para a modalidade de <i>Case Study</i>, por docentes da Universidade de 
				          		Aveiro e/ou	representantes de empresas parceiras.</p>
							</li>
						</ul>			
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		As	competências do júri são:</p>
		          		<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		no caso	de <i>Team Design</i>, proceder	à avaliação	relativa aos parâmetros 
				          		subjetivos dos modelos em concurso;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		na componente de <i>Case Study</i>,	o júri é inteiramente responsável pela 
				          		avaliação dos modelos apresentados.</p>
							</li>							
						</ul>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp; 
		          		As competências dos	organizadores responsáveis pela	avaliação são:</p>
		          		<ul class="fa-ul">
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		zelar pelo cumprimento dos artigos constantes no presente regulamento;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		fiscalizar a prova e os	resultados das provas desenvolvidas	pelas equipas, 
				          		registando as avaliações;</p>
							</li>
							<li>
								<p class="text-justify"><span class="text-orange"><i class="fa fa-circle"></i></span>&nbsp; 
				          		aplicar	as penas e/ou soluções que considerarem	pertinentes	em casos omissos 
				          		no presente	regulamento	ou no guião	da prova.</p>
							</li>							
						</ul>
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp; 
		          		As decisões	tomadas	pelo júri em conjunto com o	coordenador	da competição no 
		          		decorrer do	evento são soberanas.</p>		          		
					</li>					
				</ul>

				<hr-orange></hr-orange>

				<!-- Capítulo VII -->
	          	<h3 class="text-center text-orange text-no-transform">
	            	Capítulo VII<br>
					Prémios
	          	</h3>
	          	<br/>
	          	<h4 class="text-center text-orange text-no-transform">
	            	Artigo 12º<br>
					Disposições Gerais
	          	</h4>
	          	<br/>
	          	<ul class="fa-ul">
					<li>
						<p class="text-justify"><span class="text-orange"><b>a)</b></span>&nbsp;
						Serão aprovadas para a etapa nacional, a EBEC Portugal,	as equipas que alcançarem o	1º 
						lugar em cada uma das modalidades: <i>Team Design</i> e	<i>Case	Study</i>;</p>									
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>b)</b></span>&nbsp; 
		          		Caso uma das equipas vencedoras	não	possa participar na	EBEC Portugal, será	atribuído o	
		          		lugar à	equipa seguinte	com melhor classificação;</p>		          		
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>c)</b></span>&nbsp; 
		          		Caso um	dos	elementos de uma das equipas não possa participar na etapa nacional, 
		          		EBEC Portugal, a equipa respetiva deve encontrar um	participante substituto	que	cumpra 
		          		o Artigo 2º, alínea	a);</p>		          									
					</li>
					<li>
						<p class="text-justify"><span class="text-orange"><b>d)</b></span>&nbsp; 
		          		Todos os participantes receberão ainda um certificado de participação devidamente 
		          		assinado pelo representante	do júri ou empresa,	pelo coordenador do	evento e pelo 
		          		presidente do BEST Aveiro.</p>		          		
					</li>					
				</ul>

				<hr-orange></hr-orange>

				<!-- Descarregar PDF -->
				<a class="btn btn-new pull-right" 
				   href="<?php echo base_url('assets/regulation/regulamento_ebec_aveiro_2016.pdf') ?>" 
				   target="_blank"><b><i class="fa fa-file-pdf-o"></i>&nbsp; Descarregar</b>
				</a>
  	        </div>
		</div>
	</div>
</section>
<a href="" class="scrollToTop"></a>
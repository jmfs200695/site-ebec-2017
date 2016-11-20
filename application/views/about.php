
<!-- For Facebook: -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/pt_PT/all.js#xfbml=1";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>


<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
			<a class="brand" href="<?php echo base_url()?>"><img class="nav_best_logo logo" src="<?php echo base_url('assets/img/ebec_logo.png')?>"></a>
			<ul class="nav">
					<li><a href="<?php echo base_url('index.php/frontpage/about/desc')?>">Informação</a></li>
                    <li><a href="<?php echo base_url('index.php/frontpage/apply')?>">Inscrição</a></li>
					<li><a href="<?php echo base_url('index.php/frontpage/media')?>">Media</a></li>
					<li><a href="<?php echo base_url('index.php/frontpage/faqs/')?>">FAQ</a></li>
					<li><a href="<?php echo base_url('index.php/frontpage/partners')?>">Parceiros</a></li>
					<li><a href="<?php echo base_url('index.php/frontpage/contacts')?>">Contactos</a></li>
			</ul>
			<a class="brand" href="http://best.eu.org" target="_blank"><img class="nav_best_logo logo" src="<?php echo base_url('assets/img/best_logo.png') ?>"></a>
	</div>
</div>

<div id="body">
<div class="container">
	<div class="row-fluid page-header">
			<div class="span6">
				<h2>EBEC Aveiro</h2>
			</div>
			<div class="span6">
				<div class="span5">
					<ul class="nav nav-pills about_nav" id="nav_bar">
	  				<li class="<?php if ($this->uri->segment(3) == "desc") {echo "active";}?>">
	    				<a href="#description">Descrição</a>
	 			 	</li>
	  				<li class="<?php if ($this->uri->segment(3) == "categ") {echo "active";}?>"><a href="#categories">Categorias</a></li>
				</ul>
				</div>
				<div class="about_nav pull-right">
					<a class="btn" href="<?php echo base_url('assets/Schedule.pdf') ?>" target="_blank"><i class="icon-download"></i>  Horário</a>
					<a class="btn" href="<?php echo base_url('assets/rule2015.pdf') ?>" target="_blank"><i class="icon-download"></i>  Regulamento</a>
				</div> 
			</div>
	</div>
</div>
<div class= "container">
	<div class="row-fluid">
		<div class="span6 scroll">
			<div id="myCarousel" class="carousel slide vertical_align">
  				<!-- Carousel items -->
  				<div class="carousel-inner">
    				<div class="active item"><img src="<?php echo base_url('assets/img/photos/carousel/1.png')?>"></div>
    				<div class="item"><img src="<?php echo base_url('assets/img/photos/carousel/2.png')?>"></div>
    				<div class="item"><img src="<?php echo base_url('assets/img/photos/carousel/3.png')?>"></div>
    				<div class="item"><img src="<?php echo base_url('assets/img/photos/carousel/4.png')?>"></div>
  				</div>
<!--   				
  				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
			</div>
		</div>
		<div class="tab-content span6 pull-right scroll">
  			<div class="tab-pane fade in <?php if ($this->uri->segment(3) == "desc") {echo "active";}?>" id="description">
  				<p>A EBEC Aveiro é a competição de Engenharia anualmente organizada pelo BEST Aveiro, na Universidade de Aveiro (UA). É a primeira fase de competições do projeto europeu EBEC – European BEST Engineering Competition, desenvolvido pelo BEST. Este ano, o BEST Aveiro realiza a 7ª edição da competição e vem desafiar-te a aceitar o desafio novamente, oferecendo duas categorias distintas de prova (Case Study e Team Design). Tal como na edição anterior, a competição terá uma duração de 24h.</p>
  				<p>Este é um dos eventos de maior destaque do BEST Aveiro, direcionado aos alunos da UA. Após várias edições, este evento tem vindo a crescer consideravelmente e pretende ser um marco no calendário académico.</p>
  				<p>A competição pretende pôr à prova os conhecimentos teóricos dos alunos, a sua criatividade na resolução de problemas e a sua capacidade de trabalho em equipa. A EBEC Aveiro é também uma oportunidade para os alunos contactarem com as empresas parceiras num âmbito mais profissional.</p>
  				<p>Assim, se estás à procura de um desafio que te permita promover, ao mesmo tempo, os teus conhecimentos, dotes técnicos e capacidades intelectuais, esta é a tua competição! Vão ser 24 horas de trabalho em equipa, envolvidas de um espirito dinâmico e acolhedor que serão, com certeza, "do BEST"!</p>
  				<p>Não percas esta competição. Inscreve-te!</p>
  			</div>
  			<div class="tab-pane fade in <?php if ($this->uri->segment(3) == "categ") {echo "active";}?>" id="categories">
  				<p>Na EBEC Aveiro, podes participar numa de duas categorias distintas: Team Design ou Case Study. Podes escolher em que modalidade queres participar no ato da inscrição da tua equipa.</p>
  				<h4>Case Study</h4>
  				<p>Consiste na resolução de um problema teórico sobre problemas técnicos e/ou de gestão, baseados em fatos reais e fornecido por uma empresa. Para resolver a prova, deverás usar toda a informação que te é facultada. Poderás pesquisar em fontes externas, se tal for permitido pelo regulamento da tua prova. No final do desafio, a tua equipa apresentará as soluções encontradas durante as 24h de prova, numa pequena apresentação que se realizará dia 11 de março.</p>
  				<p>Além de desenvolveres o trabalho/discussão de ideias em equipa e as tuas capacidades intelectuais, esta será também uma ótima oportunidade para entrares em contacto com as empresas parceiras da competição.</p>
  				<p>A título de exemplo, alguns dos problemas postos nesta categoria, em anos anteriores, são: resolução de problemas de gestão de tráfego em cidades subdesenvolvidas, supply-chain de empresas, planeamento de Jogos Olímpicos em cidades com condições adversas, promoção de produtos, etc.</p>

  				<h4>Team Design</h4>
  				<p>Consiste na construção de um protótipo, com materiais limitados, para a resolução de um problema técnico proposto. Os materiais e as ferramentas serão fornecidos pelo BEST Aveiro, bem como toda a informação necessária para a prova. Terás de encontrar uma solução técnica, em conjunto com os membros da tua equipa, dentro das 24h de competição, que seja capaz de superar as provas a que o teu protótipo será submetido no dia 11 de março.</p>
  				<p>Esta é portanto uma prova que exige toda a tua criatividade, toda a tua capacidade técnica e intelectual para, em equipa, chegares a uma solução bem-sucedida.</p>
  				<p>Exemplos de competições anteriores: construção de um barco movido com uma lamparina; construção de um lançador de projéteis capaz de superar diversos desafios.</p>
  			</div>
		</div>
	</div>
	<hr class="soften"/>

<script src="<?php echo base_url('assets/js/jquery.localscroll-1.2.7-min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo-1.4.3.1-min.js') ?>"></script>

<div class="row-fluid page-header">
		<div class="span6">
			<h2>Próximas Etapas...<a name="next"></a></h2>
		</div>
		<div class="span6" id="navigation">
			<ul class="nav nav-pills about_nav" id="nav_bar_etapas">
	  			<li id="ebec_pt_click"><a href="#pt">EBEC Portugal</a></li>
 				<li id="ebec_click"><a href="#ebec">EBEC</a></li>
 			</ul>
		</div>
	</div>

	<div class="span6 scroll2" id="content" data-spy="scroll" data-target="#navigation">
  				<p>A EBEC – European BEST Engineering Competition – é o maior projeto europeu desenvolvido pelo BEST e é, sem dúvida, um dos mais mediáticos. Este projeto compreende três fases de competição e, em cada uma delas, é lançado um desafio de Case Study e Team Design aos estudantes, sendo apurados os vencedores de ambas as categorias.</p>
  				</br>
  		
  		
  				<h4 id="pt">EBEC Portugal</h4>
  				<p>2ª fase da competição. Competição nacional de engenharia realizada, este ano, na Universidade de Aveiro, de 22 a 24 Maio 2015. Pela quinta vez consecutiva, a competição nacional será em formato 24h. Esta será a 9ª edição a nível nacional, em Portugal.</p>
  				<p class="center"><a class="btn btn-primary" href=http://www.ebecportugal.pt/ target="_blank"><i class="icon-globe"></i>  Website</a></p>

  				</br>
  		
  				<h4 id="ebec">EBEC</h4>
  				<p>A final da competição europeia de engenharia, onde irão competir os vencedores das etapas Nacionais/Regionais. Este ano, vai realizar-se no Porto, em Portugal (datas por definir), que será a 5ª edição desta prova.</p>
  				<p class="center"><a class="btn btn-primary" href=http://ebec.best.eu.org/index.php target="_blank"><i class="icon-globe"></i>  Website</a></p>
  				</br>
  				</br>	
	</div>
    <div class="span5 scroll2">
      <div id="myCarousel2" class="carousel carousel-fade slide vertical_align">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
            <div class="img_container2">
              <div class="img_square2">
                <img src="<?php echo base_url('assets/img/EBEC pyramid 2014 corbel.png')?>">
              </div>
            </div>
          </div>
            <div class="item"><img src="<?php echo base_url('assets/img/logos/EBEC_pt_Logo_460x185.png')?>"></div>
            <div class="item"><img src="<?php echo base_url('assets/img/logos/EBEC_Final_Logo_460x185.png')?>"></div>
          </div>
<!--          
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
      </div>
  </div>
</div>

<script type="text/javascript">
$('#nav_bar a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
$(document).ready(function(){
  $('#navigation').localScroll({
   target:'#content'
  });
});
$("#ebec_pt_click").click(
function() {
    $(this).addClass('active');
    $("#ebec_click").removeClass('active');
    $("#myCarousel2").carousel(1);
});
$("#ebec_click").click(
function() {
    $(this).addClass('active');
    $("#ebec_pt_click").removeClass('active');
    $("#myCarousel2").carousel(2);
});
$("#myCarousel2").carousel({
  interval: 0
});
$("#myCarousel").carousel({
  interval: 10000
});
$("#nav_bar_etapas li").on('activate', function() {
   if ($("#ebec_click").hasClass('active')) {
      $("#myCarousel2").carousel(2);
   }
   else if ($("#ebec_pt_click").hasClass('active')) {
    $("#myCarousel2").carousel(1);
  }
  else {
    $("#myCarousel2").carousel(0); 
  }
});
</script>
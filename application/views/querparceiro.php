
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




<section class="bg-ebec-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">Quer ser nosso parceiro?</h2>
                <br/>
            </div>
            <div class="col-md-12">
                <p class="text-white">
                    Ao tornar-se nosso parceiro, a sua empresa estará integrada na organização da EBEC Aveiro, contando com o apoio de uma equipa dinâmica e empenhada em satisfazer as necessidades de desenvolvimento extracurricular dos estudantes, bem como os interesses da empresa em questão.
                </p>
             </div>

        </div>      
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Patrocine uma das modalidades</h2>
                <br/>
            </div>
            <div class="col-md-4">
                <img class="imgsize img-responsive" src="<?php echo base_url('assets/img/querparceiro/1.jpg')?>">

            </div>

            <div class="col-md-8">
                <p>

                </p>
                <p>

                </p>
                <p class="d">
                    Ao ser parceira da EBEC Aveiro 2017 numa das modalidades do evento, terá acesso a um contacto direto com os participantes através das provas.
                    De acordo com a <a href="http://bestaveiro.web.ua.pt/ebec/index.php/frontpage/event" target="_blank">modalidade em questão</a>, os participantes terão pela frente a resolução de um desafio lançado pela empresa.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="bg-ebec-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">Esteja na nossa feira de empresas</h2>
                <br/>
            </div>
            <div class="col-md-4">
                <div class="fotorama" data-width="400" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48"  data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                    <img src="<?php echo base_url('assets/img/media/2016/23.jpg')?>">
                    <img src="<?php echo base_url('assets/img/media/2016/24.jpg')?>">
                    <img src="<?php echo base_url('assets/img/media/2016/25.jpg')?>">

                </div>

            </div>
            <div class="col-md-8">
                <p>


                </p>
                <p class="text-white d">
                    A feira de empresas é aberta a toda a comunidade académica e tem o intuito de ser uma ferramenta de exposição e partilha da empresa, e dos seus produtos e serviços, bem como uma oportunidade de recrutamento para todos os estudantes interessados da Universidade de Aveiro.

                </p>
            </div>

        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Torne-se nosso parceiro promocional</h2>
                <br/>
            </div>
            <div class="col-md-4">
                <img class="imgsize" src="<?php echo base_url('assets/img/querparceiro/graf2.png')?>">

            </div>

            <div class="col-md-8">
                <p>

                </p>
                <p>

                </p>
                <p class="d">
                    Ao ser parceiro da EBEC Aveiro 2017 será uma parte essencial do evento e verá a sua empresa ser promovida nas nossas redes sociais e no website do evento, com um maior alcance e proximidade à Universidade de Aveiro, conhecida pelo seu dinamismo, inovação e empreendedorismo.

                </p>
            </div>

        </div>
    </div>
</section>


        <div class="typeform-widget" data-url="https://catarinajorge.typeform.com/to/E1ELoW" data-text="EBEC Aveiro 2017 - parceiros" style="width:100%;height:500px;"></div>
        <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
        <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by<a href="https://www.typeform.com/examples/?utm_campaign=E1ELoW&amp;utm_source=typeform.com-5195607-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=PT" style="color: #999" target="_blank">Typeform</a></div>
        <a href="" class="scrollToTop"></a>

</section>
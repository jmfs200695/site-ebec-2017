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
            <div class="col-lg-12 text-center text-white col-xs-10">
                <h2 class="section-heading">Do you want to be our partner?</h2>
                <br/>
            </div>
            <div class="col-md-12">
                <p class="text-white">
                    By becoming our partner, your company will be integrated into EBEC Aveiro's organization, with the support of a dynamic team committed to meeting the students' extracurricular development needs, as well as the interests of the company in question.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Sponsor one of the categories</h2>
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
                    By being a partner of EBEC Aveiro 2017 in one of the categories of the event, you will have access to a direct contact with the participants through the challenges.
                    According to the <a href="http://bestaveiro.web.ua.pt/ebec/index.php/frontpage/event" target="_blank">categorie in question</a>,participants will face the resolution of a challenge launched by the company.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="bg-ebec-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">Be at our job fair</h2>
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
                    The business fair is open to all academic community and aims to be a tool for exposing and sharing the company, its products and services, as well as an opportunity to recruit all interested students from the University of Aveiro.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Become our promotional partner</h2>
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
                    Being a partner of EBEC Aveiro 2017 will be an essential part of the event and you will see your company be promoted in our social networks and on the website of the event, with a greater reach and proximity to the University of Aveiro, known for its dynamism, innovation and entrepreneurship.

                </p>
            </div>

        </div>
    </div>
</section>


<div class="typeform-widget" data-url="https://catarinajorge.typeform.com/to/u7eWam" data-text="EBEC Aveiro 2017 - partners" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by<a href="https://www.typeform.com/examples/?utm_campaign=u7eWam&amp;utm_source=typeform.com-5195607-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a></div>

</section>
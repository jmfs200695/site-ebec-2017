<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>
<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
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

<a href="" class="scrollToTop"></a>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Main Sponsor</h2>
                <br/>
            </div>
            <br/><br/><br/><br/><br/>
            <div class="row vertical-align">
                <div class="col-lg-12">
                    <a href="http://www.mahle.com/mahle/en/index.jsp" target="_blank">
                        <img class="img-responsive img-center" src="<?php echo base_url('assets/img/partners/ebec/main_sponsor/Mahle.jpg')?>" style="">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<div>
    <img class="img-responsive img-center" src="<?php echo base_url('assets/img/partners/ebec/linha.jpg')?>" style="">
</div>

<!-- Partners -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Parceiros Silver</h2>
                <br/>
            </div>
            <br/><br/><br/><br/><br/>

            <div class="row vertical-align">
                <div class="col-md-3">
                    <a href="https://www.yazaki-europe.com/index.html" target="_blank">
                        <img class="img-center" height="50px" style="max-height:400px" src="<?php echo base_url('assets/img/news/logo-yazaki.png')?>" style="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.cgi.com.pt/" target="_blank">
                        <img class="img-responsive img-center" style="max-height:100px" src="<?php echo base_url('assets/img/news/CGI.png')?>" style="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.noesis.pt/" target="_blank">
                        <img class="img-center" height="60px" style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/noesis1.jpg')?>" style="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://www.torrecid.com/portugal" target="_blank">
                        <img class="img-responsive img-center" style="max-height:150px" src="<?php echo base_url('assets/img/partners/ebec/base/Logo.jpg')?>" style="">
                    </a>
                </div>
            </div>
            <div class="row vertical-align">
                <div class="col-md-3">

                </div>
                <div class="col-md-1">

                </div>

                <div class="col-md-3 top1">
                    <a href="http://www.asilvamatos.pt/" target="_blank">
                        <img class="img-center" style="max-height:150px" height="150px" src="<?php echo base_url('assets/img/partners/ebec/base/ASM.jpg')?>" style="">
                    </a>
                </div>

            </div>
            <br/><br/>
            <div>
                <img class="img-responsive img-center" src="<?php echo base_url('assets/img/partners/ebec/linha.jpg')?>" style="">
            </div>
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Parceiros Promo</h2>
                <br/>
            </div>
            <br/><br/><br/><br/><br/>
            <br/><br/>
            <div class="row vertical-align">
                <div class="col-md-3">
                </div>

            </div>
            <div class="col-md-3">
                <a href="https://www.microsoft.com/pt-pt" target="_blank">
                    <img class="img-responsive img-center" style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/Microsoft.png')?>" style="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://pt.bicworld.com/" target="_blank">
                    <img class="img-responsive img-center" style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/BIC.jpg')?>" style="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.ambar.pt/" target="_blank">
                    <img class="img-responsive img-center" style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/ambar.png')?>" style="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="http://www.aveledaportugal.pt/" target="_blank">
                    <img class="img-responsive img-center" style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/ave.jpg')?>" style="">
                </a>
            </div>
        </div>


            <!--            segunda linha
-->

            <div class="row vertical-align">
            <div class="col-md-3 top1">
                <a href="http://www.vieiradecastro.pt/" target="_blank">
                    <img class="img-responsive img-center"
                         style="max-height:150px" src="<?php echo base_url('assets/img/partners/ebec/base/vieira.jpg')?>" style="">
                </a>
            </div>
            <div class="col-md-3 top1">
                <a href="http://www.paladin.pt/pt-pt" target="_blank">
                    <img class="img-responsive img-center"
                         style="max-height:150px" src="<?php echo base_url('assets/img/partners/ebec/base/paladin.png')?>" style="">
                </a>
            </div>
            <div class="col-md-3 top1">
                <a href="http://canyouescape.pt/pt/index.php/pt/homepage/" target="_blank">
                    <img class="img-responsive img-center"
                         style="max-height:150px" src="<?php echo base_url('assets/img/partners/ebec/base/CanYouEscape.png')?>" style="">
                </a>
            </div>
            <div class="col-md-3 top1">
                <a href="http://www.jpm.pt/" target="_blank">
                    <img class="img-responsive img-center" height="100px"
                         style="max-height:100px" src="<?php echo base_url('assets/img/partners/ebec/base/JPM.jpg')?>" style="">
                </a>
            </div>
            </div>

<!--            terceiralinha-->
        <div class="row vertical-align">
            <div class="col-md-3 top2">
                <a href="http://www.atena-ai.pt/" target="_blank">
                    <img class="img-responsive img-center"  style="max-height:150px " src="<?php echo base_url('assets/img/partners/ebec/base/atena.png')?>" style="">
                </a>
            </div>
            <div class="col-md-3 top2">
                <a href="http://taroco.pt/" target="_blank">
                    <img class="img-responsive img-center"  style="max-height:150px " src="<?php echo base_url('assets/img/partners/ebec/base/taroco.jpg')?>" style="">
                </a>
            </div>
            <div class="col-md-3 top2">
                <a href="http://www.licorbeirao.com/pt/idade-legal/?redirectUrl=/pt/" target="_blank">
                    <img class="img-responsive img-center"  style="max-height:150px " src="<?php echo base_url('assets/img/partners/ebec/base/licor.jpg')?>" style="">
                </a>
            </div>

            <div class="col-md-3 top2">
                <a href="https://www.tryvertty.com/pages/home" target="_blank">
                    <img class="img-responsive img-center"  style="max-height:150px " src="<?php echo base_url('assets/img/partners/ebec/base/vertty.png')?>" style="">
                </a>
            </div>
        </div>
        <div class="row vertical-align">
            <div class="col-md-3">

            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-1">

            </div>

            <div class="col-md-3 top1">
                <a href="http://www.casadaprisca.com/index.php/pt/" target="_blank">
                    <img class="img-center" style="max-height:150px" width="200px" src="<?php echo base_url('assets/img/partners/ebec/base/Prisca.png')?>" style="">
                </a>
            </div>


            <div>
            </div>
    </div>
</section>


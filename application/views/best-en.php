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
                    BEST (Board of European Students of Technology) is a nonprofit, apolitical european non-governmental organization of Science, Technology and Engineering students. Through the 94 local groups in 33 countries across Europe, we have built an innovative, flexible and dynamic student network.
                </p>
                <p class="text-muted text-justify text-black">
                    We have been strengthening a cooperative relationship between students, companies and universities, supporting the development of crucial skills for a successful professional future since 1989.
                </p>
                <p class="text-muted text-justify text-black">
                    Through our complementary education, career support and increased interest in the analysis of the current educational system, we promote the formation of proactive, ambitious and versatile young people. Furthermore, one of the fundamental keys in a quality development is the ability to interact with different cultures and adapt to new circumstances. Thereby, BEST creates opportunities for academic progression in an intercultural environment, providing an exchange of knowledge and experiences among young students across Europe.
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
                    Founded officially in 2010, the Local BEST Group Aveiro is based at the University of Aveiro and has about 45 active members from multiple fields of study of Science, Technology and Engineering. Throughout its 6 years of history, BEST Aveiro is distinguished by the diversity and quality of the organised events. These events cover both students at local, national and european level, focusing on the development of the members of the Association, so that they are in constant progression and learning. BEST Aveiro offers students the opportunity to participate in events that aim at the complementarity of their studies, such as:
                </p>
                <ul class="fa-ul">
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-right text-white"></i>&nbsp; Seasonal Courses;;
                    </li>
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-right text-white"></i>&nbsp; Engineering competition named EBEC Aveiro (European BEST Engineering Competition);
                    </li>
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-right text-white"></i>&nbsp; Innovation Now!;
                    </li>
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-right text-white"></i>&nbsp; BEST Training Days;
                    </li>
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-right text-white"></i>&nbsp; ABCs - Aveiro BEST Competititons;
                    </li>
                    <li class="text-muted text-white">
                        <i class="fa fa-arrow-righttext-white "></i>&nbsp; Workshops.
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
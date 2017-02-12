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



<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Edition 2016</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    On March 5,6 and 9 of 2016 was held on the campus of the University of Aveiro the <b>VIII Edition of EBEC Aveiro</b> which was attended by 104 students of science and technology and 26 teams.
                </p>
                <p class="text-muted text-justify">
                    The Team Design competition was supported by Uniactiva, while the Case Study competition was supported by ergostart. The winners of EBEC Aveiro 2016 represented Aveiro in the national phase of the competition, which took place in Coimbra.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Case Study Winners</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/33.jpg')?>">
            </div>
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Team Design Winners</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/media/2016/34.jpg')?>">
            </div>
        </div>
        <div class="row">
            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testimonial</b></h3>
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
                                            EBEC Aveiro 2016 was distinguished by the evolution of the previous editions, for the first time the event had a workshop in Presentation Skills for the participants, where they learned new techniques and allowed them to prepare for the presentations of the competition. The company fair was attended by 11 partners, in which the goal of bringing our partners closer to students was fulfilled. In the competition we had two partner companies, something unheard of for the event and that came to increase the quality of the competition itself. It is a source of pride for me to see the growth of EBEC Aveiro year after year, I believe that the margin of evolution is enormous and I anticipate a better event next year.
                                        </p>

                                        <small>
                                            Miguel Oliveira<br/>
                                            Coordinator of EBEC Aveiro 2016
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
                <h2 class="section-heading">Edition 2015</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    A <b>2015 Edition of EBEC Aveiro</b> was held on 7, 8 and 11 March 2015 on the campus of the University of Aveiro and this edition had the participation of 96 students from various courses of the university.
                </p>
                <p class="text-muted text-justify">
                    The Team Design competition was supported by Bosch and REN, while the Case Study competition by Roboplan. The winners of EBEC Aveiro 2015 represented Aveiro in the national stage of the competition, which took place in Aveiro, both teams winning the competition competing against the winning teams of Lisbon, Porto, Coimbra and Almada and thus advanced to the final phase of the competition (EBEC Final) held in Porto in August 2015.
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
            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testimunial</b></h3>
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
                                            In 2014 I embraced the challenge of being the Main Organiser of EBEC Aveiro 2015. EBEC was the event that made me take the initiative to join BEST. Was it easy? No, but it was certainly the most rewarding experiences I could have along my academic journey. Throughout the months before the competition, combining classes, work, tests and all the work involved in this event was not easy, but getting to the end and seeing all the work of a fantastic team made everything worthwhile. To be the Main Organiser of such an event is to have new challenges daily, which undoubtedly make us grow. Sometimes it make us uncomfortable but that is what makes us develop not only personally, but also professionally.<br/>
                                            With this experience I also had the opportunity to get closer to the business world, to realize a little better how it works and still have direct contact with companies.
                                        </p>
                                        <small>
                                            Orlando Pinheiro<br/>
                                            Coordinator of EBEC Aveiro 2015
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
                <h2 class="section-heading">Edition 2014</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    On March 15, 16 and 19 of 2014, the sixth edition of EBEC Aveiro took place on the campus of the University of Aveiro, with the participation of 96 science and technology students.
                </p>
                <p class="text-muted text-justify">
                    Like the 2015 Edition, the winners of EBEC Aveiro also secured the victory in the national round of the competition, thus achieving their presence in the final European stage that took place in Riga, Latvia.

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
            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testimonial</b></h3>
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
                                            My experience as EBEC Aveiro 2014's Main Organiser allowed me to improve various capacities as a person and also as a student and future professional. The areas of conflict resolution, teamwork, strategic planning and time management are the areas where I noticed the most improvements. The experience of organising an event of the magnitude of EBEC Aveiro 2014 was undoubtedly enriching and allowed me to embrace new and more ambitious projects as was the case of my term as President of BEST Aveiro the following year.
                                        </p>
                                        <small>
                                            Eduarda Morais<br/>
                                            Coordinator of EBEC Aveiro 2014
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
                <h2 class="section-heading">Edition 2014</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    The 2013 Edition of EBEC Aveiro was held on 9, 10 and 11 March of 2013, this edition had the participation of 92 students.
                </p>
                <p class="text-muted text-justify">
                    The Case Study competition was supported by Bosch, which for the second consecutive year was a partner of EBEC Aveiro.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Case Study Winners</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/cs_winners_2013.jpg')?>">
            </div>
            <div class="col-md-6" style="padding:30px">
                <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Team Design Winners</b></h3>
                <img class="img-responsive" alt="" src="<?php echo base_url('assets/img/past-editions/td_winners_2013.jpg')?>">
            </div>
        </div>
        <div class="row">
            <h3 class="section-subheading text-center text-muted" style="margin-bottom:30px"><b>Testimunial</b></h3>
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
                                        <p class="text-justify">
                                            Being EBEC Aveiro's Main Organiser was not having a normal day for a few months. It was the biggest challenge I ever had, and I was forced to create stricter work methods to reconcile my classes with the tasks I set myself to do. I had to learn to delegate, in a position like this nothing is possible if we do not know how to delegate.
                                        </p>
                                        <small>
                                            José Aquino<br/>
                                            Coordinator of EBEC Aveiro 2013
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
                <h2 class="section-heading">Edition 2012</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted text-justify">
                    The 2012 Edition of EBEC Aveiro was held on 3, 4 and 7 March of 2014, this edition being the particularity of the previously used name - BEST Engineering Competition - to become European BEST Engineering Competition and thus to be involved in the international EBEC competition. The format of the competition was maintained, continuing the duration to be of 24h and would keep for the following editions.
                </p>
                <p class="text-muted text-justify">
                    The Case Study category was supported by Bosch and the Team Design category was developed only by members of BEST Aveiro. The event was attended by 72 students, out of a total of 18 teams.

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
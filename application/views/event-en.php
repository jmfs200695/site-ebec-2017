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





<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="text-muted text-justify">
                    Being the extracurricular development of the European students the purpose of BEST organization, the European BEST Engineering Competition (EBEC) emerges as an international project where students from various engineering fields put their creativity into practice, having a more direct contact with the business world.
                </p>
                <p class="text-muted text-justify">
                    Being the largest engineering competition in Europe, it has more than 7000 participants and its objectives are:
                </p>
                <ul class="fa-ul">
                    <li class="text-muted">
                        <i class="fa fa-arrow-right"></i>&nbsp; Promote engineering through practical applications;
                    </li>
                    <li class="text-muted">
                        <i class="fa fa-arrow-right"></i>&nbsp; Provide personal and intellectual development to students, challenging creativity, imagination and knowledge;
                    </li>
                    <li class="text-muted">
                        <i class="fa fa-arrow-right"></i>&nbsp;  To stimulate the contact between students, companies and university.
                    </li>
                </ul>
                <p class="text-muted text-justify">
                    The EBEC project takes place annually in 3 distinct phases: a local phase in each of the 88 organising universities, a national (or regional) phase, such as EBEC Portugal and the European final.
                </p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-center" src="<?php echo base_url('assets/img/ebec-aveiro/ebec_pyramid_2015_pt.png')?>">
            </div>
        </div>
    </div>
</section>

<!-- EBEC Aveiro -->
<section class="bg-ebec-orange">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">EBEC Aveiro</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo base_url('assets/img/event/ebec_aveiro_2015.png')?>">
            </div>
            <div class="col-md-7">
                <p class="text-muted text-justify text-white c">

                    BEST Aveiro organises one of the 88 local phases of the EBEC project annually, a 24-hour competition.
                </p>
                <p class="text-muted text-justify text-white c">
                    The ninth edition of the competition is going to take place in March 2017 and this event will have the largest number of participants of all the editions. Considered one of the highlights of BEST Aveiro and designed for the students of the University of Aveiro, EBEC Aveiro aims to be a moment where creativity, challenge, energy, flexibility and team spirit are put into practice.
                </p>
                <p class="text-muted text-justify text-white c">
                    In order to promote a better relationship between students and companies, BEST Aveiro will also organise, apart from the competition, a Business Fair followed by a Cocktail Network, on March 14th.
                </p>

                <p class="text-muted text-justify text-white size ">
                    <a href="<?php echo base_url('index.php/frontpage/apply')?>" style="color: inherit;">
                        <b>Do not miss this competition. Sign up now!</b>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Modalidades -->
<section class="">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Categories</h2>
            <div class="col-md-6">
                <div class="orange-box">
                    <h3 class="text-white text-justify">
                        Case Study
                    </h3>
                    <p class="text-muted text-justify text-white">
                        Participants will have the opportunity to solve two case studies provided by companies, which should be problems that may arise from the company's need to innovate or optimize processes. Each of the case studies should be prepared to correspond to 12 hours of fulfillment and they are both delivered to the participants at the beginning of the competition.

                </div>
            </div>
            <div class="col-md-6">
                <div class="orange-box2">
                    <h3 class="text-white text-justify">
                        Team Design
                    </h3>
                    <p class="text-muted text-justify text-white">
                        Participants will have the opportunity to build a prototype that solves a challenge provided by a company, with access to limited resources. The prototypes will then be evaluated by a jury, based on parameters previously defined by the organisation. This challenge has the duration of 24 hours.
                    </p>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-12 text-center">
            <a class="text-muted" href="<?php echo base_url('index.php/frontpage/regulation')?>">Read EBEC Aveiro Regulations for more information.</a>
        </div>
    </div>
</section>

<!-- Testemunhos -->
<section class="bg-gray">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Testimonials</h2>
            <h3 class="section-subheading text-muted">Professors and Participants</h3>
        </div>
        <div class='col-md-offset-1 col-md-10' style="margin-top: -50px;">
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                    <li data-target="#quote-carousel" data-slide-to="3"></li>
                    <li data-target="#quote-carousel" data-slide-to="4"></li>
                </ol>

                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">

                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/1.jpg')?>">
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-justify">At the University of Aveiro, BEST Aveiro's activities, particularly in the context of EBEC, have been clear examples of success. On the one hand, they mobilize a considerable number of people, among participants, diverse collaborators and assistance. On the other hand, they present themselves as excellent initiatives in science, technology and engineering. The proposed challenges promote a clear growth of the involved students in issues as diverse as the practical application of scientific knowledge or the imagination and creativity required.
                                        <br/>
                                        Participants also benefit from the demands of teamwork with well defined objectives and a tight deadline, as well as direct contact with representatives of companies and relevant institutions.<br/>
                                        This is, moreover, one of the essential markers of merit of this organization, always supported by several entities that confirm the dynamism and quality of BEST Aveiro.
                                    </p>
                                    <small>
                                        Professor João Oliveira<br/>
                                        Department of Mechanical Engineering<br/>
                                        University of Aveiro
                                    </small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/2.jpg')?>" style="width: 100px;height:100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-justify">
                                        Having already participated in previous editions, the decision to participate in the EBEC 2014 edition was mainly due to the spirit of healthy competition, with the ultimate goal of achieving EBEC Final round.  After the victory in the local round, where the competition was very disputed until the end, we went to EBEC Portugal with an heavy responsibility for representing the University of Aveiro. We never gave up, and we did an excellent team work, making use of all the knowledge transmitted by both the workshops and the companies which were present at the event, we succeeded!
                                        Arriving at the International stage is like a dream coming true: to represent the University of Aveiro in an European competition! It was an unforgettable experience, both in the competitive field and in professional and personal experience. We were in contact with reputed international companies and, above all, we learnt from them and from all participants of different nationalities!<br/>
                                        To summarize, participating in EBEC is a very rewarding and enriching experience that improves us as individuals and as professionals!
                                        <br/>
                                        It is an excellent event where you can rediscover yourself and expand your limits.
                                    </p>
                                    <small>
                                        Tiago Paixão<br/>
                                        Participant of EBEC Final 2014
                                    </small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/3.jpg')?>" style="width: 100px;height:100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-justify"> I had contact with BEST Aveiro in 2010, when I received the invitation to be part of the evaluation and ranking jury in the tests that took place at the University of Aveiro. From the first moment on, I was extremely impressed with the high level of organization and professionalism of the team, and with their ability to lead and motivate all participants in order to excel in the tests they were offered.
                                        <br/>
                                        As a mechanical training engineer, leader of a high-level research team, and based on the 12 years of teaching experience I have in Portuguese Universities and abroad, I am perfectly comfortable to say that this was certainly one of the most rewarding experiences I was able to witness for the implementation of engineering knowledge in solving complex case studies.
                                    </p>
                                    <small>
                                        Professor Robertt Valente<br/>
                                        Department of Mechanical Engineering<br/>
                                        University of Aveiro
                                    </small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 4 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/4.jpg')?>" style="width: 100px;height:100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-justify">
                                        My name is Pedro Magalhães and I am a student of Electronic Engineering and Telecommunications. I participated in EBEC in my first year of university and since then I have been in love with this event. If there is something that motivates me are engineering challenges and EBEC has surprised me year after year.<br/>
                                        In the last edition I had the opportunity to be in the 3 stages of the event and it was a fantastic experience at all levels, starting with the real problems that were proposed to us and ending in the team spirit and mutual help that was created in the event, never forgetting the quality of the organisation that we are already accustomed to BEST events.<br/>
                                        Initiatives such as this one give students the opportunity to become more complete and multifaceted, and this is indispensable for a promising professional future.
                                    </p>
                                    <small>
                                        Pedro Magalhães<br/>
                                        Participant of EBEC Final 2015
                                    </small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 5 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/5.jpg')?>" style="width: 100px;height:100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-justify">
                                        Participating as a jury of the "Team Design" of EBEC Portugal 2015 was a real pleasure. As a professor of Physical Engineering course at the University of Aveiro I am always very satisfied when I see young people working as a team to solve engineering problems. The competition allowed them to put into practice the previously acquired knowledge during their academic education, in an environment which provides a true team spirit focused on problem solving, as you will find in your future professional career. The solutions presented, studied and realized "non-stop" against the clock and with limited resources, demonstrated the capacities of reasoning, technique and invention of the competitors, both individually and as a team. Congratulations EBEC Aveiro and I’m looking forward for the next edition, because events like this are essential for strengthening the future innovative business of the country.

                                    </p>
                                    <small>
                                        Professor Luís Rino<br/>
                                        Department of Physics<br/>
                                        University of Aveiro
                                    </small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
</section>

<!-- EBEC Portugal -->
<section class="bg-ebec-green">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">EBEC Portugal</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="<?php echo base_url('assets/img/event/ebec_pt.png')?>" style="padding-bottom:30px">
            </div>
            <div class="col-md-8">
                <p class="text-muted text-justify text-white">
                    EBEC Portugal is the national round of the BEST Engineering competition, organised by the 5 Local BEST Groups, from all the corners of the country.
                </p>
                <p class="text-muted text-justify text-white">
                    The winners of the different local competitions of these 5 portuguese Universities (University of Aveiro included) will compete in the national round named EBEC Portugal.
                </p>
                <p class="text-muted text-justify text-white">
                    For more information visit this <a href="http://ebecportugal.pt/"style="color: black "target="_blank">website</a>.
                </p>


            </div>
        </div>
    </div>
</section>

<!-- EBEC Final -->
<section class="bg-ebec-blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">EBEC Final</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive img-center" src="<?php echo base_url('assets/img/event/ebec_final.png')?>" style="padding-top:30px">
            </div>
            <div class="col-md-8">
                <p class="text-muted text-justify text-white ">
                    In the European final, the winning teams from all the national (or regional) stages, among them EBEC Portugal, compete with each other for the title of European BEST Engineers.
                </p>
                <p class="text-muted text-justify text-white">
                    For more information visit this <a href="http://ebec.best.eu.org/index.php"style="color: black"target="_blank">website</a>.
                </p>

            </div>

        </div>
</section>
<a href="" class="scrollToTop"></a>
<!-- Quote carousel -->
<script type="text/javascript">
    // When the DOM is ready, run this function
    $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 31000, // 30 seconds
        });
    });</script>
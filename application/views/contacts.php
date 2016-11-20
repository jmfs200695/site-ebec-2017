<!-- Contacts -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contactos</h2>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/img/contacts/mo.png')?>" class="img-responsive img-circle img-contact" alt="">
                    <h4>Miguel Oliveira</h4>
                    <p class="text-muted">Coordenador da EBEC Aveiro</p>
                    <p>
                        <i class="fa fa-envelope"></i><a href="mailto:miguel.guimaraes.oliveira@BEST.eu.org"> miguel.guimaraes.oliveira@BEST.eu.org </a><br/>
                        <i class="fa fa-phone"></i> <b>918570425</b>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/img/contacts/president.png')?>" class="img-responsive img-circle img-contact" alt="">
                    <h4>Orlando Pinheiro</h4>
                    <p class="text-muted">Presidente do BEST Aveiro</p>
                    <p>
                        <i class="fa fa-envelope"></i><a href="mailto:orlando.pinheiro@BEST.eu.org"> orlando.pinheiro@BEST.eu.org </a><br/>
                        <i class="fa fa-phone"></i> <b>938313255</b>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/img/contacts/treasurer.png')?>" class="img-responsive img-circle img-contact" alt="">
                    <h4>Nuno Marques</h4>
                    <p class="text-muted">Tesoureiro do BEST Aveiro</p>
                    <p>
                        <i class="fa fa-envelope"></i><a href="mailto:nuno.marques@BEST.eu.org"> nuno.marques@BEST.eu.org </a><br/>
                        <i class="fa fa-phone"></i> <b>939478947</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEST Aveiro -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">BEST Aveiro</h2>
                <br/>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="map-container" class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center team-member">
                <h4><i class="fa fa-home"></i> Morada</h4>
                <p class="text-muted">
                    Incubadora de Empresas da Universidade de Aveiro<br/>
                    Campus Universitário de Santiago, Edifício 1<br/>
                    3810-193 Aveiro<br/>
                    Portugal
                </p>
                <h4><i class="fa fa-phone"></i> Telefone</h4>
                <p class="text-muted">
                    +351 938 313 255
                </p>
                <h4><i class="fa fa-envelope"></i> Email</h4>
                <p class="text-muted">
                    <a href="mailto:aveiro@BEST.eu.org">aveiro@BEST.eu.org</a><br/>
                </p>
                <br/>
                <ul class="list-inline">
                    <li>
                        <a href="http://bestaveiro.web.ua.pt/">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/BESTaveiro/">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x" style="color:#3b5998"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/best.aveiro/">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x" style="color:#3f729b"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/bestaveiro">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x" style="color:#55acee"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/best-aveiro-a2965b44/">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x" style="color:#0077b5"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.flickr.com/photos/bestaveiro">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x" style="color:#0063dc"></i>
                                <i class="fa fa-flickr fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Map javascript -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    function init_map() {
        var var_location = new google.maps.LatLng(40.636002, -8.657700);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 18
        };
 
        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"BEST Aveiro"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
        var_marker.setMap(var_map); 
    }
 
    google.maps.event.addDomListener(window, 'load', init_map);
</script>
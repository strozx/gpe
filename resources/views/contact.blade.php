@include('header')

{{--<div class="view mx-auto d-block col-10" style="   display: block;  margin-left: auto;  margin-right: auto;  width: 100%;--}}
{{--    background-image: url({{asset('images/slides/1.jpg')}}); background-repeat: no-repeat;--}}
{{--    background-size: cover;">--}}
{{--</div>--}}


<main class="mt-5 pt-5">
    <div class="container">
    <section class="pt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-lg-6 col-xl-5 mb-5">
                <div id="mapdiv"></div>
                <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
                <script>
                    map = new OpenLayers.Map("mapdiv");
                    map.addLayer(new OpenLayers.Layer.OSM());
                    var lonLat = new OpenLayers.LonLat( 15.639332  ,46.559414)
                        .transform(
                            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                            map.getProjectionObject() // to Spherical Mercator Projection
                        );

                    var zoom=16;

                    var markers = new OpenLayers.Layer.Markers( "Markers" );
                    map.addLayer(markers);

                    markers.addMarker(new OpenLayers.Marker(lonLat));

                    map.setCenter (lonLat, zoom);
                </script>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-5 col-xl-5 ml-xl-4 mb-4" style="text-align: center">
                <h3 class="mb-3 font-weight-bold dark-grey-text">
{{--                    <strong>MDB Quick Start</strong>--}}
                    Naslov:
                </h3>
                <p class="grey-text">Smetanova 17<br>
                    2000 Maribor<br>
                    Slovenia<br></p>

                <h3 class="mb-3 font-weight-bold dark-grey-text"> E-mail: </h3>

                <p class="grey-text">formula.student@um.si</p>

                <h3 class="mb-3 font-weight-bold dark-grey-text"> Telefon:
                    </h3>

                <p class="grey-text"> <a href="tel:+386 378 905">+386 378 905</a>
                    (Jure Pigac – vodja projekta)</p>


            </div>
            <!--Grid column-->

        </div>
    </section>
    </div>
</main>

<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/gpe.uni.mb" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://www.instagram.com/unimbgpe/" target="_blank">
            <i class="fab fa-instagram mr-3"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCIv_LONORJEYdCtDUTvSc8w" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>


    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        {{now()->year}} Copyright:
        {{--        <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>--}}
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>
</body>

</html>

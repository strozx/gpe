@include('header')

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">


        <!--First slide-->
        <div class="carousel-item active">
            <div class="view mx-auto d-block" style="   display: block;  margin-left: auto;  margin-right: auto;  width: 100%; background-image: url('images/slides/1.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

{{--                    <!-- Content -->--}}
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>Learn Bootstrap 4 with MDB</strong>--}}
{{--                        </h1>--}}

{{--                        <p>--}}
{{--                            <strong>Best & free guide of responsive web design</strong>--}}
{{--                        </p>--}}

{{--                        <p class="mb-4 d-none d-md-block">--}}
{{--                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and--}}
{{--                                written versions--}}
{{--                                available. Create your own, stunning website.</strong>--}}
{{--                        </p>--}}

{{--                        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start--}}
{{--                            free tutorial--}}
{{--                            <i class="fas fa-graduation-cap ml-2"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Content -->--}}

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('images/slides/2.jpg');  background-repeat: no-repeat; background-size: cover; ">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

{{--                    <!-- Content -->--}}
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>Learn Bootstrap 4 with MDB</strong>--}}
{{--                        </h1>--}}

{{--                        <p>--}}
{{--                            <strong>Best & free guide of responsive web design</strong>--}}
{{--                        </p>--}}

{{--                        <p class="mb-4 d-none d-md-block">--}}
{{--                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and--}}
{{--                                written versions--}}
{{--                                available. Create your own, stunning website.</strong>--}}
{{--                        </p>--}}

{{--                        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start--}}
{{--                            free tutorial--}}
{{--                            <i class="fas fa-graduation-cap ml-2"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Content -->--}}

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url('images/slides/3.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                    <!-- Content -->
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>Learn Bootstrap 4 with MDB</strong>--}}
{{--                        </h1>--}}

{{--                        <p>--}}
{{--                            <strong>Best & free guide of responsive web design</strong>--}}
{{--                        </p>--}}

{{--                        <p class="mb-4 d-none d-md-block">--}}
{{--                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and--}}
{{--                                written versions--}}
{{--                                available. Create your own, stunning website.</strong>--}}
{{--                        </p>--}}

{{--                        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start--}}
{{--                            free tutorial--}}
{{--                            <i class="fas fa-graduation-cap ml-2"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
      <!--Section: sponozorji-->
      <section>
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
          <div class="row features-small mt-5 wow fadeIn .d-lg-inline-flex">
          @foreach($sponsors as $sponsor)
              <!--Grid column-->
              <div class="col-xl-2 col-lg-6">

                  <div class="col mb-2">
                      <img class="d-block mx-auto mx-xs-0" src="images/sponsors/{{$sponsor->logo}}" alt="{{$sponsor->name}}" width="220px"/>
                  </div>

              </div>
          @endforeach
          </div>
        </div>
      </section>

    <div class="container">

        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="images/team.jpg" class="img-fluid z-depth-1-half"
                         alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Main heading -->
                    <h3 class="h3 mb-3">O projektu</h3>
                    <p>Formula Student je največje tekmovanje na svetu za študente inženirskih ved,
                        ki s svojim znanjem in izkušnjami pod okriljem univerz in svojih pokroviteljev
                        ter donatorjev vsako leto tekmujejo v izdelavi dirkalnika in v različnih cestno-hitrostnih preizkušnjah.
                        <br><br>
                        Organizatorji tekmovanj so inženirska profesionalna združenja, ki s pomočjo največjih podjetij avtomobilske industrije,
                        kot so Porsche, Daimler, Audi, Jaguar in drugih, prirejajo preizkušnje študentskih formul na različnih svetovnih dirkališčih
                        ter tako urijo svoj bodoči kader inženirjev. Na svetu obstaja okoli 500 ekip Formula Student, ki se vsakoletno pomerijo na
                        približno 40 tekmovanjih po celem svetu. Študentje s sodelovanjem pri snovanju, konstruiranju, izdelavi, optimalnih nastavitvah,
                        izdelavi stroškovnega in poslovnega načrta ter končnem preizkušanju pridobijo neprecenljive praktične izkušnje, ki jih lahko po koncu študija s
                        pridom uporabljajo v svoji karieri.
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Main info-->

        <hr class="my-5">

        <section>
            <div class="d-flex justify-content-center">
                <img src="images/sponsors-1.bmp" alt="Sponsors">
            </div>
        </section>

        <!--Section: Main features & Quick Start-->
{{--        <section>--}}

{{--            <h3 class="h3 text-center mb-5">About MDB</h3>--}}

{{--            <!--Grid row-->--}}
{{--            <div class="row wow fadeIn">--}}

{{--                <!--Grid column-->--}}
{{--                <div class="col-lg-6 col-md-12 px-4">--}}

{{--                    <!--First row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-1 mr-3">--}}
{{--                            <i class="fas fa-code fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h5 class="feature-title">Bootstrap 4</h5>--}}
{{--                            <p class="grey-text">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/First row-->--}}

{{--                    <div style="height:30px"></div>--}}

{{--                    <!--Second row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-1 mr-3">--}}
{{--                            <i class="fas fa-book fa-2x blue-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h5 class="feature-title">Detailed documentation</h5>--}}
{{--                            <p class="grey-text">We give you detailed user-friendly documentation at your disposal. It will help--}}
{{--                                you to implement your ideas--}}
{{--                                easily.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Second row-->--}}

{{--                    <div style="height:30px"></div>--}}

{{--                    <!--Third row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-1 mr-3">--}}
{{--                            <i class="fas fa-graduation-cap fa-2x cyan-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h5 class="feature-title">Lots of tutorials</h5>--}}
{{--                            <p class="grey-text">We care about the development of our users. We have prepared numerous tutorials,--}}
{{--                                which allow you to learn--}}
{{--                                how to use MDB as well as other technologies.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Third row-->--}}

{{--                </div>--}}
{{--                <!--/Grid column-->--}}

{{--                <!--Grid column-->--}}
{{--                <div class="col-lg-6 col-md-12">--}}

{{--                    <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>--}}
{{--                    <div class="embed-responsive embed-responsive-16by9">--}}
{{--                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/Grid column-->--}}

{{--            </div>--}}
{{--            <!--/Grid row-->--}}

{{--        </section>--}}
{{--        <!--Section: Main features & Quick Start-->--}}

{{--        <hr class="my-5">--}}

{{--        <!--Section: Not enough-->--}}
{{--        <section>--}}

{{--            <h2 class="my-5 h3 text-center">Not enough?</h2>--}}

{{--            <!--First row-->--}}
{{--            <div class="row features-small mb-5 mt-3 wow fadeIn">--}}

{{--                <!--First column-->--}}
{{--                <div class="col-md-4">--}}
{{--                    <!--First row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">Free for personal and commercial use</h6>--}}
{{--                            <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as--}}
{{--                                commercial projects.--}}
{{--                            </p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/First row-->--}}

{{--                    <!--Second row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">400+ UI elements</h6>--}}
{{--                            <p class="grey-text">An impressive collection of flexible components allows you to develop any project.--}}
{{--                            </p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Second row-->--}}

{{--                    <!--Third row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">600+ icons</h6>--}}
{{--                            <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Third row-->--}}

{{--                    <!--Fourth row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">Fully responsive</h6>--}}
{{--                            <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop,--}}
{{--                                tablet or mobile phone. MDB--}}
{{--                                looks great on each screen.</p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Fourth row-->--}}
{{--                </div>--}}
{{--                <!--/First column-->--}}

{{--                <!--Second column-->--}}
{{--                <div class="col-md-4 flex-center">--}}
{{--                    <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone"--}}
{{--                         class="z-depth-0 img-fluid">--}}
{{--                </div>--}}
{{--                <!--/Second column-->--}}

{{--                <!--Third column-->--}}
{{--                <div class="col-md-4 mt-2">--}}
{{--                    <!--First row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">70+ CSS animations</h6>--}}
{{--                            <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your--}}
{{--                                project and delight your visitors.--}}
{{--                            </p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/First row-->--}}

{{--                    <!--Second row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">Plenty of useful templates</h6>--}}
{{--                            <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Second row-->--}}

{{--                    <!--Third row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">Easy installation</h6>--}}
{{--                            <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.--}}
{{--                            </p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Third row-->--}}

{{--                    <!--Fourth row-->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                            <i class="fas fa-check-circle fa-2x indigo-text"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <h6 class="feature-title">Easy to use and customize</h6>--}}
{{--                            <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep--}}
{{--                                customization. You will--}}
{{--                                easily adjust each component to suit your needs.</p>--}}
{{--                            <div style="height:15px"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/Fourth row-->--}}
{{--                </div>--}}
{{--                <!--/Third column-->--}}

{{--            </div>--}}
{{--            <!--/First row-->--}}

{{--        </section>--}}
{{--        <!--Section: Not enough-->--}}

{{--        <hr class="mb-5">--}}


{{--    </div>--}}
</main>
<!--Main layout-->

@include("footer")

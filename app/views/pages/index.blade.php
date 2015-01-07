@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="slider-area">
            <!-- Carousel
                ================================================== -->
            <div id="myCarousel" class="carousel slide SGBanners-container" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom: -50px">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="{{ asset('assets/img/SuperGeeks-fix-install-service.jpg') }}"
                             alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('img/slider-3.png') }}" alt="">
                    </div>
                    <div class="item">
                        <a href="/media-alert">
                            <img class="img-responsive" src="{{ asset('img/gadget_swap.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!--            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>-->
                <!--            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
            <!-- /.carousel -->
        </div>

        <div class="row supergeeks-featurette featurett-hover">

            <div class="text-center">


            </div>
        </div>
        <div class="row supergeeks-featurette">
            <div class="col-sm-4 text-center">
                <div class="info-box" id="repair-service">
                    <div class="hover-anim text-center">
                        <div class="hover-content">

                        </div>
                    </div>
                    <img class="" alt="repairs and maintenance" src="{{ asset('/img/wrench_.png') }}">

                    <div class="heading">
                        <h2>Repairs &amp; Maintenance</h2>
                    </div>
                </div>
                <p class="little-info">
                    Do you need a mobile phone repair? We carry out more than 30,000 mobile phone repairs every month –
                    and we could help fix your phone today
                </p>

                <p class="text-center"><a href="/fix-and-repairs" class="btn btn-info">Learn more</a></p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box" id="why-us">
                    <div class="hover-anim text-center">
                        <div class="hover-content">

                        </div>
                    </div>
                    <img class="" alt="SuperGeeks Gadget Protection - SGP"
                         src="{{ asset('assets/img/repair-service.png') }}">

                    <div class="heading">
                        <h2>Why Choose SuperGeeks</h2>
                    </div>
                </div>
                <p class="little-info">
                    We do know technology. From any make of PCs &amp; MACs to Cameras, Mobile Phones,
                    Consumer Electronics and White Goods, we can fix it.
                </p>

                <p class="text-center"><a href="/why-chose-us" class="btn btn-info">Learn more</a></p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box" id="tech-support-box">
                    <div class="hover-anim text-center">
                        <div class="hover-content">

                        </div>
                    </div>
                    <img class="" alt="SuperGeeks Gadget Protection - SGP"
                         src="{{ asset('assets/img/SGP-repair-man.svg') }}">

                    <div class="heading">
                        <h2>Reliable Tech Support</h2>
                    </div>
                </div>
                <p class="little-info">Do you need a mobile phone repair? We carry out more than 30,000 mobile phone
                    repairs every month – and we could help fix your phone today
                </p>

                <p class="text-center"><a href="/tech-support" class="btn btn-info">Learn more</a></p>
            </div>

        </div>
        <div class="row supergeeks-featurette">
            <div class="col-sm-4 text-center col-sm-offset-2">
                <div class="info-box" id="sgp">
                    <a href="/sgp">
                        <div class="hover-anim text-center">
                            <div class="hover-content">
                            </div>
                        </div>
                    </a>
                    <img class="" alt="SuperGeeks Gadget Protection - SGP"
                         src="{{ asset('assets/img/gadget-protection.svg') }}" style="/* margin-bottom: 20px; */">

                    <div class="heading">
                        <h2>Supergeeks Gadget Protection</h2>
                    </div>
                </div>
                <p class="little-info">Gadget protection package that
                    gives you protection from accidental damages and other device problems.
                </p>

                <p class="text-center"><a href="/sgp" class="btn btn-info" style="
    margin-top: 20px;
">Learn more</a></p>
            </div>

            <div class="col-sm-4 text-center">
                <div class="info-box" id="sgp">
                    <a href="/sgp">
                    </a>
                    <img class="" alt="SuperGeeks Gadget Swap" src="{{ asset('/img/gadget-swap.png') }}">

                    <div class="heading">
                        <h2>Gadget Swap</h2>
                    </div>
                </div>
                <p class="little-info">
                    Trade in your gadgets for awesome rewards with SuperGeeks, you will have the opportunity to get some
                    cash for your gadget clutter.
                </p>

                <p class="text-center"><a href="/gadget-swap" class="btn btn-info">Learn more</a></p>
            </div>
        </div>
        <div class="row supergeeks-featurette information-bar">
            <div class="info-header text-center">
                <h2>TESTIMONIALS</h2>
            </div>
            <div class="col-sm-4 text-center">
                <p>
                    I had a very wonderful experience when I brought my device for repairs
                </p>

                <p> - Chidinma.</p>
            </div>
            <div class="col-sm-4 text-center">
                <p>
                    Awesome customer relationship,you kept me in-the-know, when i brought my mac
                </p>

                <p>- Akachukwu.</p>
            </div>
            <div class="col-sm-4 text-center">
                <p>
                    Finally, A tech shop i have always wanted around me, you guys rock!
                </p>

                <p>- Emi.</p>
            </div>
        </div>

        <div class="row supergeeks-featurette information-bar">
            <div class="info-header text-center">
                <h2>PARTNERS</h2>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{ asset('/img/afriqlogo.png') }}" class="img-responsive"/>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{ asset('/img/thumbdikkos.png') }}" class="img-responsive"/>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{ asset('/img/the_hub.png') }}" class="img-responsive"/>
            </div>
        </div>
    </div>
@stop
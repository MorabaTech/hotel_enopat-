@extends('includes.headers')
@section('content')
    <!-- home start -->
    <div class="upper-page bg-dark" id="home">
        <!-- hero bg start -->
        <div class="hero-fullscreen">
            <div class="hero-fullscreen-FIX">
                <div class="hero-bg">
                    <!-- hero slider wrapper start -->
                    <div class="swiper-container-wrapper">
                        <!-- swiper container start -->
                        <div class="swiper-container swiper2">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slider item start -->
                                <div class="swiper-slide">
                                    <div class="swiper-slide-inner">
                                        <!-- swiper slider item IMG start -->
                                        <div class="swiper-slide-inner-bg rooms-bg overlay overlay-dark">
                                        </div>
                                        <!-- swiper slider item IMG end -->
                                        <!-- swiper slider item txt start -->
                                        <div class="swiper-slide-inner-txt-2">
                                            <!-- section subtitle start -->
                                            <div class="star-wrapper fadeIn-element">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                            </div>
                                            <!-- section subtitle end -->
                                            <!-- divider start -->
                                            <div class="divider-m"></div>
                                            <!-- divider end -->
                                            <!-- section title start -->
                                            <h1 class="hero-heading hero-heading-home fadeIn-element">
                                               Our Rooms
                                            </h1>
                                            <!-- section title end -->
                                            <!-- divider start -->
                                            <div class="divider-m"></div>
                                            <!-- divider end -->
                                            <!-- button start -->
                                            <div class="more-wraper-center more-wraper-center-home fadeIn-element">
                                                <a class="button button-effect" href="/booking">
                                                    <div class="more-wraper-inner-home">
                                                        <i class="pulse"></i>
                                                        <div class="more-button-txt-center more-button-txt-center-home">
                                                            <span>Book now</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- button end -->
                                        </div>
                                        <!-- swiper slider item txt end -->
                                    </div>
                                </div>
                                <!-- swiper slider item end -->
                            </div>
                            <!-- swiper wrapper end -->
                        </div>
                        <!-- swiper container end -->
                    </div>
                    <!-- hero slider wrapper end -->
                </div>
            </div>
        </div>
        <!-- hero bg end -->
        <!-- scroll indicator start -->
        <div class="scroll-indicator">
            <div class="scroll-indicator-wrapper">
                <div class="scroll-line fadeIn-element"></div>
            </div>
        </div>
        <!-- scroll indicator end -->
    </div>
    <!-- home end -->
    <!-- vertical lines start -->
    <div class="vertical-lines-wrapper">
        <div class="vertical-lines"></div>
    </div>
    <!-- vertical lines end -->
    <!-- post wrapper start -->

    <div class="divider-l"></div>

    <div class="divider-l"></div>

    <div class="post-wrapper">

        <!-- rooms start -->
        <div id="rooms" class="section-all bg-dark">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h2 class="section-heading">
                            <span>02 </span> Explore Our Rooms
                        </h2>
                        <!-- section title end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2 class="hero-heading hero-heading-dark">
                            Rooms
                        </h2>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container start -->
            <div class="container-fluid nopadding">
                <!-- carousel start -->
                <div class="owl-carousel owl-carousel-rooms">
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-1 all-bg-right"></div>
                        <a class="popup-photo" href="{{public_path().'img/rooms/standard-room.jpg'}}" title="IMG Description">
                            <div class="image-caption">Single bed and breakfast<br>
                                Double bed and breakfast</div>
                        </a>
                        <!-- halve IMG end -->
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section subtitle start -->
                                    <div class="star-wrapper">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                    </div>
                                    <!-- section subtitle end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Deluxe<br>
                                        Room
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>

                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="/deluxe">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div  class="halves">

                        <div class="half post-bg-all rooms-bg-2 all-bg-left"></div>
                        <a class="popup-photo" href="img/rooms/executive.jpg" title="Executive Room">
                            <div class="image-caption">Single bed and breakfast <br>
                                Double bed and breakfast</div>
                        </a>
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section subtitle start -->
                                    <div class="star-wrapper">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                    </div>
                                    <!-- section subtitle end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Executive<br>
                                        Room
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>

                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="/executive">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->

                        <!-- halve IMG end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-3 all-bg-right"></div>
                        <a class="popup-photo" href="img/rooms/rooms-single/3.jpg" title="IMG Description">
                            <div class="image-caption">Single bed and breakfast <br>
                                Double bed and breakfast</div>
                        </a>
                        <!-- halve IMG end -->
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section subtitle start -->
                                    <div class="star-wrapper">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                    </div>
                                    <!-- section subtitle end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Standard<br> Room

                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>

                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="/standard">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                    </div>
                    <!-- halve end -->
                </div>
                <!-- carousel end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- owl nav start -->
                <div class="owl-nav owl-nav-custom-rooms"></div>
                <!-- owl nav end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- rooms end -->
        <!-- post content start -->

        <!-- post content end -->
    </div>

@endsection

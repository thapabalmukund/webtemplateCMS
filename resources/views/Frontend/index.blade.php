    @extends('Frontend.Layouts.main')
    @section('main-container')
        <!-- banner section start -->
        <div class="banner_section">
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="line"><img src="{{ asset('Frontend/images/line.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="taital_main">
                                        {{-- Dynamic changes --}}
                                        <h2 class="construction_text">{{ $data->heading1 }}</h2>
                                        <h1 class="building_text">{{ $data->heading2 }} </h1>


                                        <p class="lorem_text">{{ $data->description }}</p>
                                        <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                        <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div>
                                        @if ($data->image)
                                            <img src="{{ asset('storage/public/image' . $data->image) }}">
                                        @else
                                            <span>No image found!</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end of admincontroller  --}}
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="line"><img src="{{ asset('Frontend/images/line.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="taital_main">
                                        <h2 class="construction_text">CONSTRUCTION</h2>
                                        <h1 class="building_text">BUILDING</h1>
                                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly believable. If you
                                            are going to use a passage of Lorem Ipsum, you need to be sure </p>
                                        <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                        <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div><img src="{{ asset('Frontend/images/banner-bg.png') }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="line"><img src="{{ asset('Frontend/images/line.png') }}"></div>
                                    <p class="number_text">02</p>
                                    <div class="round"><img src="{{ asset('Frontend/images/round-icon.png') }}"></div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="taital_main">
                                        <h2 class="construction_text">CONSTRUCTION</h2>
                                        <h1 class="building_text">BUILDING</h1>
                                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly believable. If you
                                            are going to use a passage of Lorem Ipsum, you need to be sure </p>
                                        <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                        <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div><img src="{{ asset('Frontend/images/banner-bg.png') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
        <!-- about section start -->
        <div class="about_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_taital">
                            <h1 class="about_text">ABOUT COMPANY</h1>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here, content here', making it look like readable English. Many desktop publishing packages
                                and webIt is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                                a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web</p>
                            <div class="about_bt"><a href="#">ABOUT MORE</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 padding_0">
                        <div class="about_img"><img src="{{ asset('Frontend/images/about-bg.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about section end -->
        <!-- our service section start -->
        <div class="our_section layout_padding">
            <div class="container">
                <h1 class="our_text"><strong>OUR SERVICES</strong></h1>
                <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable
                </p>
                <div class="row padding_top_0">
                    <div class="col-lg-4">
                        <div class="image_7"><a href="#"><img src="{{ asset('Frontend/images/img-1.png') }}"></a>
                        </div>
                        <h2 class="design_text">ARCHITECTURAL DESIGN</h2>
                        <p class="fact_text">It is a long established fact that a reader will be distracted by the readable
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="image_7"><a href="#"><img src="{{ asset('Frontend/images/img-2.png') }}"></a>
                        </div>
                        <h2 class="design_text">RECONSTRUCTION SERVICES</h2>
                        <p class="fact_text">It is a long established fact that a reader will be distracted by the readable
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="image_7"><a href="#"><img src="{{ asset('Frontend/images/img-3.png') }}"></a>
                        </div>
                        <h2 class="design_text">ELECTRICAL SYSTEMS</h2>
                        <p class="fact_text">It is a long established fact that a reader will be distracted by the readable
                        </p>
                    </div>
                    <div class="bt_main">
                        <div class="seemore_bt"><a href="#">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our service section end -->
        <!-- project section start -->
        <div class="project_section layout_padding">
            <div class="container">
                <h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
                <p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable
                    content
                    of a page when looking at its layout. The point of using Lorem Ipsum is tha
                </p>
                <div class="choice_main">
                    <div class="choose_bt"><a href="#">Choose your home</a></div>
                </div>
            </div>
        </div>
        <!-- project section end -->
        <!-- client section start -->
        <div class="clients_section layout_padding">
            <div class="container">
                <h1 class="client_text"><strong>WHAT IS SAY CLIENTS</strong></h1>
                <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum </p>
                <div class="clients_section_2">
                    <div id="my_carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#my_carousel" data-slide-to="1"></li>
                            <li data-target="#my_carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-2">
                                        <div class="client_img"><img src="{{ asset('Frontend/images/client-img.png') }}">
                                        </div>
                                        <h2 class="henrry_text">Henrry Jo</h2>
                                    </div>
                                    <div class="col-sm-12 col-lg-10">
                                        <div class="img_5"><img src="{{ asset('Frontend/images/img-6.png') }}"></div>
                                        <p class="client_lorem_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it look</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-2">
                                        <div class="client_img"><img src="{{ asset('Frontend/images/client-img.png') }}">
                                        </div>
                                        <h2 class="henrry_text">Henrry Jo</h2>
                                    </div>
                                    <div class="col-sm-12 col-lg-10">
                                        <div class="img_5"><img src="{{ asset('Frontend/images/img-6.png') }}"></div>
                                        <p class="client_lorem_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it look</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-2">
                                        <div class="client_img"><img src="{{ asset('Frontend/images/client-img.png') }}">
                                        </div>
                                        <h2 class="henrry_text">Henrry Jo</h2>
                                    </div>
                                    <div class="col-sm-12 col-lg-10">
                                        <div class="img_5"><img src="{{ asset('Frontend/images/img-6.png') }}"></div>
                                        <p class="client_lorem_text">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it look</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- client section end -->
        <!-- contact section start -->
        <div class="contact_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_bg">
                            <div class="input_main">
                                <div class="container">
                                    <h2 class="request_text">REQUEST A CALL BACK</h2>
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="Your Name"
                                                name="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="Email" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="Phone" name="Email">
                                        </div>
                                        <form action="/action_page.php">
                                            <div class="form-group">
                                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                                            </div>
                                        </form>
                                    </form>
                                </div>
                            </div>
                            <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 padding_0">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="600" height="450" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact section end -->
    @endsection

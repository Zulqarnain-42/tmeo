@extends('layout.main')
@section('content')
    <main>

        <section id="home" class="home-banner gray-bg"
            style="background-image: url(images/resize-immersive2.jpeg);filter: grayscale(100%);">
            <div class="sec-round">
                <div class="container full-height">
                    <div class="round-item round-item-1"></div>
                    <div class="round-item round-item-2"></div>
                    <div class="round-item round-item-3"></div>
                    <div class="round-item round-item-4"></div>
                    <div class="round-item round-item-5"></div>
                </div>
            </div>

            <div class="container">
                <div class="row full-screen align-items-center">
                    <div class="col col-md-12 col-lg-8 col-xl-6 p-80px-tb">
                        <div class="home-text-center theme-after m-50px-t">
                            {{-- <h4>Hello, my name is</h4>
                        <h5 class="font-alt">James Thompson</h5>
                        <p>I'm the pixel crafter based in Canada. I make the visual to be more interactive.</p>
                        <div class="btn-bar">
                            <a href="#" class="m-btn-link m-btn-link-white theme-after">Download CV</a>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <a href="#aboutus" data-scroll="smooth" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
        </section>

        <section id="aboutus" class="section p-0px-b white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-left">
                            <h2>About Us</h2>
                            <h3>Tech Media Exhibition Organization</h3>
                            <p>Tech Media Exhibition Organization is one of the most dedicated service providers of Events, Exhibitions,
                                Broadcast equipment,Event lighting,Stage, Film, photography, audio, and System Integration. We're a company that
                                lives for supplying you with the latest technology solutions in the media industry. </p>
                            <p>Our valued clients include but are not limited to Events, TV stations, post-production houses, rental
                                and production houses, advertising firms, government institutions, educational institutions,
                                and religious and worship organizations. Check out our <a class="m-btn-link theme-after"
                                    href="#portfolio">Portfolio</a></p>
                            <a class="m-btn m-btn-theme" href="#contact">Contact us <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6 text-center sm-m-45px-t">
                        <img src="static/img/man.jpg" title="" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-section">
            <div class="container">
                <div class="counter-row">
                    <div class="row">
                        <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                            <div class="counter-col">
                                <div class="counter-data" data-count="375">
                                    <div class="count">375</div>
                                    <h6>Happy Clients</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                            <div class="counter-col">
                                <div class="counter-data" data-count="375">
                                    <div class="count">375</div>
                                    <h6>Telephonic Talk</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                            <div class="counter-col">
                                <div class="counter-data" data-count="550">
                                    <div class="count">550</div>
                                    <h6>Photo Capture</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                            <div class="counter-col">
                                <div class="counter-data" data-count="450">
                                    <div class="count">450</div>
                                    <h6>Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section gray-bg services-section">
            <div class="container">
                <div class="row justify-content-center m-45px-b md-m-30px-b sm-m-25px-b">
                    <div class="col-12 col-md-10 col-lg-7">
                        <div class="section-title text-center">
                            <h2 class="font-alt">Our Services</h2>
                            <p>We provide services for customers of all sizes, specializing in creating stylish,
                                modern events, museums, and stages. Our passion is to provide the best user experiences
                                through the bold interface.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/build your broadcast facility 2-240x240h.jpg')}}" style="border-radius: 10px">
                            <div class="feature-content mt-3">
                                <h5>Build Your Broadcast Facility</h5>
                                <p>Our Team have the knowledge of broadcast production workflows that allow the layout and
                                    structure of the facility be part of the production process.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".buildbroadcastfacilitymodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/Immersive 01-240x240h.jpeg')}}" style="border-radius: 10px">
                            <div class="feature-content mt-3">
                                <h5>Immersive Display and Technology Solutions</h5>
                                <p>We provides innovative display products and services that enable customers to achieve their training, visualization and presentation objectives.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".immersivemodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/Satellite-240x240.jpeg')}}" style="border-radius: 10px;">
                            <div class="feature-content mt-3">
                                <h5>RF Transmission</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".rftransmissionmodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/Build your OB Van-240x240h.jpg')}}" style="border-radius: 10px">
                            <div class="feature-content mt-3">
                                <h5>Build Your OB Van</h5>
                                <p>OB van is a small mobile production control room to allow filming of events and video production at
                                    locations outside a regular television studio.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".buildobvanmodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/System integration-240x240h.jpg')}}" style="border-radius: 10px;">
                            <div class="feature-content mt-3">
                                <h5>System Integration</h5>
                                <p>Tech media exhibition organization have the experience of joining software and hardware modules into one cohesive infrastructure, enabling all pieces to work as a whole.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".systemintegrationmodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/smartphone-and-hologram-projector-3d-mockup-vector-27056928-240x240h.jpeg')}}" style="border-radius: 10px">
                            <div class="feature-content mt-3">
                                <h5>Projection and Holograms</h5>
                                <p>Three-dimensional Holographic Projectors that create astonishing Holograms. Real-life hologram technology is not something you would only see in the movies anymore.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".projectionmodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/Screen Shot 2022-03-05 at 7.23.55 pm-240x240h.png')}}" style="border-radius: 10px;">
                            <div class="feature-content mt-3">
                                <h5>Exhibitions & Museams</h5>
                                <p>Specialists in Events & organization plus production and postproduction in various High formats (2K, 4K and beyond).</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".museammodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-box-02">
                            <img src="{{URL::asset('images/FABT Event-240x240h.jpg')}}" style="border-radius: 10px">
                            <div class="feature-content mt-3">
                                <h5>Events & Projects</h5>
                                <p>We provide services of set-up studio design and decoration, including installations and commissioning of large studio with live broadcast and professional team training.</p>
                                <div class="read-more">
                                    <a href="#" type="button" data-toggle="modal" data-target=".eventsmodal" class="more-btn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="section white-bg">
            <div class="container">
                <div class="row justify-content-center m-60px-b md-m-40px-b sm-m-30px-b">
                    <div class="col-12 col-md-10 col-lg-7">
                        <div class="section-title text-center">
                            <h2 class="font-alt">Our Portfolio</h2>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites, web services and online stores. My passion is to design
                                digital user experiences through the bold interface.</p>
                        </div>
                    </div>
                </div>

                <div class="portfolio-filter m-30px-b">
                    <ul class="filter text-center">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".photoshop">Immersive Display</li>
                        <li data-filter=".website">Projection & Hologram</li>
                        <li data-filter=".apps">Exhibitions & Museums</li>
                        <li data-filter=".events">Events & Projects</li>
                    </ul>
                </div>

                <div class="portfolio-content">
                    <ul class="portfolio-cols portfolio-cols-3">
                        <li class="portfolio-item website">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/exhibition1.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/exhibition1.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>

                        <li class="portfolio-item apps">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/exhibition2.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/exhibition2.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>

                        <li class="portfolio-item photoshop apps">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/exhibition3.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/exhibition3.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>

                        <li class="portfolio-item photoshop website">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/exhibition4.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/exhibition4.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>

                        <li class="portfolio-item photoshop apps">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/hologram1.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/hologram1.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>

                        <li class="portfolio-item app website">
                            <div class="portfolio-col portfolio-hover-01">
                                <div class="portfolio-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('images/immersive2.jpeg') }}" title=""
                                            alt="">
                                    </a>
                                    <div class="hover">
                                        <div class="action-btn">
                                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto"
                                                class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                            <a class="lightbox-gallery theme-color"
                                                href="{{ URL::asset('images/immersive2.jpeg') }}"
                                                title="Lightbox gallery image title...">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                            <a href="{{ route('single') }}" class="theme-color">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-info">
                                    <h5>Ryan Portpolio Template</h5>
                                    <span>Resent Work</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- <section class="section testimonial-section gray-bg">
            <div class="container">
                <div class="row justify-content-center m-50px-b md-m-40px-b sm-m-25px-b">
                    <div class="col-12 col-md-10 col-lg-7">
                        <div class="section-title text-center">
                            <h2 class="font-alt">What People Say?</h2>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites, web services and online stores. My passion is to design
                                digital user experiences through the bold interface.</p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div id="client-slider-single" class="owl-carousel">
                            <div class="testimonial-col">
                                <div class="img">
                                    <img src="static/img/avtar1.jpg" alt="Ryan" title="Ryan" />
                                </div>
                                <h6>Jennifer Lutheran</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>

                            <div class="testimonial-col">
                                <div class="img">
                                    <img src="static/img/avtar2.jpg" alt="Ryan" title="Ryan" />
                                </div>
                                <h6>Jennifer Lutheran</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>

                            <div class="testimonial-col">
                                <div class="img">
                                    <img src="static/img/avtar3.jpg" alt="Ryan" title="Ryan" />
                                </div>
                                <h6>Jennifer Lutheran</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>

                            <div class="testimonial-col">
                                <div class="img">
                                    <img src="static/img/avtar1.jpg" alt="Ryan" title="Ryan" />
                                </div>
                                <h6>Jennifer Lutheran</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="contact" class="section p-0px-b contact-section gray-bg">
            <div class="container">
                <div class="row justify-content-center m-60px-b md-m-40px-b">
                    <div class="col-12 col-md-10 col-lg-7">
                        <div class="section-title text-center">
                            <h2 class="font-alt">Contact Us</h2>
                            {{-- <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites, web services and online stores. My passion is to design
                                digital user experiences through the bold interface.</p> --}}
                        </div>
                    </div>
                </div>

                <div class="contact-us-box">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="contact-info-box">
                                <h2>get in touch</h2>
                                <p class="desc">We hope you enjoy our services as much as we enjoy providing them to you.
                                    If you have any questions or comments, please don't hesitate to contact us.
                                </p>
                                <div class="contact-info">
                                    <i class="icon theme-bg ti-direction"></i>
                                    <p>Technic Building Office No. 204, Salah Al-Din St,
                                        Close to Salah Al Din Metro Station,<br> Dubai – United Arab Emirates.</p>
                                </div>

                                <div class="contact-info">
                                    <i class="icon theme-bg ti-email"></i>
                                    <p>info@tmeo.pro</p>
                                </div>

                                <div class="contact-info">
                                    <i class="icon theme-bg ti-mobile"></i>
                                    <p>+971 42 72 2039</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <h2>Say Something</h2>
                                <form>
                                    <div class="form-group">
                                        <input name="Phone" placeholder="Name" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="Email" placeholder="Emaile" class="form-control" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input name="Subject" placeholder="Subject" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" placeholder="Describe your project" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="send">
                                        <button class="m-btn m-btn-theme"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i>Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

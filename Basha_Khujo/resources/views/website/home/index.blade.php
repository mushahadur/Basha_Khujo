@extends('.website.Layout.app')
@section('title', 'Home Page')

@section('content')

    <div class="hero">


        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('{{asset('/')}}website/images/hero_bg_3.jpg')"></div>
            <div class="img overlay" style="background-image: url('{{asset('/')}}website/images/hero_bg_2.jpg')"></div>
            <div class="img overlay" style="background-image: url('{{asset('/')}}website/images/hero_bg_1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-size: 50px;">Easiest way to find your home</h1>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. Mirpur Dhaka 1216">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a></p>
                </div>
            </div>
            <div class="row">

                <div class="col-12">


                    <div class="property-slider-wrap">



                        <div class="property-slider">

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_1.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_2.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_3.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_4.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>1,291,000 TK</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">Dhanmondi, Dhaka</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_5.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>12,910 TK</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">Gulshan, Dhaka</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_6.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>1,91,000 TK</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">Mirpur , Dhaka</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_7.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>1,29,100 TK</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">Bonani, Dhaka</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_8.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="{{route('detail')}}" class="img">
                                    <img src="{{asset('/')}}website/images/img_1.jpg" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
                                            <span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
                                        </div>

                                        <a href="{{route('detail')}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->


                        </div>


                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

{{--    Division base Category Start --}}

    <section style="background-color: rgba(189,192,183,0.22)">
        <div class="container">
            <h1 class="py-3">Choose Your Division</h1>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="{{route('dhaka.home')}}">
                        <img src="{{asset('/')}}website/images/Division/Dhaka.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Dhaka Division</h4>
                        <h6 class="text-center">This is the most populer</h6>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="{{asset('/')}}website/images/Division/Barishal.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Barishal Division</h4>
                        <h6 class="text-center">This is the most populer</h6>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="" src="{{asset('/')}}website/images/Division/Khulna.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Khulna Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="" src="{{asset('/')}}website/images/Division/Rajshahi.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Rajshahi Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-3 col-sm-6">
                    <a href="{{route('division.chattogram')}}">
                        <img src="{{asset('/')}}website/images/Division/Chattogram.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Chattogram Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="{{asset('/')}}website/images/Division/Mymensingh.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Mymensingh Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="" src="{{asset('/')}}website/images/Division/Rangpur.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Rangpur Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="" src="{{asset('/')}}website/images/Division/Sylhet.jpg" alt="Image" style="height: 250px; width: 100%">
                        <h4 class="text-center">Sylhet Division</h4>
                        <p class="text-center">This is the most populer</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
{{--    Division base Category Start --}}

    <section class="features-1">
        <div class="container">
            <h1 class="py-3">Choose Your Category</h1>
            <div class="row">
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">High Category</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Mid Category</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Low Category</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">House Category</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Customer Says</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">

                </div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <img src="{{asset('/')}}website/images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">James Smith</h3>
                            <blockquote>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{asset('/')}}website/images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                            <blockquote>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{asset('/')}}website/images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                            <blockquote>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{asset('/')}}website/images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                            <blockquote>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center  text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">Some of Your Dream Home</h2>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit.</p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="{{asset('/')}}website/images/hero_bg_3.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
                        <div class="feature-text">
                            <h3 class="heading">2M Properties</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
                        <div class="feature-text">
                            <h3 class="heading">Top Rated Agents</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
                        <div class="feature-text">
                            <h3 class="heading">Legit Properties</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">3298</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">2181</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">9316</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">7191</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4 ">To Join Us for your security</h2>
                <p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Your Dream Home</a></p>
            </div> <!-- /.col-lg-7 -->
        </div> <!-- /.row -->
    </div>



@endsection

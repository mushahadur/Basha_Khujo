@extends('.website.Layout.app')

@section('title', 'Chattogram')

@section('content')


    <div class="hero page-inner overlay" style="background-image: url('{{asset('/')}}website/images/hero_bg_1.jpg');">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Properties</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Properties</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">Featured Properties</h2>
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
                                    <img src="{{asset('/')}}website/images/img_5.jpg" alt="Image" class="img-fluid">
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
                                    <img src="{{asset('/')}}website/images/img_6.jpg" alt="Image" class="img-fluid">
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
                                    <img src="{{asset('/')}}website/images/img_7.jpg" alt="Image" class="img-fluid">
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


    <div class="section section-properties">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

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
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

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
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

                        <a href="{{route('detail')}}" class="img">
                            <img src="{{asset('/')}}website/images/img_4.jpg" alt="Image" class="img-fluid">
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

                        <a href="{{route('detail')}}" class="img">
                            <img src="{{asset('/')}}website/images/img_5.jpg" alt="Image" class="img-fluid">
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

                        <a href="{{route('detail')}}" class="img">
                            <img src="{{asset('/')}}website/images/img_6.jpg" alt="Image" class="img-fluid">
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


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

                        <a href="{{route('detail')}}" class="img">
                            <img src="{{asset('/')}}website/images/img_7.jpg" alt="Image" class="img-fluid">
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

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
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

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
            </div>
            <div class="row align-items-center py-5">
                <div class="col-lg-3">
                    Pagination (1 of 10)
                </div>
                <div class="col-lg-6 text-center">
                    <div class="custom-pagination">
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

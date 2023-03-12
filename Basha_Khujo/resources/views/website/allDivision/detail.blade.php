@extends('.website.Layout.app')

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{asset('/')}}website/images/hero_bg_3.jpg');">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Cholontika Housing Damador Villa</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item "><a href="properties.html">Properties</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Cholontika Housing Damador Villa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row ">
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="{{asset('/')}}website/images/Division/signle.jpg" class="img-fluid rounded-start" alt="..." style="height: 500px; width: 600px">
                    </div>

                    <div class="col-md-5">
                        <div class="card-body">
                            <h3 class="card-title pb-3">Cholontika Housing Damador</h3>
                            <h6 class="card-text"><strong>House Description :</strong>
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </h6>
                            <p class="card-text pb-3"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <div class="pt-5">
                                <button class="btn btn-success">Booking This Home</button>
                                <button class="btn btn-primary mx-5">Booking </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="pb-5">Discrive in this home</h3>
            <div class="row ">
                <div class="col-md-6">
                    <iframe width="100%" height="415"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
                <div class="col-md-6 shadow ml-3">
                    <iframe class="h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.602583276092!2d90.37059391445675!3d23.797162292906446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cd7313eb1d%3A0x1b8b8fc444fa23eb!2sKazipara%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1649709787505!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection






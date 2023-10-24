@extends('layouts.landing')

@section('content')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1" data-aos="zoom-out-down" data-aos-duration="700">FLOWR</h1>
            <h3 class="mb-5" data-aos="zoom-out-down" data-aos-duration="1100">Haloo
                @if (Auth::check())
                    @if (Auth::user()->name)
                        {{ Auth::user()->name }}!!
                    @else
                        !!
                    @endif
                @else
                    !!
                @endif

            </h3>
            <a class="btn btn-primary btn-xl" href="#about" data-aos="fade-up" data-aos-duration="550"><i class="fa-solid fa-angles-down fa-2xl"></i></a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2 data-aos="flip-up" data-aos-offset="500" data-aos-duration="500">Ayoo! Flo!</h2>
                    <p class="lead mb-5" data-aos="flip-down" data-aos-offset="400" data-aos-duration="700">
                        🌱 Tertarik dengan tumbuhan 🌱
                    </p>
                    <a class="btn btn-dark btn-xl" href="#tentang" data-aos="flip-down" data-aos-offset="200"
                        data-aos-duration="500">So pasti!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang-->
    <section class="content-section bg-primary text-white text-center" id="tentang">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading" data-aos="flip-down" data-aos-offset="400" data-aos-duration="500">
                <h3 class="text-secondary mb-0">tentang</h3>
                <h2 class="mb-5">Manusia dan Tumbuhan</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0" data-aos="flip-up" data-aos-offset="400"
                    data-aos-duration="500">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-wind"></i></span>
                    <h4><strong>Apa hal?</strong></h4>
                    <p class="text-faded mb-0">Bukan saya!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0" data-aos="flip-down" data-aos-offset="450"
                    data-aos-duration="500">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-fan"></i></span>
                    <h4><strong>Apa gerangan?</strong></h4>
                    <p class="text-faded mb-0">Masih sama</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0"data-aos="flip-up" data-aos-offset="500" data-aos-duration="500">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-leaf"></i></span>
                    <h4><strong>Masih yang tadi</strong></h4>
                    <p class="text-faded mb-0">
                        Bukan saya lagi
                    </p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-offset="550" data-aos-duration="500">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-seedling"></i></span>
                    <h4><strong>Ini saya!</strong></h4>
                    <p class="text-faded mb-0">Pasti Flora<i class="fa-solid fa-heart"></i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <section class="callout">
        <div class="container px-4 px-lg-5 text-center" >
            <h2 class="mx-auto mb-5" data-aos="zoom-in-left" data-aos-offset="250" data-aos-duration="500">
                @if (Auth::check())
                    @if (Auth::user()->name)
                        👀{{ Auth::user()->name }}👀
                    @else
                        🌱👀🌱
                    @endif
                @else
                    🌱👀🌱
                @endif
            </h2>
            <h3 class="mx-auto mb-5">Ada yang mau ikut aku?!</h3>
            <a class="btn btn-dark btn-xl" href="#flo" data-aos="flip-down" data-aos-offset="150" data-aos-duration="500"><span style="font-size: 25px">☝️</span>Aku Bwang!!</a>
        </div>
    </section>
    <!-- Flo-->
    <section class="content-section" id="flo">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0" data-aos="flip-up" data-aos-offset="350" data-aos-duration="700">Flo!</h3>
                <h2 class="mb-5" data-aos="flip-down" data-aos-offset="400" data-aos-duration="500">❤️ Flo ❤️</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" data-aos="flip-right" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        {{-- <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Kaguya❤️Flo</div>
                                    <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                                </div>
                            </div> --}}
                        <img class="img-fluid mb-3"
                        style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-left" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        {{-- <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Ice Cream</div>
                                    <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                                </div>
                            </div> --}}
                        <img class="img-fluid mb-3"
                        style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora3.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-right" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        {{-- <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Strawberries</div>
                                    <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                                </div>
                            </div> --}}
                        <img class="img-fluid "
                        style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora4.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-left" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        {{-- <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Workspace</div>
                                    <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                                </div>
                            </div> --}}
                        <img class="img-fluid "
                        style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flo5.jpg') }}" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4" data-aos="flip-up" data-aos-offset="400" data-aos-duration="700">Hanya website portofolio biasa 🤔☝️</h2>
            <a class="btn btn-xl btn-light fs-3" href="#flo" data-aos="flip-down" data-aos-offset="460" data-aos-duration="500">❤️</a>
        </div>
    </section>
    {{-- <!-- Map-->
        <div class="map" id="contact">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
        </div> --}}
@endsection

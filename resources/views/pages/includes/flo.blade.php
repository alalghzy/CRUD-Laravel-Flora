<!-- Flo-->
<section class="content-section" id="flo">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0" data-aos="flip-up" data-aos-offset="350" data-aos-duration="700">Flo!</h3>
            <h2 class="mb-5" data-aos="flip-down" data-aos-offset="400" data-aos-duration="500">❤️ Flo ❤️</h2>
        </div>
        <div class="row gx-0">
            @if ($gambar->count())
                @foreach ($gambar as $g)
                <div class="col-lg-6" data-aos="flip-right" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        <img class="img-fluid mb-3"
                             style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                             src="{{ asset('storage/posts/'.$g->image) }}" alt="" />
                    </a>
                </div>
                @endforeach
            @else
                <div class="col-lg-6" data-aos="flip-right" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        <img class="img-fluid mb-3"
                            style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-left" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        <img class="img-fluid mb-3"
                            style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora3.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-right" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        <img class="img-fluid "
                            style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flora4.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6" data-aos="flip-left" data-aos-offset="350" data-aos-duration="700">
                    <a class="portfolio-item d-flex align-items-center justify-content-center" href="#!">
                        <img class="img-fluid "
                            style="width: 500px; height: 325px; margin: auto; border: 2px solid #380303; border-radius: 10px; object-fit: cover;"
                            src="{{ asset('components/img/flo5.jpg') }}" alt="..." />
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>



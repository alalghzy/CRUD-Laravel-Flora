@extends('layouts.landing')

@section('content')
    @include('pages.includes.header')
    @include('pages.includes.tentang')

    <!-- Callout-->
    <section class="callout" id="lanjut1">
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

    @include('pages.includes.flo')

    <!-- Call to Action-->
    <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4" data-aos="flip-up" data-aos-offset="400" data-aos-duration="700">Hanya website portofolio biasa 🤔☝️</h2>
            <a class="btn btn-xl btn-light fs-3" href="#flo" data-aos="flip-down" data-aos-offset="460" data-aos-duration="500">❤️</a>
        </div>
    </section>

    @include('pages.includes.map')
@endsection

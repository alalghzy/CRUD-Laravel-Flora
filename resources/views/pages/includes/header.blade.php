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

<!--hero section-->
<section class="py-lg-18 py-md-10  py-8 bg-dark" id="home">
    <div class="container">
        <!--row-->
        <div class="row d-flex align-items-center">
            <div class="col-xl-5 col-md-6  col-lg-6 col-12">
                <div class="mb-5 mb-md-0">
                    <!--text-->
                    <span class=" text-primary">Hello, Welcome</span>
                    <!--title-->
                    <h1 class="mt-4 mb-4 display-3 fw-semibold">
                        @if ($hero)
                            {{ $hero->title }}
                        @else
                        @endif
                    </h1>
                    <p class="mb-6 lead">
                        @if ($hero)
                            {{ $hero->desc }}
                        @else
                        @endif
                    </p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                    <!--text-->
                </div>
            </div>
            <!--col-->
            <div class="col-xl-5 offset-xl-2 col-md-5 offset-md-1 col-lg-5 offset-lg-1  col-12">
                <!--image-->
                <div class="position-relative">
                    <img src="/assets/frontend/images/img-1.jpg" alt="about"
                        class="img-fluid position-relative z-1 rounded-4 ms-lg-n5 ms-md-n3">
                    <div class="position-absolute top-0 mt-1 ">
                        <img src="/assets/frontend/images/square.svg" alt="square"
                            class="img-fluid w-100 d-none d-lg-block d-md-block">
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<!--hero section-->

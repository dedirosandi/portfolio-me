<!--about me section-->
<section class="py-lg-18 py-md-10 py-8" id="aboutme">
    <div class="container">
        <!--row-->
        <div class="row d-flex align-items-center">
            <div class="col-xl-5  col-md-6 col-lg-6 col-12">
                <div class="p-3 mb-5 mb-md-0">
                    <!--image-->
                    <div class="position-relative">
                        <img src="/assets/frontend/images/img-2.jpg" alt="about"
                            class="img-fluid position-relative z-1 rounded-4 ms-lg-5 ms-3 ms-md-4">
                        <div class="position-absolute top-0 mt-1">
                            <img src="/assets/frontend/images/square.svg" alt="square" class="img-fluid ">
                        </div>
                    </div>
                    <!--image-->
                </div>
            </div>
            <!--col-->
            <div class="col-xl-6 offset-xl-1  col-md-5 offset-md-1 col-lg-5 offset-lg-1 col-12">
                <div class="">
                    <!--text-->
                    <!--title-->
                    <h2 class="mb-5">
                        About <span class="text-primary">Me</span>
                    </h2>
                    <p class="mb-6">
                        @if ($about)
                            {{ $about->desc }}
                        @else
                        @endif
                    </p>

                    <a href="#" class="btn btn-primary">Contact Us</a>
                    <!--text-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--about me section-->

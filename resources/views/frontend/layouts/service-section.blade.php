<!--service section-->
<section class=" py-lg-18 py-md-10 py-8 bg-dark" id="myservice">
    <div class="container">
        <!--row-->
        <div class="row">
            <div class="col-xl-5 col-md-12  col-lg-6 col-12">
                <div class="mb-lg-8 mb-5">
                    <!--text-->
                    <!--title-->
                    <h2 class="mb-4">My <span class="text-primary">Service</span></h2>

                    <p class="mb-0">There are many variations of passages ofLorem Ipsum
                        available, but the majority havesuffered alteration in some
                        form, by injected humour,</p>
                    <!--text-->
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($service as $services)
                <!--service-->
                <div class="col-xl-4 col-md-6 col-lg-4  col-12">
                    <!--card start-->
                    <div class="card text-center border-0 mb-4  mb-lg-0">
                        <!--card body-->
                        <div class="card-body p-5">
                            <div class="mb-5">
                                <!--icon-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    fill=" var(--bs-primary)" class="bi bi-megaphone" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                </svg>
                            </div>
                            <div>
                                <!--title-->
                                <h3 class="mb-3">{{ $services['title'] }}</h3>
                                <p class="mb-0 ">{{ $services['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    <!--card end-->
                </div>
                <!--service-->
            @endforeach

        </div>
    </div>
</section>
<!--service section-->

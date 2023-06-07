<!--experiences section-->
<section class="py-lg-18 py-md-10 py-8 bg-dark" id="myexperiences">
    <div class="container">
        <!--row-->
        <div class="row">
            <div class="col-xl-7 col-md-12  col-lg-8 col-12">
                <div class="mb-lg-8 mb-5">
                    <!--text-->
                    <h2 class="mb-4"> My <span class="text-primary">Experiences</span></h2>
                    <p class="mb-0">There are many variations of passages ofLorem Ipsum
                        available, but the majority havesuffered alteration in some form, by injected humour,
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!--col-->

            @foreach ($experience as $experiences)
                <div class="col-xl-4 col-md-6 col-lg-4 col-12">
                    <!--card start-->
                    <div class="card mb-4 border-0">
                        <!--card body-->
                        <div class="card-body p-5">
                            <div class="mb-3">
                                <!--text-->
                                <h5 class="mb-3">{{ $experiences['title'] }}</h5>
                                <h4 class="mb-2 text-primary">{{ $experiences['position'] }}</h4>
                                <span>{{ $experiences['skill'] }}</span>
                            </div>
                            <p class="mb-0">{!! $experiences['desc'] !!}
                            </p>
                            <!--text-->
                        </div>
                    </div>
                    <!--card end-->
                </div>
            @endforeach


        </div>
    </div>
</section>
<!--experiences section-->

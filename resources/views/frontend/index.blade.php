<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedi Rosandi - Personal Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;800;900&display=swap"
        rel="stylesheet">


    <script type="module" crossorigin src="{{ asset('assets/frontend/js/index.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/index.css') }}">
</head>

<body>
    @include('frontend.layouts.navbar')
    <main data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example"
        tabindex="0">
        @include('frontend.layouts.hero-section')
        @include('frontend.layouts.about-me-section')
        @include('frontend.layouts.service-section')
        @include('frontend.layouts.experiences-section')
        @include('frontend.layouts.portfolio-section')
        @include('frontend.layouts.contact-section')
    </main>
    @include('frontend.layouts.footer')





</body>

</html>

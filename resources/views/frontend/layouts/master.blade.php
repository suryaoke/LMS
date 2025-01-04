<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>EduCore - Online Courses & Education HTML Template</title>
    {{--  {{ asset('admin/assets/dist/css/demo.min.css?1692870487') }}  --}}
    <link rel="icon" type="image/png" href="images/favicon.png') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/scroll_button.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/pointer.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/jquery.calendar.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/range_slider.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/startRating.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/video_player.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/jquery.simple-bar-graph.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/sticky_menu.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/animate.css') }}">

    <link rel=" stylesheet" href= "{{ asset('frontend/css/spacing.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href= "{{ asset('frontend/css/responsive.css') }}">


    @vite(['resources/css/frontend.css'])
</head>

<body class="home_3">


    <!--============ PRELOADER START ===========-->
    <div id="preloader">
        <div class="preloader_icon">
            <img src="{{ asset('frontend/images/preloader.png') }}" alt="Preloader" class="img-fluid">
        </div>
    </div>
    <!--============ PRELOADER START ===========-->




    @include('frontend.layouts.header')

    @yield('content')


    <!--================================
        SCROLL BUTTON START
    =================================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--================================
        SCROLL BUTTON END
    =================================-->


    <!--jquery library js-->
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
    <!--marquee js-->
    <script src="{{ asset('frontend/js/jquery.marquee.min.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!--countup js-->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countup.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <!--nice-select js-->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!--Scroll Button js-->
    <script src="{{ asset('frontend/js/scroll_button.js') }}"></script>
    <!--pointer js-->
    <script src="{{ asset('frontend/js/pointer.js') }}"></script>
    <!--range slider js-->
    <script src="{{ asset('frontend/js/range_slider.js') }}"></script>
    <!--barfiller js-->
    <script src="{{ asset('frontend/js/animated_barfiller.js') }}"></script>
    <!--calendar js-->
    <script src="{{ asset('frontend/js/jquery.calendar.js') }}"></script>
    <!--starRating js-->
    <script src="{{ asset('frontend/js/starRating.js') }}"></script>
    <!--Bar Graph js-->
    <script src="{{ asset('frontend/js/jquery.simple-bar-graph.min.js') }}"></script>
    <!--select2 js-->
    <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
    <!--Video player js-->
    <script src="{{ asset('frontend/js/video_player.min.js') }}"></script>
    <script src="{{ asset('frontend/js/video_player_youtube.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>

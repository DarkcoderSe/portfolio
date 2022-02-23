<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        @if(isset($seo->title))
            <title>{{ $seo->title }}</title>
        @else
            <title>{{ setting('site.title', 'Kashif Saleem - Resume') . ' - ' . setting('site.description', 'I do provide the software services...') }}</title>
        @endif

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ setting('site.favicon', '/wave/favicon.png') }}" type="image/x-icon">

        {{-- Social Share Open Graph Meta Tags --}}
        @if(isset($seo->title) && isset($seo->description) && isset($seo->image))
            <meta property="og:title" content="{{ $seo->title }}">
            <meta property="og:url" content="{{ Request::url() }}">
            <meta property="og:image" content="{{ $seo->image }}">
            <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
            <meta property="og:description" content="{{ $seo->description }}">
            <meta property="og:site_name" content="{{ setting('site.title') }}">

            <meta itemprop="name" content="{{ $seo->title }}">
            <meta itemprop="description" content="{{ $seo->description }}">
            <meta itemprop="image" content="{{ $seo->image }}">

            @if(isset($seo->image_w) && isset($seo->image_h))
                <meta property="og:image:width" content="{{ $seo->image_w }}">
                <meta property="og:image:height" content="{{ $seo->image_h }}">
            @endif
        @endif

        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow">

        @if(isset($seo->description))
            <meta name="description" content="{{ $seo->description }}">
        @endif
        
        <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/animate.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/et-line-icons.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/owl.transitions.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/style.css')}}" />
        <link rel="stylesheet" href="{{ asset('/themes/portfolio/css/responsive.css')}}" />
    </head>
    <body>

        @yield('content')
        

        <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.easing.1.3.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/skrollr.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/smooth-scroll.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.appear.js')}}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.nav.js')}}"></script>
        <!-- animation -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/wow.min.js')}}"></script> --}}
        <!-- page scroll -->
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/page-scroll.js')}}"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/owl.carousel.min.js')}}"></script>
        <!-- counter -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.countTo.js')}}"></script> --}}
        <!-- parallax -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.parallax-1.1.3.js')}}"></script> --}}
        <!-- magnific popup -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.magnific-popup.min.js')}}"></script> --}}
        <!-- portfolio with shorting tab -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/isotope.pkgd.min.js')}}"></script> --}}
        <!-- images loaded -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/imagesloaded.pkgd.min.js')}}"></script> --}}
        <!-- pull menu -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/classie.js')}}"></script> --}}
        <!-- counter  -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/counter.js')}}"></script> --}}
        <!-- fit video  -->
        {{-- <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/jquery.fitvids.js')}}"></script> --}}
        <!-- setting -->
        <script type="text/javascript" src="{{ URL::to('/themes/portfolio/js/main.js')}}"></script>

    </body>
</html>
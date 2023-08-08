<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>@yield('title') - perfect data management app</title>
        <meta name="description" content="LeadGen is a conversion ratio and speed optimized multi-purpose marketing landing page template with drag & drop page builder and tons of readymade elements and demos with greater level of customization possibilities." />
        <meta name="keywords" content="Marketing, landing page, creative, html5, css3, page builder, drag & drop, multi-purpose, one page, aweber, mailchimp, active campaign, campaign monitor, get response, mailer lite, custom form, product, hotel and resort, resume, personal, restaurant, corporate business, interior design, software, spa salon, travel agency, app landing page, design agency, start-up, e-learning, sports and gym, seo, wedding invitation, hosting, online shopping, yoga and fitness, music show, finance and account, e-book, event, medical, real estate, portfolio, digital marketing, inner content page, sign-up, 404 not found, coming soon" />
        <meta name="author" content="lgauthor">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/icon/favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('/front/font-awesome/css/font-awesome.min.css') }}">

        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('/front/css/animate.css') }}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('/front/css/bootstrap.min.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('/front/css/font-awesome.min.css') }}" />
        <!-- themify-icons -->
        <link rel="stylesheet" href="{{ asset('/front/css/themify-icons.css') }}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('/front/css/owl.transitions.css') }}" />
        <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.css') }}" /> 
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('/front/css/magnific-popup.css') }}" /> 
        <!-- base -->
        <link rel="stylesheet" href="{{ asset('/front/css/base.css') }}" /> 
        <!-- elements -->
        <link rel="stylesheet" href="{{ asset('/front/css/elements.css') }}" />
        <!-- responsive -->
        <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}" />

        {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> --}}

        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
        <style>
            .title-style6 .progress-bar-style1 .progress-bar {background-color: #374a8a;}


        </style>

    </head>
    <body>

        @include('layouts._front-navbar')

        {{ $slot }}

        @include('layouts._front-footer')

        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/front/js/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/front/js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/front/js/bootstrap.min.js') }}"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="{{ asset('/front/js/wow.min.js') }}"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{ asset('/front/js/owl.carousel.min.js') }}"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('/front/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- isotope -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.isotope.min.js') }}"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- navigation -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.nav.js') }}"></script>
        <!-- equalize -->
        <script type="text/javascript" src="{{ asset('/front/js/equalize.min.js') }}"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.fitvids.js') }}"></script>
        <!-- number counter -->
        <script type="text/javascript" src="{{ asset('/front/js/jquery.countTo.js') }}"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="{{ asset('/front/js/counter.js') }}"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="{{ asset('/front/js/twitterFetcher_min.js') }}"></script>
        <!-- main -->
        <script type="text/javascript" src="{{ asset('/front/js/main.js') }}"></script>

        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

    </body>
</html>

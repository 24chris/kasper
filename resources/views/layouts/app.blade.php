<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}


    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}



    {{-- Superowly --}}
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1506515745766 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1511011361412 {
            padding-top: 90px !important;
            padding-bottom: 70px !important;
        }

        .vc_custom_1506583786917 {
            padding-top: 90px !important;
            padding-bottom: 70px !important;
        }

        .vc_custom_1506583915675 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1513249637521 {
            padding-top: 90px !important;
            padding-bottom: 90px !important;
            background: #ffbd0a url(https://velikorodnov.com/wordpress/superowly/wp-content/uploads/2017/08/1920x211_bg-2.png?id=765) !important;
        }

        .vc_custom_1511001651811 {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .vc_custom_1506586626297 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 90px !important;
            padding-bottom: 90px !important;
            background-color: #f6f6f6 !important;
        }

        .vc_custom_1506515782918 {
            margin-top: -100px !important;
        }

        .vc_custom_1512381012153 {
            margin-bottom: 25px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1513249392434 {
            margin-bottom: 50px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1506585943636 {
            padding-top: 70px !important;
        }

        .vc_custom_1506586264341 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <link rel='stylesheet' href={{ asset('css/style.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/minified.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/bootstrap.min.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/fontello.css') }} type='text/css' media='all' />
    {{-- <link rel='stylesheet' href={{asset('css/jquery.arcticmodal.css')}} type='text/css' media='all'/> --}}
    <link rel='stylesheet' href={{ asset('css/skin.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/upcomm.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/curriculum.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css' href={{ asset('js/fancybox/helpers/jquery.fancybox.css') }}
        type='text/css' />
    <link rel='stylesheet' id='fancybox-buttons-css' href={{ asset('js/fancybox/helpers/juicy.fancybox-button.css') }}
        type='text/css' />
    <link rel='stylesheet' id='fancybox-thumbs-css' href={{ asset('js/fancybox/helpers/juicy.fancybox-thumbs.css') }}
        type='text/css' />
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

        <header id="header" class="sp-header sp-type-1 header-sticky-1 header style-2">

            <!-- - - - - - - - - - - - - - Header Section - - - - - - - - - - - - - - - - -->



            <!-- search-form -->
            <div class="searchform-wrap">
                <div class="vc-child h-inherit relative">

                    <form method="get" id="searchform" action="https://velikorodnov.com/wordpress/superowly/">
                        <input type="text" name="s" id="s" placeholder="Start typing..."
                            value="">
                        <button type="submit"></button>
                    </form>

                </div>
                <button class="close-search-form"></button>
            </div>


            <!-- top-header -->
            <div class="top-header">

                <div class="menu-holder">

                    <div class="menu-wrap">

                        <div class="table-row">

                            <!-- logo -->
                            <div class="logo-wrap">

                                <a class="sp-logo logo" href="#"
                                    title="SuperOwly – Kindergarten, School of Early Learning, Nanny Agency - WordPress Theme"
                                    rel="home">
                                    <img class="sp-standard-logo"
                                        src="./SuperOwly – Kindergarten, School of Early Learning, Nanny Agency – WordPress Theme_files/logo@2x.png"
                                        alt="SuperOwly – Kindergarten, School of Early Learning, Nanny Agency"
                                        width="282" height="86"><img class="sp-sticky-logo"
                                        src="./SuperOwly – Kindergarten, School of Early Learning, Nanny Agency – WordPress Theme_files/logo@2x.png"
                                        alt="SuperOwly – Kindergarten, School of Early Learning, Nanny Agency"
                                        width="0" height="0"> </a>

                            </div>

                            <!-- Menu & TopBar -->
                            <div class="nav-item">

                                <!-- Top Bar -->

                                <div class="contact-info-menu">

                                    <div class="contact-info-item contact-info-phone">
                                        <i class="icon-phone"></i>
                                        <a class="header-phone1" href="callto:800-987-65-43">800-8898</a>


                                    </div>


                                    <div class="contact-info-item">
                                        <i class="icon-mail-1"></i>
                                        <a href="mailto:%6d%61i%6c%40s%75p%65%72ow%6c%79.%63%6fm">mail@kasper.com</a>
                                    </div>


                                    <div class="contact-info-item">
                                        <i class="icon-location"></i>
                                        <span>9870 Kasper Place, Tororo, 45</span>
                                    </div>



                                    <div class="contact-info-item contact-info-register">
                                        <i class="icon-globe-1"></i>


                                        <a href="#">Sign In</a>



                                    </div>


                                    <div class="contact-info-item">
                                        <ul class="sp-social-icons social-icons">







                                            <li class="fb-icon"><a title="Facebook" href="#"><i
                                                        class="icon-facebook"></i></a></li>

                                            <li class="tweet-icon"><a title="Twitter" href="#"><i
                                                        class="icon-twitter"></i></a></li>

                                            <li class="insta-icon"><a title="Instagram" href="#"><i
                                                        class="icon-instagram-3"></i></a></li>

                                            <li class="flickr-icon"><a title="Flickr" href="#"><i
                                                        class="icon-flickr"></i></a></li>


                                            <li class="flickr-icon"><a title="Whats App" href="#"><i
                                                        class="icon-whatsapp"></i></a></li>


                                        </ul>
                                    </div>



                                </div>



                                <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->
                                <button id="responsive-nav-button" class="responsive-nav-button"></button>
                                <nav id="main-navigation" class="sp-nav-wrap main-navigation">
                                    <ul id="menu-primary-menu" class="sp-navigation clearfix">
                                        <li id="menu-item-977"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-882 current_page_item current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-977 current dropdown">
                                            <a href="/" aria-current="page">Home</a>
                                        </li>
                                        <li id="menu-item-944"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-944 dropdown">
                                            <a href="/about-us">About Us</a>
                                        </li>
                                        <li id="menu-item-952"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-952 dropdown">
                                            <a href="/staff">Staff</a>
                                        </li>
                                        <li id="menu-item-958"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-958 dropdown">
                                            <a href="/classes">Classes</a>
                                        </li>
                                    </ul>
                                </nav>


                                <div class="search-holder">
                                    <button class="search-button"></button>
                                </div>


                                <a class="btn btn-style-2" href="/contact-us">Inquire</a>


                            </div>



                        </div>

                    </div>

                </div>

            </div>


            <!-- bottom-separator -->
            <div class="bottom-separator"></div>
        </header>

        <!-- - - - - - - - - - - - - - / Header - - - - - - - - - - - - - - -->



        <main class="py-4">
            @yield('content')
        </main>

        <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

        <div class="sp-footer-holder sp-footer-type-fixed">

            <footer id="footer" class="sp-footer footer footer-1">




                <div class="sp-fs-medium  top-footer">
                    <div class="container">
                        <div class="row">



                            <div class="col-sm-3">


                                <div class="widget_text_with_icon">
                                    <div class="icons-wrap">

                                        <div class="icons-item">
                                            <div class="item-box"> <i class="licon-map-marker"></i>
                                                <h5 class="icons-box-title widget-title">
                                                    Location </h5>

                                                <p>9870 St Vincent Place,<br />
                                                    Glasgow, DC 45 Fr 45</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-3">


                                <div class="widget_text_with_icon">
                                    <div class="icons-wrap">

                                        <div class="icons-item">
                                            <div class="item-box"> <i class="licon-clock3"></i>
                                                <h5 class="icons-box-title widget-title">
                                                    Opening Hours </h5>

                                                <p>Monday – Friday<br />
                                                    8:00 AM – 5:00 PM</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-3">


                                <div class="widget_text_with_icon">
                                    <div class="icons-wrap">

                                        <div class="icons-item">
                                            <div class="item-box"> <i class="licon-smartphone"></i>
                                                <h5 class="icons-box-title widget-title">
                                                    Contact Us </h5>

                                                <p>+1 800 559 6580<br />
                                                    mail@companyname.com</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-3">
                                <div class="widget_social_with_icon type2">
                                    <div class="icons-wrap">
                                        <div class="icons-item">
                                            <div class="item-box"><i class="licon-share2"></i>
                                                <h5 class="icons-box-title widget-title">Stay Connected</h5>
                                                <ul class="social-icons style-2">






                                                    <li class="fb-icon"><a target="_blank" href="#"><i
                                                                class="icon-facebook"></i></a></li>


                                                    <li class="tweet-icon"><a target="_blank" href="#"><i
                                                                class="icon-twitter"></i></a></li>


                                                    <li class="pinterest-icon"><a target="_blank" href="#"><i
                                                                class="icon-pinterest"></i></a></li>

                                                    <li class="insta-icon"><a target="_blank" href="#"><i
                                                                class="icon-instagram-3"></i></a></li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!--/ .row-->

                    </div>
                </div>



                <div class="copyright-section">
                    <div class="container">



                        <div class="copyright">&copy; Copyright 2023. All Rights Reserved.</div>

                    </div>
                </div>


            </footer>
            <!--/ #footer-->

            <div id="footer-scroll"></div>
            <!-- - - - - - - - - - - - - -/ Footer - - - - - - - - - - - - - - - - -->

        </div>
        <!--/ .sp-footer-holder-->
    </div>
    <script type='text/javascript' href={{ asset('js/fancybox/helpers/jquery.fancybox-pack.js') }} id='fancybox-js'>
    </script>
    <script type='text/javascript' href={{ asset('js/fancybox/helpers/jquery.fancybox-buttons.js') }}
        id='fancybox-buttons-js'></script>
    <script type='text/javascript' href={{ asset('js/fancybox/helpers/jquery.fancybox-media.js') }} id='fancybox-media-js'>
    </script>
    <script type='text/javascript' href={{ asset('js/fancybox/helpers/jquery.fancybox-thumbs.js') }}
        id='fancybox-thumbs-js'></script>
    <script type='text/javascript' href={{ asset('js/libs/jquery.modernizer.js') }} id='modernizr-js'></script>
    <script type='text/javascript' href={{ asset('js/audioplayer.js') }} id='audioplayer-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.arctic-modal.js') }} id='jquery-arcticmodal-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.localscroll.min.js') }} id='jquery-localScroll-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.queryloader.js') }} id='jquery-queryloader2-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.scrollTo.min.js') }} id='jquery-scrollTo-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.superowly.core.js') }} id='superowly-core-js'></script>
    <script type='text/javascript' href={{ asset('js/jquery.superowly.plugin.js') }} id='superowly-plugins-js'></script>
</body>

</html>

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
    <link id="superowly-google-fonts-css" href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet"
        media="all">


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
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id="superowly-style-css" href={{ asset('css/style.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/minified.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/bootstrap.min.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id="fontello-css" href={{ asset('css/fontello.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id="superowly-layout-css" href={{ asset('css/responsive.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="superowly-skin-css" href={{ asset('css/skin.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/upcomm.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/curriculum.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css' href={{ asset('js/fancybox/helpers/jquery.fancybox.css') }}
        type='text/css' />
    <link rel='stylesheet' id='fancybox-buttons-css' href={{ asset('js/fancybox/helpers/juicy.fancybox-button.css') }}
        type='text/css' />
    <link rel='stylesheet' id='fancybox-thumbs-css' href={{ asset('js/fancybox/helpers/juicy.fancybox-thumbs.css') }}
        type='text/css' />
    {{-- new set --}}
    <link rel='stylesheet' href={{ asset('css/owl.carousel.min.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id='owlcarousel-css' href={{ asset('css/owl.carousel.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' href={{ asset('css/owl.theme.default.min.css') }} type='text/css' media='all' />
    <link rel='stylesheet' id="sbi_styles-css" href={{ asset('css/sbi-styles.min.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="js_composer_front-css" href={{ asset('css/js_composer.min.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="superowly_js_composer_front-css" href={{ asset('css/composer-front.css') }}
        type='text/css' media='all' />
    <link rel='stylesheet' id="wp-block-library-css" href={{ asset('css/composer-front.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="jquery-arcticmodal-css" href={{ asset('css/jquery.arcticmodal.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="superowly-demofonts-css" href={{ asset('css/demo.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="vc_plugin_table_style_css-css" href={{ asset('css/easy_table.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="vc_plugin_themes_css-css" href={{ asset('css/easy_table-theme.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' id="superowly-vc-table-css" href={{ asset('css/vc-mod-table.css') }} type='text/css'
        media='all' />
    <link rel='stylesheet' href={{ asset('css/wc-blocks-vendors.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/wc-blocks-style.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/style1.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/style2.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/style3.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/font-pop.css') }} type='text/css' media='all' />
    <link rel='stylesheet' href={{ asset('css/font-pop-norm.css') }} type='text/css' media='all' />


    {{-- Revolution Slider --}}
    <meta name="generator"
        content="Powered by Slider Revolution 6.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {				 
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement(
                    "style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>

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

                    <form method="get" id="searchform" action="">
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
                                        alt="SuperOwly – " width="282" height="86"><img class="sp-sticky-logo"
                                        src="./SuperOwly – Kindergarten, School of Early Learning, Nanny Agency – WordPress Theme_files/logo@2x.png"
                                        alt="SuperOwly – " width="0" height="0"> </a>

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
    <script type='text/javascript' src={{ asset('js/owl.carousel.min.js') }} defer></script>
    <script type='text/javascript' src={{ asset('js/skrollr.min.js') }} id='vc_jquery_skrollr_js-js'></script>
    <script type='text/javascript' src={{ asset('js/jquery.min.js') }} id='jquery-core-js'></script>
    <script type='text/javascript' src={{ asset('js/wp-emoji-release.min.js') }}></script>
    <script type='text/javascript' src={{ asset('js/jquery-migrate.min.js') }}id='jquery-migrate-js'></script>
    <script type='text/javascript' src={{ asset('js/rbtools.min.js') }} id='tp-tools-js'></script>
    <script type='text/javascript' src={{ asset('js/jquery.blockUI.min.js') }} id='jquery-blockui-js'></script>
    <script type='text/javascript' src={{ asset('js/libs/jquery.modernizr.js') }} id='moderniezr-js'></script>
    <script type='text/javascript' src={{ asset('js/libs/retina.min.js') }} id='retina-js'></script>
    <script type='text/javascript' src={{ asset('js/pop-widget.js') }} id='superowly_popular-widget-js'></script>
    <script type='text/javascript' src={{ asset('js/core.min.js') }} id='jquery-ui-core-js'></script>
    <script type='text/javascript' src={{ asset('js/tabs.min.js') }} id='jquery-ui-tabs-js'></script>
    <script type='text/javascript' src={{ asset('js/jquery.arcticmodal-0.3.min.js') }} id='jquery-arcticmodal-js'></script>
    <script type='text/javascript' src={{ asset('js/fancybox/helpers/jquery.fancybox.pack.js') }} id='fancybox-js'>
    </script>
    <script type='text/javascript' src={{ asset('js/fancybox/helpers/jquery.fancybox-thumbs.js') }}
        id='fancybox-thumbs-js'></script>
    <script type='text/javascript' src={{ asset('js/fancybox/helpers/jquery.fancybox-buttons.js') }}
        id='fancybox-buttons-js'></script>
    <script type='text/javascript' src={{ asset('js/fancybox/helpers/jquery.fancybox-media.js') }} id='fancybox-media-js'>
    </script>
    <script type='text/javascript' src={{ asset('js/jquery.scrollTo.min.js') }} id='jquery-scrollTo-js'></script>
    <script type='text/javascript' src={{ asset('js/owl.carousel.min.js') }} defer></script>
    <script type='text/javascript' src={{ asset('js/jquery.queryloader2.js') }} id='jquery-queryloader2-js'></script>
    <script type='text/javascript' src={{ asset('js/superowly.plugins.js') }} id='superowly-plugins-js'></script>
    <script type='text/javascript' src={{ asset('js/superowly.core.js') }} id='superowly-core-js'></script>
    <script type='text/javascript' src={{ asset('js/js_composer_front.min.js') }} id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' src={{ asset('js/audioplayer.js') }} id='audioplayer-js'></script>

    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err +=
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err +=
                    "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                var slider = document.getElementById(sliderID);
                slider.innerHTML = err;
                slider.style.display = "block";
            }
        }
    </script>

    <script type='text/javascript' id='wc-cart-fragments-js-after'>
        jQuery('body').bind('wc_fragments_refreshed', function() {
            var jetpackLazyImagesLoadEvent;
            try {
                jetpackLazyImagesLoadEvent = new Event('jetpack-lazy-images-load', {
                    bubbles: true,
                    cancelable: true
                });
            } catch (e) {
                jetpackLazyImagesLoadEvent = document.createEvent('Event')
                jetpackLazyImagesLoadEvent.initEvent('jetpack-lazy-images-load', true, true);
            }
            jQuery('body').get(0).dispatchEvent(jetpackLazyImagesLoadEvent);
        });
    </script>

</body>

</html>

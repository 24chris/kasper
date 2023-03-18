<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kasper Academy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style> --}}

        {{-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
        



{{-- Start of superowly css --}}
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1506515745766{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1511011361412{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1506583786917{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1506583915675{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1513249637521{padding-top: 90px !important;padding-bottom: 90px !important;background: #ffbd0a url(https://velikorodnov.com/wordpress/superowly/wp-content/uploads/2017/08/1920x211_bg-2.png?id=765) !important;}.vc_custom_1511001651811{padding-top: 50px !important;padding-bottom: 50px !important;}.vc_custom_1506586626297{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 90px !important;padding-bottom: 90px !important;background-color: #f6f6f6 !important;}.vc_custom_1506515782918{margin-top: -100px !important;}.vc_custom_1512381012153{margin-bottom: 25px !important;padding-bottom: 0px !important;}.vc_custom_1513249392434{margin-bottom: 50px !important;padding-bottom: 0px !important;}.vc_custom_1506585943636{padding-top: 70px !important;}.vc_custom_1506586264341{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
{{-- <link rel='stylesheet' id='validate-engine-css-css'  href={{asset('css/validationEngine.jquery.css?ver=2.21')}} type='text/css' media='all' />
<link rel='stylesheet' id='sbi_styles-css'  href={{asset('css/sbi-styles.min.css?ver=6.0.8')}} type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href={{asset('css/js_composer.min.css?ver=6.6.0')}} type='text/css' media='all' />
<link rel='stylesheet' id='superowly_js_composer_front-css'  href={{asset('css/css_composer_front.css?ver=6.6.0')}} type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href={{asset('css/dist/block-library/style.min.css?ver=6.0.3')}} type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css'  href={{assest('')}}'https://velikorodnov.com/wordpress/superowly/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=9.4.3' type='text/css' media='all' /> --}}
{{-- <link rel='stylesheet' id='wc-blocks-style-css'  href={{assest('')}}'https://velikorodnov.com/wordpress/superowly/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=9.4.3' type='text/css' media='all' /> --}}

<link rel='stylesheet'   href={{asset('css/style.css')}} type='text/css' media='all' />
<link rel='stylesheet' href={{asset('css/minified.css')}} type='text/css' media='all'/>
<link rel='stylesheet' href={{asset('css/bootstrap.min.css')}} type='text/css' media='all'/>
<link rel='stylesheet' href={{asset('css/fontello.css')}} type='text/css' media='all'/>
{{-- <link rel='stylesheet' href={{asset('css/jquery.arcticmodal.css')}} type='text/css' media='all'/> --}}
<link rel='stylesheet' href={{asset('css/skin.css')}} type='text/css' media='all'/>
<link rel='stylesheet' href={{asset('css/upcomm.css')}} type='text/css' media='all'/>
<link rel='stylesheet' href={{asset('css/curriculum.css')}} type='text/css' media='all'/>
<link rel='stylesheet'  id='fancybox-css' href={{asset('js/fancybox/helpers/jquery.fancybox.css')}} type='text/css' />
<link rel='stylesheet' id='fancybox-buttons-css' href={{asset('js/fancybox/helpers/jquery.fancybox-button.css')}} type='text/css' />
<link rel='stylesheet' id='fancybox-thumbs-css' href={{asset('js/fancybox/helpers/jquery.fancybox-thumbs.css')}} type='text/css' /> 







{{-- End of superowly css --}}

        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div id="app">
                {{-- <example-component></example-component> --}}
                <welcome-component></welcome-component>
                {{-- <router-view></router-view> --}}
            </div>

           


        </div>
       
        <script type='text/javascript' href={{asset('js/fancybox/helpers/jquery.fancybox-pack.js')}} id='fancybox-js'></script>
        <script type='text/javascript' href={{asset('js/fancybox/helpers/jquery.fancybox-buttons.js')}} id='fancybox-buttons-js'></script>
        <script type='text/javascript' href={{asset('js/fancybox/helpers/jquery.fancybox-media.js')}} id='fancybox-media-js'></script>
        <script type='text/javascript' href={{asset('js/fancybox/helpers/jquery.fancybox-thumbs.js')}} id='fancybox-thumbs-js'></script>
        <script type='text/javascript' href={{asset('js/libs/jquery.modernizer.js')}} id='modernizr-js'></script>
        <script type='text/javascript' href={{asset('js/audioplayer.js')}} id='audioplayer-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.arctic-modal.js')}} id='jquery-arcticmodal-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.localscroll.min.js')}} id='jquery-localScroll-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.queryloader.js')}} id='jquery-queryloader2-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.scrollTo.min.js')}} id='jquery-scrollTo-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.superowly.core.js')}} id='superowly-core-js'></script>
        <script type='text/javascript' href={{asset('js/jquery.superowly.plugin.js')}} id='superowly-plugins-js'></script>
    </body>
</html>
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../">
    <title>Laravel</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    {{-- @guest
    @if (Route::has('login'))
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    @endif
    @else
    <link
        href="assets/plugins/global/{{auth()->user()->hitam == '1' ? 'plugins.dark.bundle.css' :'plugins.bundle.css'}} "
        rel="stylesheet" type="text/css" />
    <link href="assets/css/{{auth()->user()->hitam == '1' ? 'style.dark.bundle.css' :'style.bundle.css'}}"
        rel="stylesheet" type="text/css" />
    @endguest --}}
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
@guest
@if (Route::has('login'))

<body id="kt_body" class="bg-body">
    @endif
    @else

    <body id="kt_body" class="{{auth()->user()->hitam == '1' ? 'bg-dark' :'bg-body'}}">

        @endguest
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Signup Welcome Message -->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                    <!--begin::Logo-->
                    @guest
                    @if (Route::has('login'))
                    <form action="{{ route('login') }}" class="form-inline" role="form">
                        <div class="text-center">
                            <a href="{{ route('login') }}"
                                class="btn btn-outline  btn-outline-primary fw-bolder">Login</a>
                        </div>
                    </form>
                    @endif
                    @else
                    <form action="{{ route('home') }}" class="form-inline" role="form">
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="btn btn-outline btn-outline-primary fw-bolder">Go to
                                homepage</a>
                        </div>
                    </form>

                    @endguest
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="pt-lg-5 mb-5">
                        {{--
                        <!--begin::Logo-->
                        <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Welcome to Metronic</h1>
                        <!--end::Logo-->
                        <!--begin::Message-->
                        <div class="fw-bold fs-3 text-muted mb-15">Plan your blog post by choosing a topic creating
                            <br />an outline and checking facts.
                        </div>
                        <!--end::Message--> --}}
                        <div class="tns tns-default">
                            <!--begin::Slider-->
                            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                                data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                                data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                                data-tns-prev-button="#kt_team_slider_prev1"
                                data-tns-next-button="#kt_team_slider_next1">
                                <!--begin::Item-->
                                <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                    <img src="assets/media/product-demos/demo1.png" class="card-rounded shadow mw-100"
                                        alt="" />
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                    <img src="assets/media/product-demos/demo2.png" class="card-rounded shadow mw-100"
                                        alt="" />
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                    <img src="assets/media/product-demos/demo4.png" class="card-rounded shadow mw-100"
                                        alt="" />
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                    <img src="assets/media/product-demos/demo5.png" class="card-rounded shadow mw-100"
                                        alt="" />
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Slider-->
                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                                <span class="svg-icon svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Slider button-->
                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Slider button-->
                        </div>
                        <!--begin::Action-->


                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Illustration-->
                    {{-- <div
                        class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url(assets/media/illustrations/sketchy-1/17.png"></div> --}}
                    <!--end::Illustration-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-column-auto p-10">
                    <!--begin::Links-->
                    <div class="d-flex align-items-center fw-bold fs-6">
                        <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                        <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                        <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact
                            Us</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Authentication - Signup Welcome Message-->
        </div>
        <!--end::Main-->
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->

</html>

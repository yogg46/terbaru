<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title> {{ $tittle }} </title>
    {{--
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> --}}
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" />


    {{--
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if (auth()->user()->hitam==0)
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    @else
    <link href="/assets/plugins/global/plugins.dark.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.dark.bundle.css" rel="stylesheet" type="text/css" />

    @endif


    @livewireStyles
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->



        <div class="page d-flex flex-row flex-column-fluid">

            @include('layout.sidebar')

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('layout.header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">


                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark  text-capitalize fw-bolder fs-3 my-1">
                                    {{ $tittle }}
                                    <!--begin::Separator-->
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->

                                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        @if ($tittle == "project" )
                                        <li class="breadcrumb-item text-muted  text-dark"><a
                                                class="text-muted text-hover-primary" href="/projects/{{$sluk3}}">{{
                                                $slug }} </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                        </li>
                                        <li class="breadcrumb-item text-muted  text-dark">{{ $slug2 }}</li>
                                        @endif

                                        <li class="breadcrumb-item text-muted  text-dark">{{ $slug }}</li>
                                        <!--end::Item-->
                                    </ul>
                                    {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ $tittle }} </small> --}}
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->

                            <div class="d-flex align-items-center py-1">
                                @if ($tittle == "client" )
                                <a href="/client" class="btn btn-light-primary btn-sm"> Back</a>
                                @endif
                                @if ($tittle == "projects" )
                                <a href="/projects" class="btn btn-light-primary btn-sm"> Back</a>
                                @endif
                                @if ($tittle == "project" )
                                <a href="/projects/{{$sluk3}}" class="btn btn-light-primary btn-sm"> Back</a>
                                @endif
                                @if ($tittle == "report" )
                                <a href="/report" class="btn btn-light-primary btn-sm"> Back</a>
                                @endif
                                @if ($tittle == "modul" )
                                <a href="/projects/{{$slug2}}" class="btn btn-light-primary btn-sm"> Back</a>
                                @endif

                            </div>

                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>



                    {{-- <div class="page-header">
                        <h1>{{ $tittle }} <small> <span class="text-primary"> </span></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"> {{ $tittle }} </li>
                        </ol>
                    </div> --}}


                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--START: Content Wrap-->
                        <div id="kt_content_container" class="container-xxl">



                            @yield('isi_page')


                        </div>
                    </div>
                    <!--END: Content Wrap-->

                </div> <!-- END: Main Container -->

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="/" target="_blank" class="text-gray-800 text-hover-primary">Politeknik Negeri
                                Madiun</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="/" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="/" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="/" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
            </div> <!-- END: wrapper -->





        </div>

        <!--end::Page-->
    </div>



    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->



    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>



    <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="/assets/js/custom/widgets.js"></script>
    {{-- <script src="/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/assets/js/custom/modals/create-app.js"></script>
    <script src="/assets/js/custom/modals/upgrade-plan.js"></script> --}}
    {{-- <script src="/assets/js/custom/apps/customers/add.js"></script> --}}
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    {{-- <script src="/assets/js/custom/widgets.js"></script> --}}
    <script src="/assets/js/custom/apps/customers/list/list.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    {{-- <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}
    <script src="/assets/js/custom/widgets.js"></script>
    @livewireScripts
    @include('sweetalert::alert')
    <script>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
            )
        });
    </script>
    {{-- @include('livewire.projects.chart') --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    {{-- <script src="/assets/js/custom/pages/projects/project/project.js"></script> --}}



    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

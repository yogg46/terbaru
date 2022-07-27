<div id="kt_aside" class="aside {{ auth()->user()->hitam == '1' ? 'aside-dark' : 'aside-light' }} aside-hoverable"
    data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/">
            <img alt="Logo" src="/assets/media/pnm.png " class="h-25px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="black" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                {{-- <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                    </div>
                </div> --}}
                <div class="menu-item">
                    <a class="menu-link {{ $tittle == 'Dashboard' ? 'active' : '' }}" href="/home">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->


                            <i class="bi bi-grid-fill fs-2"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                @if (Auth::user()->role == 1)
                    <div class="menu-item ">
                        <a class="menu-link {{ $tittle == 'Karyawan' || $tittle == 'karyawan' ? 'active' : '' }}"
                            href="/karyawan">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                <i class="bi bi-people-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Karyawan</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role == 3)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Client' || $tittle == 'client' ? 'active' : '' }}"
                            href="/client">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <i class="bi bi-briefcase-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Client</span>
                        </a>
                    </div>
                @endif

                @if (Auth::user()->role == 2 || Auth::user()->role == 3 || Auth::user()->role == 4 || Auth::user()->role == 5)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Projects' || $tittle == 'projects' || $tittle == 'project' ? 'active' : '' }}"
                            href="/projects">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
                                <i class="bi bi-stickies-fill fs-2 "></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Projects</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role == 5)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Modul' || $tittle == 'modul' ? 'active' : '' }}"
                            href="/modul">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                <i class="bi bi-sticky-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Modul</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role == 4 || Auth::user()->role == 5)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Bug Report' || $tittle == 'Bug report' ? 'active' : '' }}"
                            href="/bug-report">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                <i class="bi bi-bug-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Bug Report</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role == 4)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Trial Error' || $tittle == 'Trial eror' ? 'active' : '' }}"
                            href="/trial-error">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                <i class="bi bi-file-earmark-check-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Trial Error</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role == 2 || Auth::user()->role == 3 || Auth::user()->role == 4 || Auth::user()->role == 5)
                    <div class="menu-item">
                        <a class="menu-link {{ $tittle == 'Report' || $tittle == 'report' ? 'active' : '' }}"
                            href="/report">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                <i class="bi bi-file-text-fill fs-2"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Report</span>
                        </a>
                    </div>
                @endif
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    {{-- <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="{{route('logout')}}" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip"
            data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">

            <span class="btn-label">Docs &amp; Components</span>

            <span class="svg-icon btn-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3"
                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                        fill="black" />
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                </svg>
            </span>

        </a>
    </div> --}}
    <!--end::Footer-->
</div>

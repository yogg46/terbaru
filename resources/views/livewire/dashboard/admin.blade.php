
<div class="row g-5 g-xl-8">

    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="/karyawan" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">

                <div class="d-flex align-items-center " >
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black"/>
                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black"/>
                        </svg></span>
                    <div class="text-white fs-1 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$tot}}" data-kt-countup-prefix="">0</div>
                    </div>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total User</div>


            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="/karyawan" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <div class="d-flex align-items-center " >
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"/>
                            <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"/>
                            </svg></span>
                    </span>
                    <div class="text-white fs-1 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$act}}" data-kt-countup-prefix="">0</div>
                    </div>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">User Active</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>

    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="/karyawan" class="card card-flush bg-danger hoverable card-xl-stretch mb-xl-8">

            <!--begin::Body-->
            <div class="card-body ">



                <div class="d-flex align-items-center " >
                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                    </svg>
                </span>
                <div class="text-white fs-1 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$sus}}" data-kt-countup-prefix="">0</div>
                </div>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">User Suspended</div>
                {{-- <div class="fw-bold text-white">Lands, Houses, Ranchos, Farms</div> --}}
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>


<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Mixed Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Sales Overview</span>
                    <span class="text-muted fw-bold fs-7">Recent sales statistics</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61322d25a481d">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61322d25a481d" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column">
                <!--begin::Stats-->
                <div class="card-p pt-5 bg-body flex-grow-1">
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col mr-8">
                            <!--begin::Label-->
                            <div class="fs-7 text-muted fw-bold">Average Sale</div>
                            <!--end::Label-->
                            <!--begin::Stat-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bolder">$650</div>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Label-->
                            <div class="fs-7 text-muted fw-bold">Commission</div>
                            <!--end::Label-->
                            <!--begin::Stat-->
                            <div class="fs-4 fw-bolder">$233,600</div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-0 mt-8">
                        <!--begin::Col-->
                        <div class="col mr-8">
                            <!--begin::Label-->
                            <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                            <!--end::Label-->
                            <!--begin::Stat-->
                            <div class="fs-4 fw-bolder">$29,004</div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Label-->
                            <div class="fs-7 text-muted fw-bold">Annual Income</div>
                            <!--end::Label-->
                            <!--begin::Stat-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bolder">$1,480,00</div>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
                <!--begin::Chart-->
                <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Mixed Widget 4-->
        <div class="card card-xl-stretch">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Action Needed</span>
                    <span class="text-muted fw-bold fs-7">Complete your profile setup</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61322d25a4f1e">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61322d25a4f1e" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <div class="flex-grow-1">
                    <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 225px"></div>
                </div>
                <div class="pt-5">
                    <p class="text-center fs-6 pb-5">
                    <span class="badge badge-light-danger fs-8">Notes:</span>&#160; Current sprint requires stakeholders
                    <br />to approve newly amended policies</p>
                    <a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 4-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Mixed Widget 5-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                    <span class="text-muted fw-bold fs-7">Latest trends</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <!--begin::Chart-->
                <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="danger" style="height: 150px"></div>
                <!--end::Chart-->
                <!--begin::Items-->
                <div class="mt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-3">
                                <div class="symbol-label bg-light">
                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
                                <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-3">
                                <div class="symbol-label bg-light">
                                    <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
                                <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-3">
                                <div class="symbol-label bg-light">
                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="py-1">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
                                <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Label-->
                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 5-->
    </div>
    <!--end::Col-->
</div>

<div class="card card-flush pt-3 mb-5 mb-lg-10">

    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title">
            <h2 class="fw-bolder">Admin</h2>
        </div>
        <!--begin::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Description-->
        <div class="text-gray-500 fw-bold fs-5 mb-5">Select or add a customer to a subscription:</div>


    </div>
</div>


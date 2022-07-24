<div>
    @php
        $no = 1;
        $no1 = 1;
        $no2 = 1;
    @endphp
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-15">
            <!--begin::Classic content-->
            <div class="mb-13">
                <!--begin::Intro-->
                <div class="mb-15">
                    <!--begin::Title-->
                    <h4 class="fs-2x text-gray-800 w-bolder mb-1">{{ $project->nama_project }}</h4>
                    <h5 class="fs-4 text-gray-600 w-bolder mb-3"> Nomor :
                        {{ $project->ClientToProject->client_id . '-' . $project->no_project }}</h5>

                    <!--end::Title-->
                    <!--begin::Text-->
                    <p class="fw-bold fs-4 text-gray-600 mb-2">{{ $project->deskripsi_project }}</p>
                    <!--end::Text-->
                </div>
                <!--end::Intro-->
                <!--begin::Row-->
                <div class="row mb-12">
                    <!--begin::Col-->
                    <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                        <!--begin::Title-->
                        <h2 class="text-gray-800 fw-bolder mb-4">Team</h2>
                        <!--end::Title-->
                        <!--begin::Accordion-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#kt_job_4_1" aria-expanded="false">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon toggle-off svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2"
                                                rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black">
                                            </rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Marketing</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_4_1" class="fs-6 ms-1 collapse" style="">
                                <!--begin::Text-->
                                <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">
                                    1. {{ $project->MarketingToProject->name }}</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#kt_job_4_2" aria-expanded="false">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon toggle-off svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2"
                                                rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Leader
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_4_2" class="fs-6 ms-1 collapse" style="">
                                <!--begin::Text-->
                                <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">
                                    @if (!is_null($project->LeaderToProject))
                                        1. {{ $project->LeaderToProject->name }}
                                    @endif
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#kt_job_4_3" aria-expanded="false">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon toggle-off svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2"
                                                rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Programer</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_4_3" class="fs-6 ms-1 collapse" style="">
                                <!--begin::Text-->
                                <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">
                                    @foreach ($pro1 as $key)
                                        @foreach ($key as $item)
                                            {{ $no++ . '. ' . $item->ModulProgramer->name }} <br>
                                            @if ($item->ModulProgramer->name == $item->ModulProgramer->name)
                                            @break
                                        @endif
                                    @endforeach
                                @endforeach

                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->

                    <!--end::Section-->
                    <!--end::Accordion-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 ps-md-10">
                    <!--begin::Title-->
                    <h2 class="text-gray-800 fw-bolder mb-4">Status</h2>
                    <!--end::Title-->
                    <!--begin::Accordion-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_5_1" aria-expanded="false">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Status Project
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_5_1" class="fs-6 ms-1 collapse" style="">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 text-capitalize fw-bold fs-6 ps-10">
                                {{ $project->status == 1 ? 'Project baru' : ($project->status == 2 ? 'On progres' : ($project->status == 3 ? 'Bug report' : ($project->status == 4 ? 'Trial error' : ($project->status == 5 ? 'Revisi' : 'realese')))) }}
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_5_2" aria-expanded="false">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Level Project
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_5_2" class="fs-6 ms-1 collapse" style="">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 text-capitalize fw-bold fs-6 ps-10">
                                {{ $project->level == 1 ? 'urgent' : ($project->level == 2 ? 'medium' : 'low') }}
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_5_3" aria-expanded="false">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Kategori Project</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_5_3" class="fs-6 ms-1 collapse" style="">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 fw-bold text-capitalize fs-6 ps-10">
                                {{ $project->kategori == 1 ? 'web' : ($project->kategori == 2 ? 'desktop' : 'android') }}
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->

                    <!--end::Section-->
                    <!--end::Accordion-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                    <!--begin::Title-->
                    <h2 class="text-gray-800 w-bolder mb-4">Date</h2>
                    <!--end::Title-->
                    <!--begin::Accordion-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_6_1" aria-expanded="false">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Tanggal Dibuat</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_6_1" class="fs-6 ms-1 collapse" style="">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ $project->tgl_buat }}</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_6_2">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Deadline</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_6_2" class="collapse fs-6 ms-1">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ $project->tgl_deadline }}
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_6_3">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Trial</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_6_3" class="collapse fs-6 ms-1">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ $project->tgl_trial }}</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                            data-bs-toggle="collapse" data-bs-target="#kt_job_6_4">
                            <!--begin::Icon-->
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="5" fill="black"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2"
                                            rx="1" transform="rotate(-90 10.8891 17.8033)"
                                            fill="black"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2"
                                            rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Release</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div id="kt_job_6_4" class="collapse fs-6 ms-1">
                            <!--begin::Text-->
                            <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">{{ $project->tgl_release }}</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Section-->
                    <!--end::Accordion-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 ps-md-10">
                    <!--begin::Title-->
                    <h2 class="text-gray-800 fw-bolder mb-4">Modul</h2>
                    <!--end::Title-->
                    <!--begin::Accordion-->
                    <!--begin::Section-->
                    @foreach ($project->projectModul as $item)
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="{{ '#kt_job_7_' . $no2++ }}"
                                aria-expanded="false">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon toggle-off svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="5" fill="black"></rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2"
                                                rx="1" transform="rotate(-90 10.8891 17.8033)"
                                                fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0"> {{ $item->nama }}

                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="{{ 'kt_job_7_' . $no1++ }}" class="fs-6 ms-1 collapse" style="">
                                <!--begin::Text-->
                                <div class="mb-4 text-gray-600 fw-bold fs-6 ps-10">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <span wire:ignore.self class="text-muted me-2 fs-7 fw-bold"
                                                data-kt-countup="true"
                                                data-kt-countup-value="{{ $item->progres }}"
                                                data-kt-countup-suffix="%">
                                                {{ $item->progres }}%</span>
                                        </div>
                                        <div class="progress h-6px w-100">
                                            <div wire:ignore.self class="progress-bar bg-primary"
                                                role="progressbar" style="width:0%"
                                                aria-valuenow="{{ $item->progres }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                    @endforeach
                    <!--end::Section-->
                    <!--begin::Section-->

                    <!--end::Section-->
                    <!--end::Accordion-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Classic content-->
        <!--begin::Section-->

        <!--end::Section-->
        <!--begin::Card-->
        <div class="card mb-4 bg-light text-center">
            <!--begin::Body-->
            <div class="card-body py-12">
                <!--begin::Icon-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-7">
                        <!--begin::Heading-->
                        <h2 class="text-gray-800 w-bolder mt-8">Client : <a
                                href="/client/{{ $project->ClientToProject->slug }}">{{ $project->ClientToProject->nama }}</a>
                        </h2>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-5">
                        <!--begin::Heading-->
                        <div class="d-flex text-muted fw-bolder fs-5 mb-3">
                            <span class="flex-grow-1 text-gray-800">Total Progres</span>

                        </div>
                        <!--end::Heading-->
                        <!--begin::Progress-->
                        <div class="progress h-8px bg-light-primary mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width:0%"
                                aria-valuenow="{{ $project->total_progres }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Description-->
                        <div wire:ignore.self class="fs-6 text-gray-600 fw-bold mb-10"data-kt-countup="true"
                            data-kt-countup-value="{{ $project->total_progres }}" data-kt-countup-suffix="%">
                            0</div>
                        <!--end::Description-->
                        <!--begin::Action-->

                        <!--end::Action-->
                    </div>
                    <!--end::Col-->
                </div>



                <!--end::Icon-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Body-->
</div>
</div>

<div class="card card-flush pt-3 mb-5 mb-lg-10">
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title">
            <h2 class="fw-bolder"> Project Manager </h2>
        </div>
        <!--begin::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Description-->
        <div class="text-gray-500 fw-bold fs-5 mb-5">Welcome {{ Auth::user()->name }}</div>
    </div>

</div>

<div class="card card-flush mt-6 mt-xl-9">
    <!--begin::List Widget 6-->
    <div class="card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0">
            <h3 class="card-title fw-bolder text-dark">Bug baru</h3>
        </div>

        <div class="card-body pt-0">
            <!--begin::Item-->
            @foreach ($bug_pro as $key)
                <div class="d-flex align-items-center bg-light-primary rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-primary me-5">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                    fill="black"></path>
                                <path
                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                    fill="black"></path>
                            </svg>
                        </span>

                    </span>

                    <div class="flex-grow-1 me-2">
                        <a href="/bug-report/{{ $key->BugProject->slug }}"
                            class="fw-bolder text-gray-800 text-hover-primary fs-6">{{ $key->nama }}</a>
                        <span class="text-muted fw-bold d-block">Deadline :
                            {{ date('d-m-Y', strtotime($key->deadline)) }}
                        </span>
                    </div>

                    <a href="/bug-report/{{ $key->BugProject->slug }}"
                        class="btn btn-sm btn-icon btn-bg-white btn-active-color-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                    rx="1" transform="rotate(-180 18 13)" fill="black">
                                </rect>
                                <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>

                </div>
            @endforeach

        </div>
    </div>

</div>
<div class="card card-flush mt-6 mt-xl-9">
    <!--begin::List Widget 3-->
    <div class="card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0">
            <h3 class="card-title fw-bolder text-dark">Modul Baru</h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
            <!--begin::Item-->
            @foreach ($mod_pro as $item)
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-2">
                        {{-- <input class="form-check-input" type="checkbox" value=""> --}}
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="/modul/{{ $item->slug }}"
                            class="text-gray-800 text-hover-primary fw-bolder fs-6">{{ $item->nama }}</a>
                        <span class="text-muted fw-bold d-block">Deadline : {{ $item->deadline }}</span>
                    </div>
                    <!--end::Description-->
                    <a href="/modul/{{ $item->slug }}"
                        class="btn btn-sm btn-icon btn-light-success btn-active-color-success">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                    rx="1" transform="rotate(-180 18 13)" fill="black">
                                </rect>
                                <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>

                {{-- @endempty --}}
            @endforeach

        </div>
        <!--end::Body-->
    </div>
    <!--end:List Widget 3-->
</div>

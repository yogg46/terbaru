<div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <!--begin::Image-->
                        <div
                            class="d-flex flex-center symbol symbol-150px flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                            <span class="symbol-label bg-info fs-5tx text-inverse-warning fw-bolder">
                                @if (!is_null($project))
                                    {{ Str::substr($project->nama_project, 0, 2) }}
                                @endif

                            </span>

                        </div>
                        <!--end::Image-->
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1">
                            <!--begin::Head-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap ">
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center mb-1">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary  fs-2 fw-bolder me-3 text-capitalize">
                                            {{ $project->nama_project }}
                                        </a>
                                        {{-- <span
                                            class="badge {{ $project->level == 1 ? ' badge-light-danger' : ($project->level == 2 ? 'badge-light-warning' : 'badge-light-success') }} me-auto">
                                            {{ $project->level == 1 ? 'Urgent' : ($project->level == 2 ? 'Medium' : 'Low') }}
                                        </span> --}}
                                    </div>
                                    <!--end::Status-->
                                    <!--begin::Description-->
                                    <div class="d-flex flex-wrap fw-bold mb-1  fs-6 text-gray-400">
                                        {{ $project->ClientToProject->client_id . '-' . $project->no_project }}
                                        <br>
                                        {{ $project->deskripsi_project }}

                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Actions-->
                                <div class="d-flex mb-4">
                                    {{-- @if ($project->status == 1)
                                        <div class="me-0">
                                            <a href=""
                                                class=" btn btn-sm btn-bg-light btn-active-color-primary  ">
                                                ambil
                                            </a>
                                        </div>
                                    @endif --}}
                                    <!--begin::Menu-->
                                    @if (Auth::user()->role == 3)
                                        <div class="me-0">
                                            <a href="/project/edit/{{ $project->slug }}"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span> </a>
                                        </div>
                                    @endif

                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Head-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->

                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-info border-dashed  bg-light-info rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->

                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <a href="/client/{{ $project->ClientToProject->slug }}"
                                                class="fw-bold text-hover-dark fs-6 text-info">
                                                {{ $project->ClientToProject->nama }} </a>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-bold fs-6 text-gray-400">Progress Project</span>
                                        <span class="fw-bolder fs-6">{{ $project->total_progres }}%</span>
                                    </div>
                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div wire:ignore class="bg-success progress-bar rounded h-5px"
                                            role="progressbar" style="width: {{ $project->total_progres }}%;"
                                            aria-valuenow="{{ $project->total_progres }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Details-->
                    <div class="separator"></div>
                    <!--begin::Nav wrapper-->
                    {{-- <div class="d-flex overflow-auto h-55px">
                        <!--begin::Nav links-->
                        <ul
                            class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active" href="/">Overview</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Targets</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Budget</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Users</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Files</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Activity</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="/">Settings</a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--end::Nav links-->
                    </div> --}}
                    <!--end::Nav wrapper-->
                </div>
            </div>
            <!--end::Card-->
        </div>



        <!--end::Container-->
    </div>
    <div class="container-xxl">
        <div class="row g-xxl-9">
            <!--begin::Col-->
            <div class="col-xxl-8">
                <!--begin::Security summary-->
                <div class="card card-xxl-stretch mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-900">Modul</h3>
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-7 pb-0 px-0">
                        <!--begin::Tab content-->
                        <div class=" me-9 ms-9">


                            <table class="table  align-middle gs-0 gy-9">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-200px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-40px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($project->projectModul as $item)
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <span
                                                            class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                            {{ Str::substr($item->nama, 0, 2) }}

                                                        </span>
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="/report/{{ $item->slug }}"
                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->nama }}</a>
                                                <span
                                                    class="text-muted fw-bold d-block fs-7">{{ $item->ModulProgramer->name }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span wire:ignore class="text-muted me-2 fs-7 fw-bold"
                                                            data-kt-countup="true"
                                                            data-kt-countup-value="{{ $item->progres }}"
                                                            data-kt-countup-suffix="%">
                                                            0</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div wire:ignore.self class="progress-bar bg-primary"
                                                            role="progressbar" style="width:0%"
                                                            aria-valuenow="{{ $item->progres }}" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                @if (Auth::user()->id == $item->programer || Auth::user()->role == 1)
                                                    <a href="/modul/{{ $item->slug }}"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black">
                                                                </rect>
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Security summary-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div wire:ignore class="col-xxl-4">
                <!--begin::Security recent alerts-->
                <div class="card card-xxl-stretch-20 mb-5 mb-xl-10">
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Carousel-->
                        <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide"
                            data-bs-ride="carousel" data-bs-interval="8000">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack align-items-center flex-wrap">
                                <h4 class="text-gray-400 fw-bold mb-0 pe-2">Status</h4>
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0"
                                        class="ms-1">
                                    </li>
                                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1"
                                        class="ms-1">
                                    </li>
                                    <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2"
                                        class="ms-1 active" aria-current="true"></li>
                                </ol>
                                <!--end::Carousel Indicators-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Carousel inner-->
                            <div class="carousel-inner pt-6">
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="carousel-wrapper">
                                        <!--begin::Description-->
                                        <div
                                            class="card {{ $project->status == 1
                                                ? 'bg-blue'
                                                : ($project->status == 2
                                                    ? 'bg-yellow'
                                                    : ($project->status == 3
                                                        ? 'bg-pink'
                                                        : ($project->status == 4
                                                            ? 'bg-indigo'
                                                            : ($project->status == 5
                                                                ? 'bg-cyan'
                                                                : 'bg-teal')))) }} hoverable ms-2 me-2 card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                                <i class="bi bi-activity text-white fs-3x"></i>

                                                <!--end::Svg Icon-->
                                                <div class="text-white fw-bolder fs-2 mb-1 mt-5">
                                                    {{ $project->status == 1
                                                        ? 'Project baru'
                                                        : ($project->status == 2
                                                            ? 'On progres'
                                                            : ($project->status == 3
                                                                ? 'Bug report'
                                                                : ($project->status == 4
                                                                    ? 'Trial error'
                                                                    : ($project->status == 5
                                                                        ? 'Revisi'
                                                                        : 'Realese')))) }}
                                                </div>
                                                <div class="fw-bold text-white">Status Project</div>
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item active carousel-item-start">
                                    <!--begin::Wrapper-->
                                    <div class="carousel-wrapper">
                                        <!--begin::Description-->
                                        <div
                                            class="card {{ $project->kategori == 1 ? 'bg-info' : ($project->kategori == 2 ? 'bg-primary' : 'bg-success') }} hoverable ms-2 me-2 card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                                <i
                                                    class="bi  {{ $project->kategori == 1 ? 'bi-cloud' : ($project->kategori == 2 ? 'bi-laptop' : 'bi-phone-fill') }} text-white fs-3x"></i>

                                                <!--end::Svg Icon-->
                                                <div class="text-white fw-bolder fs-2 mb-1 mt-5">
                                                    {{ $project->kategori == 1 ? 'Web' : ($project->kategori == 2 ? 'Desktop' : 'Mobile') }}
                                                </div>
                                                <div class="fw-bold text-white">Kategori Project</div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Summary-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item carousel-item-next  carousel-item-start">
                                    <!--begin::Wrapper-->
                                    <div
                                        class="card {{ $project->level == 1 ? 'bg-danger' : ($project->level == 2 ? 'bg-warning' : 'bg-success') }} hoverable ms-2 me-2 card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                            <i
                                                class="bi {{ $project->level == 1 ? 'bi-layers-fill' : ($project->level == 2 ? 'bi-layers-half' : 'bi-layers') }} text-white fs-3x"></i>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bolder fs-2 mb-1 mt-5">
                                                {{ $project->level == 1 ? 'Urgent' : ($project->level == 2 ? 'Medium' : 'Low') }}
                                            </div>
                                            <div class="fw-bold text-white">
                                                Level Project
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Carousel inner-->
                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Security recent alerts-->
                <!--begin::Security guidelines-->
                <div class="card card-xxl-stretch-80 mb-5 mb-xl-10">
                    <!--begin::Body-->
                    <div class="card-header">
                        <h4 class="card-title text-gray-400 fw-bold mb-0 pe-2">Team</h4>
                        <div class="card-toolbar">

                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <!--begin::Carousel-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-success">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="symbol-label bg-light-primary text-primary fs-2x  fw-bolder">
                                        @if (!is_null($project))
                                            {{ Str::substr($project->LeaderToProject->name, 0, 2) }}
                                        @endif
                                        {{-- {{ $project->MarketingToProject }} --}}
                                    </span>

                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <span
                                    class="text-dark text-hover-primary fs-6 fw-bolder">{{ $project->LeaderToProject->name }}</span>
                                <span class="text-muted fw-bold">Project Leader</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-success">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="symbol-label bg-light-warning text-warning fs-2x  fw-bolder">
                                        @if (!is_null($project))
                                            {{ Str::substr($project->MarketingToProject->name, 0, 2) }}
                                        @endif
                                        {{-- {{ $project->MarketingToProject }} --}}
                                    </span>

                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <span
                                    class="text-dark text-hover-warning fs-6 fw-bolder">{{ $project->MarketingToProject->name }}</span>
                                <span class="text-muted fw-bold">Marketing</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        @if (!is_null($project->projectModul))
                            @foreach ($project->projectModul as $key)
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-success">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="symbol-label bg-light-danger text-danger fs-2x  fw-bolder">
                                                @if (!is_null($key))
                                                    {{ Str::substr($key->ModulProgramer->name, 0, 2) }}
                                                @endif
                                                {{-- {{ $project->MarketingToProject }} --}}
                                            </span>

                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column">
                                        <span
                                            class="text-dark text-hover-danger fs-6 fw-bolder">{{ $key->ModulProgramer->name }}</span>
                                        <span class="text-muted fw-bold">Programmer</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                            @endforeach
                        @endif
                        <!--end::Carousel-->
                    </div>

                    <!--end::Body-->
                </div>
                <!--end::Security guidelines-->
            </div>
            <!--end::Col-->
        </div>
    </div>

    <button wire:click="cek({{ $project->id }})">
        asdas
    </button>



</div>

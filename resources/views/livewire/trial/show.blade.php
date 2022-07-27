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
                            <span class="symbol-label bg-info fs-5tx text-inverse-warning fw-bolder ">
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
                                    <div wire:ignore.self data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="{{ $project->deskripsi_project }}"
                                        class="d-flex flex-wrap fw-bold mb-1 mb-5 fs-6 text-gray-400">
                                        {{ $project->ClientToProject->client_id . '-' . $project->no_project }}
                                        <br>
                                        {{ Str::substr($project->deskripsi_project, 0, 110) . '...' }}

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

                                    @if ((in_array(Auth::user()->id, $buger) || $project->leader == Auth::user()->id) && $project->status != 6)
                                        <div class="me-0">
                                            <a data-bs-toggle="modal" data-bs-target="#modal_release"
                                                class="btn btn-sm  btn-light-success text-hover-white  btn-active-color-success">
                                                <span class="text-active-white text-hover-white">

                                                    Release
                                                </span>
                                            </a>
                                        </div>

                                        <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_release">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Release</h5>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <span class="svg-icon svg-icon-2x"></span>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin akan merilis {{ $project->nama_project }}
                                                        </p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            wire:click.prefetch="release({{ $project->id }}) "
                                                            class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                    <!--begin::Menu-->


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
                                        <span
                                            class="fw-bolder fs-6">{{ $project->total_progres == 1 ? 0 : $project->total_progres }}%</span>
                                    </div>
                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div wire:ignore.self class="bg-success progress-bar rounded h-5px"
                                            role="progressbar"
                                            style="width: {{ $project->total_progres == 1 ? 0 : $project->total_progres }}%;"
                                            aria-valuenow="{{ $project->total_progres == 1 ? 0 : $project->total_progres }}"
                                            aria-valuemin="0" aria-valuemax="100"></div>
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
                    <div class="card-header ">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-900">Bug</h3>
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        {{-- @json($project->leader) --}}

                        @if (Auth::user()->id == $project->leader)
                            <div wire:ignore.self class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-trigger="hover" title="" data-bs-original-title="Click to add a Modul">
                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_target">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                                                fill="black"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2"
                                                rx="1" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Bug
                                </a>
                            </div>
                        @endif
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
                                    @foreach ($bug as $item)
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2" wire:ignore.self
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deadline : {{ $item->deadline }}">
                                                    <span class="symbol-label">
                                                        <span
                                                            class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                            {{ Str::substr($item->nama, 0, 2) }}

                                                        </span>
                                                    </span>
                                                </div>
                                            </th>
                                            {{-- @dd($item->id) --}}
                                            <td>
                                                <span wire:ignore.self
                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->nama }}</span>
                                                <span
                                                    class="text-muted fw-bold d-block fs-7">{{ $item->BugProgramer->name }}
                                                </span>
                                            </td>
                                            <td>
                                                <span wire:ignore.self
                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->deadline }}</span>
                                                <span class="text-muted fw-bold d-block fs-7">Deadline
                                                </span>
                                            </td>
                                            <td>
                                                <span wire:ignore.self class="text-muted fw-bold d-block  fs-7"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="{{ $item->deskripsi }}">
                                                    {{ Str::substr($item->deskripsi, 0, 10) }}

                                                    {{-- Str::substr($project->deskripsi_project, 0, 110) . '...' --}}
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                <span
                                                    class="text-white  badge badge-danger fw-bolder  mb-1 fs-7">{{ $item->status == 0 ? 'New' : ($item->status == 1 ? 'On Progres' : 'Complated') }}</span>
                                                {{-- <button type="button" wire:click='selesai({{ $item->id }})'
                                                    class="btn btn-primary">Save
                                                    changes</button> --}}
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
            <div class="col-xxl-4">
                <!--begin::Security recent alerts-->
                <div wire:ignore.self class="card card-xxl-stretch-20 mb-5 mb-xl-10">
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
                                    {{-- <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2"
                                        class="ms-1">
                                    </li> --}}
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
                                                                        : 'Release')))) }}
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

                                <div class="carousel-item  carousel-item-next  carousel-item-start">
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


                <div class="card card-xxl-stretch-80 mb-5 mb-xl-10">
                    <!--begin::Body-->
                    <div class="card-header">
                        <h4 class="card-title text-gray-400 fw-bold mb-0 pe-2">Timeline</h4>
                        <div class="card-toolbar">

                        </div>
                    </div>
                    <div class="card-body pt-5">

                        <div class="card bg-warning hoverable ms-2 me-2 card-xl-stretch mb-xl-8">
                            <div class=" card-body">
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-8 text-white fw-bolder lh-1">
                                                    {{ $project->tgl_buat }}</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Dibuat</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 ms-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                                fill="black"></path>
                                                            <path opacity="0.3"
                                                                d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-8 text-white fw-bolder lh-1">
                                                    {{ $project->tgl_deadline }}</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Deadline</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-8 text-white fw-bolder lh-1">
                                                    {{ $project->tgl_trial }}</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Trial Error
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center ms-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z"
                                                                fill="black"></path>
                                                            <path opacity="0.3"
                                                                d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-8 text-white fw-bolder lh-1">
                                                    {{ $project->tgl_release }}</div>
                                                <div class="fs-7 text-gray-600 fw-bold">Release</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-xxl-stretch-20 mb-5 mb-xl-10">
                    <div class="card-header">
                        <h4 class="card-title text-gray-400 fw-bold mb-0 pe-2">Catatan</h4>
                        <div class="card-toolbar">

                        </div>
                    </div>
                    <div class="card-body pt-5">

                        <textarea class="form-control form-control-white rounded-3"
                            {{ Auth::user()->id == $project->leader ? '' : 'readonly' }} placeholder="{{ $project->catatan }}"
                            wire:change="simKet()" wire:model.lazy="catatan" rows="4">

                        </textarea>

                    </div>
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
                        @if (!is_null($project->LeaderToProject))
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="symbol-label bg-light-primary text-primary fs-2x  fw-bolder">
                                            {{ Str::substr($project->LeaderToProject->name, 0, 2) }}

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
                        @endif
                        @if (!is_null($project->MarketingToProject))
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="symbol-label bg-light-warning text-warning fs-2x  fw-bolder">
                                            {{ Str::substr($project->MarketingToProject->name, 0, 2) }}
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
                        @endif

                        @if (!is_null($project->projectModul))
                            @foreach ($pro1 as $item)
                                @foreach ($item as $key)
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fs-2x  fw-bolder">
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
                                    @if ($key->ModulProgramer->name == $key->ModulProgramer->name)
                                    @break
                                @endif
                            @endforeach
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

<!--begin::Modal - New Target-->
<div wire:ignore.self class="modal fade" id="kt_modal_new_target" tabindex="-1" style="display: none;"
    data-select2-id="select2-data-kt_modal_new_target" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px" data-select2-id="select2-data-72-0keh">
        <!--begin::Modal content-->
        <div class="modal-content rounded" data-select2-id="select2-data-71-5p7c">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form wire:submit.prevent="save">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Report a bug</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div
                        class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Bug</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title=""
                                data-bs-original-title="Specify a target name for future usage and reference"
                                aria-label="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input required wire:model="nama" type="text" class="form-control form-control-solid"
                            placeholder="Nama Bug" name="target_title">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <div
                        class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Modul</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title=""
                                data-bs-original-title="Specify a target name for future usage and reference"
                                aria-label="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <select required wire:model.lazy="modul_id" wire:ignore
                            class="form-select form-select-solid " data-placeholder="Select Modul">
                            <option value="">Select Modul...
                            </option>
                            @foreach ($modul as $key)
                                <option value="{{ $key->id }}">{{ $key->nama }}
                                </option>
                            @endforeach

                        </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <!--begin::Col-->
                    {{-- <div class="col-md-6 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                            <label class="required fs-6 fw-bold mb-2">Add Programer</label>
                            <select required wire:model="programer" wire:ignore
                                class="form-select form-select-solid " data-placeholder="Select Programer">
                                <option value="">Select Programer...
                                </option>
                                @foreach ($pro as $key)
                                    <option value="{{ $key->id }}">{{ $key->name }}
                                    </option>
                                @endforeach

                            </select>
                            {{ $modul_id }}
                            {{ $programer }}
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div> --}}
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div
                        class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                        <label class="required fs-6 fw-bold mb-2">Deadline</label>
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->

                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Datepicker-->
                            <input required wire:model="deadline"
                                class="form-control form-control-range form-control-solid" type="date" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2">Description</label>
                        <textarea required wire:model="deskripsi" class="form-control form-control-solid" rows="3"
                            name="target_details" placeholder="Type Bug Details"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" id="kt_modal_new_target_cancel"
                            class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <div></div>
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

@livewireScripts
<script type="text/javascript">
    window.livewire.on('addbug', () => {
        $('#kt_modal_new_target').modal('hide');
    });
    window.livewire.on('release', () => {
        $('#modal_release').modal('hide');
    });
</script>

</div>

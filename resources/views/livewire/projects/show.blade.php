<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message1') }}
        </div>
    @endif
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

                                    @if (Auth::user()->role == 4 && $project->status == 1 && is_null($project->leader))
                                        <div class="me-0">
                                            <a wire:click.prefetch="ambil({{ $project->id }}) "
                                                class="btn btn-sm  btn-bg-light btn-active-color-primary">
                                                Ambil </a>
                                        </div>
                                    @endif


                                    <!--begin::Menu-->
                                    @if (Auth::user()->role == 3)
                                        <div class="me-0">
                                            <button data-bs-target="#modal_edit" data-bs-toggle="modal"
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
                                                </span> </button>
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
                            {{-- {{ $swit }} --}}
                            {{-- <h3 class="m-0 text-gray-900">Modul</h3> --}}
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-4 border-0 fw-bolder" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a wire:click.prevent="swt2()"
                                        class="nav-link justify-content-center text-active-gray-800 {{ $swit == 0 ? 'active' : '' }} "
                                        data-bs-toggle="tab" role="tab">Modul</a>
                                </li>

                                <li class="nav-item active" role="presentation">
                                    <a wire:click.prevent="swt()"
                                        class="nav-link justify-content-center text-active-gray-800 {{ $swit == 1 ? 'active' : '' }}"
                                        data-bs-toggle="tab" role="tab">Bug</a>
                                </li>
                                <li class="nav-item active" role="presentation">
                                    <a wire:click.prevent="swt3()"
                                        class="nav-link justify-content-center text-active-gray-800 {{ $swit == 2 ? 'active' : '' }}"
                                        data-bs-toggle="tab" role="tab">Release Bug</a>
                                </li>

                            </ul>

                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        {{-- @json($project->leader) --}}
                        @if ($swit == 0)

                            @if (Auth::user()->id == $project->leader)
                                <div wire:ignore.self class="card-toolbar" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-trigger="hover" title=""
                                    data-bs-original-title="Click to add a Modul">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                        data-bs-toggle="modal" data-bs-target="#add_modul">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                    height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                    rx="1" fill="black"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Add Modul
                                    </a>
                                </div>
                            @endif
                        @endif

                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body hover-scroll h-400px  pt-7 pb-0 px-0">
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
                                    @if ($swit == 0)


                                        @foreach ($modul as $item)
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
                                                            <span wire:ignore.self class="text-muted me-2 fs-7 fw-bold"
                                                                data-kt-countup="true"
                                                                data-kt-countup-value="{{ $item->progres }}"
                                                                data-kt-countup-suffix="%">
                                                                0</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div wire:ignore.self class="progress-bar bg-primary"
                                                                role="progressbar" style="width:0%"
                                                                aria-valuenow="{{ $item->progres }}"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    @if (Auth::user()->id == $item->programer || Auth::user()->id == $item->ModulToProject->leader)
                                                        <a href="/projects/{{ $item->ModulToProject->slug . '/' . $item->slug }}"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <rect opacity="0.5" x="18"
                                                                        y="13" width="13" height="2"
                                                                        rx="1" transform="rotate(-180 18 13)"
                                                                        fill="black">
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
                                    @endif

                                    @if ($swit == 1)
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
                                                <td>
                                                    <span
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->nama }}</span>
                                                    <span
                                                        class="text-muted fw-bold d-block fs-7">{{ $item->BugProgramer->name }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span wire:ignore class="text-dark fw-bold d-block  fs-6"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="{{ $item->deskripsi }}">
                                                        {{ Str::substr($item->deskripsi, 0, 10) }}

                                                        {{-- Str::substr($project->deskripsi_project, 0, 110) . '...' --}}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-7">{{ $item->deadline }}</span>
                                                    <span class="text-muted fw-bold d-block fs-7">Deadline
                                                    </span>
                                                </td>

                                                <td class="text-end">
                                                    <span
                                                        class="text-white  badge badge-danger fw-bolder  mb-1 fs-7">{{ $item->status == 0 ? 'New' : ($item->status == 1 ? 'On Progres' : 'Complated') }}</span>

                                                </td>
                                                {{-- @if ($item->status == 0 && $item->programer == Auth::user()->id)
                                                    <td class="text-end">
                                                        <button wire:click="konfimasiRevisi({{ $item->id }})"
                                                            class="btn btn-sm btn-light-success">
                                                            Revisi
                                                        </button>
                                                    </td>
                                                @endif --}}

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            @if ($swit == 2)
                                <div class="timeline  scroll-y scroll">
                                    @foreach ($versi as $key)
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px "></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                <div class="symbol-label bg-light-primary">

                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">Project <span
                                                            class="text-primary text-hover-info">
                                                            {{ $key->VersiProject->nama_project }}
                                                        </span> di
                                                        release tgl
                                                        {{ $key->tgl }}</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->

                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <!--begin::Record-->


                                                    <table class="table  align-middle gs-0 ">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-200px"></th>
                                                                <th class="p-0 min-w-100px"></th>
                                                                <th class="p-0 min-w-40px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @if ($loop->first)
                                                                <tr>
                                                                    <div
                                                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div
                                                                            class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                                            <!--begin::Content-->
                                                                            <div class="mb-3 mb-md-0 fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Project Dirilis </h4>
                                                                                <div class="fs-6 text-gray-700 pe-7">
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                            <!--begin::Action-->

                                                                            <!--end::Action-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                </tr>
                                                            @endif
                                                            @if ($key->VersiRelease->count())
                                                                @foreach ($key->VersiRelease as $item)
                                                                    <tr>
                                                                        <th>
                                                                            <div class="symbol symbol-50px me-2"
                                                                                wire:ignore.self>
                                                                                <span class="symbol-label">
                                                                                    <span
                                                                                        class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                                                        {{ Str::substr($item->nama, 0, 2) }}

                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </th>
                                                                        <td>
                                                                            <span
                                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                                                                {{ $item->nama }}
                                                                            </span>
                                                                            <span
                                                                                class="text-muted fw-bold d-block fs-7">
                                                                                {{ $item->ReleaseModul->ModulProgramer->name }}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span wire:ignore
                                                                                class="text-dark fw-bold d-block  fs-6"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="bottom"
                                                                                title="{{ $item->deskripsi }}">
                                                                                {{ Str::substr($item->deskripsi, 0, 10) }}

                                                                                {{-- Str::substr($project->deskripsi_project, 0, 110) . '...' --}}
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-7">
                                                                                {{ $item->deadline }}
                                                                            </span>
                                                                            <span
                                                                                class="text-muted fw-bold d-block fs-7">Deadline
                                                                            </span>
                                                                        </td>

                                                                        <td class="text-end">
                                                                            <span
                                                                                class="text-white  badge badge-danger fw-bolder  mb-1 fs-7">

                                                                                {{ $item->status == 0 ? 'New' : ($item->status == 1 ? 'On Progres' : 'Complated') }}
                                                                            </span>

                                                                        </td>
                                                                        {{-- @if ($item->status == 0 && $item->programer == Auth::user()->id)
                                                                    <td class="text-end">
                                                                        <button wire:click="konfimasiRevisi({{ $item->id }})"
                                                                            class="btn btn-sm btn-light-success">
                                                                            Revisi
                                                                        </button>
                                                                    </td>
                                                                @endif --}}

                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                @if (!$loop->first)
                                                                    <tr>
                                                                        <div
                                                                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                                            <!--begin::Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                                                        fill="black"></path>
                                                                                    <path
                                                                                        d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                                                        fill="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--end::Icon-->
                                                                            <!--begin::Wrapper-->
                                                                            <div
                                                                                class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                                                <!--begin::Content-->
                                                                                <div class="mb-3 mb-md-0 fw-bold">
                                                                                    <h4
                                                                                        class="text-gray-900 fw-bolder">
                                                                                        Tidak Ada Bug </h4>
                                                                                    <div
                                                                                        class="fs-6 text-gray-700 pe-7">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Content-->
                                                                                <!--begin::Action-->

                                                                                <!--end::Action-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                    </tr>
                                                                @endif
                                                            @endif

                                                        </tbody>
                                                    </table>



                                                    <!--end::Record-->
                                                    <!--begin::Record-->

                                                    <!--end::Record-->
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                    @endforeach

                                </div>
                            @endif
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
                                {{-- <div class=" carousel-item">
                                    <div class=" carousel-wrapper">
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
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
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
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
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
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
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
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
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
                                </div> --}}
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
                <div class="card card-xxl-stretch-20 mb-5 mb-xl-10">
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

<div wire:ignore.self class="modal fade" tabindex="-1" id="modal_edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Project</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form wire:submit.prevent="update({{ $project->id }})">

                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Level Project</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title=" Level Modul" data-bs-original-title="Level Modul"
                                aria-label="Level Modul"></i>
                        </label>
                        <!--end::Label-->
                        <select wire:model="level" required class="form-control form-control-solid">
                            <option value=""> Select Level Project</option>
                            <option value="1">Urgent</option>
                            <option value="2">Medium</option>
                            <option value="3">Low</option>

                        </select>


                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Deadline Project</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title=" Deadline Modul" data-bs-original-title="Deadline Modul"
                                aria-label="Deadline Modul"></i>
                        </label>
                        <!--end::Label-->
                        <input wire:model="tgl_deadline"
                            class="form-control form-control-range form-control-solid" type="date" />
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>




<div wire:ignore.self class="modal fade" tabindex="-1" id="add_modul">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Modul</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <form wire:submit.prevent="save">

                        <input type="hidden" wire:model="no_project">
                        <div class="mb-3">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama Modul</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title=" Nama Modul" data-bs-original-title="Nama Modul"
                                    aria-label="Nama Modul"></i>
                            </label>
                            <!--end::Label-->
                            <input wire:model="nama" type="text" class="form-control form-control-solid"
                                placeholder="Nama Modul" name="target_title">
                            @error('nama')
                                <div class="fv-plugins-message-container invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Programmer</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="" data-bs-original-title="Programmer"
                                    aria-label="Programmer"></i>
                            </label>
                            {{-- <!--end::Label-->@json($programer2) --}}
                            <select wire:model="programer2" wire:ignore class="form-select form-select-solid "
                                data-placeholder="Select a Programer">
                                <option value="">Select Programer...</option>
                                @foreach ($programer as $key)
                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                @endforeach
                            </select>
                            @error('programer2')
                                <div class="fv-plugins-message-container invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Deadline</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="" data-bs-original-title="deadline" aria-label="deadline"></i>
                            </label>
                            {{-- {{ $deadline }} --}}
                            <input wire:model="deadline"
                                class="form-control form-control-range form-control-solid" type="date" />
                            @error('deadline')
                                <div class="fv-plugins-message-container invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="" wire:click.prevent="save()" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <button wire:click="cek({{ $project->id }})">
        asdas
    </button> --}}

@livewireScripts
<script type="text/javascript">
    // window.addEventListener('swal', function(e) {
    //     Swal.fire(e.detail);
    // });
    window.livewire.on('add_modul', () => {
        $('#add_modul').modal('hide');
    });
    window.livewire.on('edit_pro', () => {
        $('#modal_edit').modal('hide');
    });
</script>

</div>

<div>
    {{-- {{ auth()->user()->id}} --}}
    {{-- <div class="row g-5 g-xl-8">

        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a wire:ignore wire:click='sw({{0}})'
                class="card {{ $switch == 0 ? 'bg-success' : 'bg-primary'  }}  bg-hover-success card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">

                    <div class="d-flex align-items-center ">
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                    fill="black" />
                            </svg></span>
                        <div class="text-white fs-1 fw-bolder" data-kt-countup="true" data-kt-countup-value=""
                            data-kt-countup-prefix="">0</div>
                    </div>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">All Project</div>


                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>


        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a wire:ignore wire:click='sw({{1}})'
                class="card {{ $switch == 1 ? 'bg-success' : 'bg-info'  }} bg-hover-success card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">

                    <div class="d-flex align-items-center ">
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                    fill="black" />
                            </svg></span>
                        <div class="text-white fs-1 fw-bolder" data-kt-countup="true" data-kt-countup-value=""
                            data-kt-countup-prefix="">0</div>
                    </div>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">Project Selesai</div>


                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>


        <div class="col-xl-4">
            <!--begin::Statistics Widget 5-->
            <a wire:ignore wire:click='sw({{2}})'
                class="card {{ $switch == 2 ? 'bg-success' : 'bg-danger'  }} bg-hover-success active card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">

                    <div class="d-flex align-items-center ">
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                    fill="black" />
                            </svg></span>
                        <div wire:ignore class="text-white fs-1 fw-bolder" data-kt-countup="true"
                            data-kt-countup-value="123" data-kt-countup-prefix="">0</div>
                    </div>
                    <!--end::Svg Icon-->
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">Project On Progress</div>


                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>

    </div> --}}
    {{-- @json($pilihan) --}}

    <div class="row g-5 g-xl-8">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Modul</span>
                    <span class="text-muted mt-1 fw-bold fs-7"></span>
                </h3>
                <div class="card-toolbar">
                    {{-- {{ $pilih }} --}}
                    <select wire:model.lazy="pilih" class=" form-control form-select-solid form-select">
                        <option value="">
                            Select Project
                        </option>
                        @foreach ($pilihan as $k => $t)
                            <option value="{{ $t }}">
                                {{ $k }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="card-body pt-3">
                <table class="table align-middle gs-0 gy-9">
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-200px"></th>
                            <th class="p-0 text-center w-70px"></th>
                            <th class="p-0 w-250px"></th>
                            <th class="p-0 w-50px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($modul_all as $item)
                            <tr>
                                <th>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label">
                                            <span class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                {{ Str::substr($item->nama, 0, 2) }}

                                            </span>
                                        </span>
                                    </div>
                                </th>
                                <td>
                                    <a href="/modul/{{ $item->slug }}"
                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->nama }}</a>
                                    <span
                                        class="text-muted fw-bold d-block fs-7">{{ $item->ModulToProject->nama_project }}</span>
                                </td>
                                <td>
                                    <div class=" badge">

                                        <span
                                            class=" badge-light-info fw-bold d-block fs-7">{{ $item->status == 0 ? 'In Progress' : 'Complete' }}</span>
                                    </div>

                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <span class="text-muted me-2 fs-7 fw-bold">
                                                {{ $item->progres }}%</span>
                                        </div>
                                        <div class="progress bg-light-primary h-6px w-100">
                                            {{-- <div class="progress-bar bg-primary" role="progressbar" style="width:0%"
                                            aria-valuenow="{{ $item->total_progres }}" aria-valuemin="0"
                                            aria-valuemax="100"></div> --}}
                                            <div class="progress-bar-animated progress progress-bar progress-bar-striped bg-info"
                                                role="progressbar" style="width: {{ $item->progres }}%"
                                                aria-valuenow="{{ $item->progres }}" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a href="/modul/{{ $item->slug }}"
                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                    height="2" rx="1" transform="rotate(-180 18 13)"
                                                    fill="black"></rect>
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
                {{ $modul_all->links('layout.pagination-link') }}
            </div>

        </div>


    </div>




    <script wire:ignore>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });
    </script>
</div>

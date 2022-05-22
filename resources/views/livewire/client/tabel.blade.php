<div class="d-flex flex-wrap flex-stack pb-7">
    <!--begin::Title-->
    <div class="d-flex flex-wrap align-items-center my-1">

        <button class="fw-bolder btn btn-light-success btn-sm me-5 my-1"> <i class="las fs-3 la-plus "></i>Add
            Client</button>
        <div class="d-flex align-items-center position-relative my-1">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-3 position-absolute ms-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                    <path
                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                        fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" wire:model="search" class="form-control form-control-white form-control-sm w-150px ps-9"
                placeholder="Search" />


        </div>

        <!--end::Search-->
    </div>

    <!--end::Title-->
    <!--begin::Controls-->
    <div class="d-flex flex-wrap my-1">
        @if ($ceklis)
        <div class=" d-flex justify-content-end align-items-center">
            <div class="fw-bolder me-5 me-2">{{count($ceklis)}} Selected</div><button type="button"
                wire:click="deleteCountries" class="btn btn-sm btn-danger"> Delete Selected</button>
        </div>
        @else


        <!--begin::Tab nav-->

        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
            @if ($switch == 0)
            <li class="nav-item m-0">
                <a wire:click='sw' class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active">
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
                </a>
            </li>

            <li class="nav-item m-0">
                <a wire:click='sw' class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="black" />
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
            </li>
            @endif
            @if ($switch == 1)
            <li class="nav-item m-0">
                <a wire:click='sw' class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 ">
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
                </a>
            </li>

            <li class="nav-item m-0">
                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="black" />
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
            </li>
            @endif
            @endif

        </ul>
        <!--end::Tab nav-->
        <!--begin::Actions-->
        <div class="d-flex my-0">
            <!--begin::Select-->

            <!--end::Select-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Controls-->
</div>
<!--end::Toolbar-->
<!--begin::Tab Content-->
<div class="tab-content">
    <!--begin::Tab pane-->

    @if ($switch == 0)
    <div>
        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            <!--begin::Col-->
            @foreach ($client2 as $item)

            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <div href="" class="card border bg-hover-lighten
                        {{ $item->no_kc == 1 ? ' bg-hover-light-success' : '' }}
                        {{$item->no_kc == 2 ? ' bg-hover-light-dark' : '' }}
                        {{ $item->no_kc == 3 ? ' bg-hover-light-primary ' :'' }}
                         border-2 border-gray-300 border-hover">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <i class="las  {{ $item->no_kc == 1 ? ' la-city text-info' : '' }}
                                {{$item->no_kc == 2 ? ' la-industry text-primary' : '' }}
                                {{ $item->no_kc == 3 ? 'la-hospital text-success ' :'' }} fs-2tx"></i>
                            <span class=" {{ $item->no_kc == 1 ? ' text-info' : '' }}
                                    {{$item->no_kc == 2 ? ' text-primary' : '' }}
                                    {{ $item->no_kc == 3 ? ' text-success ' :'' }}">{{ $item->r_kc->nama}}</span>
                            {{-- <i class="las la-city"></i> --}}
                            {{-- <i class="las la-industry"></i> --}}


                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">

                            <div>
                                <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Action</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <button wire:click.prevent='destroy({{$item->id}})'
                                            class="btn bg-hover-light-danger text-hover-danger  menu-link px-3"> Delete
                                        </button>
                                    </div>
                                    <div class="menu-item px-3">
                                        <button wire:click.prevent='destroy({{$item->id}})'
                                            class="btn bg-hover-light-danger text-hover-danger  menu-link px-3"> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bolder text-dark">{{ $item->nama}}</div>
                        <!--end::Name-->
                        <!--begin::Description-->

                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7"><strong class="text-gray-500 ">{{ $item->cp}}
                            </strong> <br> {{ $item->alamat}} </p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        {{-- <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Nov 10, 2021</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                            <!--end::Budget-->
                        </div> --}}
                        <!--end::Info-->
                        <!--begin::Progress-->

                        <!--end::Progress-->
                        <!--begin::Users-->







                        {{-- <div class="symbol-group symbol-hover">
                            <!--begin::User-->

                            <!--begin::User-->
                            @foreach ( $item->projectClient as $c )

                            <div class="symbol symbol-35px symbol-badge" data-bs-toggle="tooltip"
                                title="{{ $c->nama_project  }}">
                                <span
                                    class="symbol-label bg-primary text-inverse-primary fw-bolder">{{mb_substr($c->nama_project,
                                    0, 1, "UTF-8")}}</span>
                            </div>

                            @endforeach
                            <!--begin::User-->
                        </div> --}}







                        <!--end::Users-->
                    </div>
                    <!--end:: Card body-->
                </div>
                <!--end::Card-->
            </div>


            <!--end::Col-->
            <!--begin::Col-->
            @endforeach

            <div>
                {{ $client2->links('layout.pagination-link')}}
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Pagination-->

        <!--end::Pagination-->
    </div>
    @else












    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div>
        <!--begin::Card-->
        <div class="card card-flush">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_project_users_table"
                        class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                        <!--begin::Head-->
                        <thead class="fs-7 text-gray-400 text-uppercase">
                            <tr>
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" wire:model="selectAll" />
                                    </div>
                                </th>
                                <th wire:click="sortBy('client_id')" style="cursor: pointer;" class="min-w-100px">No
                                    Client
                                    @include('layout.sort-icon',['field'=>'client_id'])</span></th>
                                <th wire:click="sortBy('nama')" style="cursor: pointer;" class="min-w-100px"><span>Nama
                                        @include('layout.sort-icon',['field'=>'nama'])</span>
                                </th>

                                <th class="min-w-80px">No Telepon</th>
                                <th class="min-w-80px">Alamat</th>
                                <th wire:click="sortBy('no_kc')" style="cursor: pointer;" class="min-w-90px ">Kategori
                                    @include('layout.sort-icon',['field'=>'no_kc'])</th>
                                <th class="min-w-50px text-end">Details</th>
                            </tr>
                        </thead>
                        <!--end::Head-->
                        <!--begin::Body-->
                        <tbody class="fs-6">
                            @foreach ($client as $item)

                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                            wire:model="ceklis" />
                                    </div>
                                </td>
                                <td>{{ $item->client_id}}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->cp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <span class="badge
                                    {{ $item->r_kc->nama == 'Instansi'  ? 'badge-light-info' : ''}}
                                    {{ $item->r_kc->nama == 'Perusahaan'  ? 'badge-light-primary' : ''}}
                                    {{ $item->r_kc->nama == 'Kesehatan'  ? 'badge-light-success' : ''}}
                                     fw-bolder px-4 py-3">{{ $item->r_kc->nama}}</span>
                                </td>
                                <td class="text-end">
                                    <div class=" btn-group">
                                        <button wire:click.prevent="edit({{$item->id}})" data-toggle="modal"
                                            data-target="#editmodal"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <button wire:click.prevent="destroy({{$item->id}})"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                        fill="black"></path>
                                                    <path opacity="0.5"
                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                        fill="black"></path>
                                                    <path opacity="0.5"
                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <!--end::Body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    @endif
    <!--end::Tab pane-->
</div>

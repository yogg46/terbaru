<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" wire:model="search" class="form-control form-control-solid w-250px ps-14"
                    placeholder="Search User" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <!--begin::Filter-->

                <!--begin::Menu 1-->

                <!--end::Menu 1-->
                <!--end::Filter-->
                <!--begin::Export-->

                <!--end::Export-->
                <!--begin::Add subscription-->

                @if ($ceklis)

                @else
                <a data-bs-toggle="modal" data-bs-target="#kt_modal_2" href="" class="btn btn-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add User
                </a>
                @endif

                <!--end::Add subscription-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            @if ($ceklis)
            <div class=" d-flex justify-content-end align-items-center">
                <div class="fw-bolder me-5 me-2">{{count($ceklis)}} Selected</div><button type="button"
                    wire:click="deleteCountries" class="btn btn-danger"> Delete Selected</button>
            </div>




            {{-- <div class="d-flex justify-content-end align-items-center d-none">
                <div class="fw-bolder me-5">
                    <span class="me-2"></span> Selected
                </div>
                <button wire:click="deleteCountries()" type="button" class="btn btn-danger">Delete Selected</button>
            </div> --}}
            @endif

            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">

        <!--begin::Table-->
        {{-- <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table"> --}}
            <table class="table dataTable align-middle table-row-dashed fs-6 gy-5">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" wire:model="selectAll" />
                            </div>
                        </th>
                        {{-- <th class="min-w-25px">No</th> --}}
                        <th wire:click="sortBy('name')" style="cursor: pointer;" class="min-w-125px ">Nama
                            @include('layout._sort-icon',['field'=>'name'])
                        </th>
                        <th wire:click="sortBy('email')" style="cursor: pointer;" class="min-w-125px ">Email
                            @include('layout._sort-icon',['field'=>'email'])
                        </th>
                        <th wire:click="sortBy('role')" style="cursor: pointer;" class="min-w-125px">Jabatan
                            @include('layout._sort-icon',['field'=>'role'])</th>
                        <th wire:click="sortBy('status')" style="cursor: pointer;" class="text-center min-w-25px">Status
                            @include('layout._sort-icon',['field'=>'status'])</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>

                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody wire:loading.class="opacity-90" class="text-gray-600 fw-bold">
                    @php
                    $no=1
                    @endphp

                    @forelse ($karyawan as $item)
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                    wire:model="ceklis" />
                            </div>
                        </td>
                        {{-- <td>{{ $no++}}</td> --}}
                        <!--end::Checkbox-->
                        <!--begin::Customer=-->
                        <td>
                            <div class="text-gray-800 text-hover-primary mb-1">{{$item->name}}</div>
                        </td>
                        <!--end::Customer=-->
                        <!--begin::Status=-->
                        <td class="text-gray-400 text-hover-primary mb-1">
                            {{$item->email}}
                        </td>
                        <!--end::Status=-->
                        <!--begin::Billing=-->
                        <td><span class="badge  text-hover-inverse-light
                            {{ $item->utk->kategori == 'Programer'  ? 'badge-light-danger' : ''}}
                            {{ $item->utk->kategori == 'Leader'  ? 'badge-light-warning' : ''}}
                            {{ $item->utk->kategori == 'Management'  ? 'badge-light-info' : ''}}
                            {{ $item->utk->kategori == 'Marketing'  ? 'badge-light-primary' : ''}}
                            {{ $item->utk->kategori == 'Administator'  ? 'badge-light-success' : ''}} mb-1">{{
                                $item->utk->kategori}}</span></td>

                        <!--end::Billing=-->
                        <!--begin::Product=-->

                        <!--end::Product=-->
                        <!--begin::Date=-->
                        <td class="text-center">@if ($item->status == 1)
                            <button
                                onclick="confirm('Apakah anda yakin akan mensuspend {{$item->name}} ?') || event.stopImmediatePropagation()"
                                data-kt-customer-table-select="delete_selected" class="btn btn-light-success btn-sm"
                                wire:click.prevent="presus({{$item->id}})">Aktif</button>
                            {{-- <button
                                onclick="confirm('Apakah ada mau mensuspen {{$item->name}} ?') || event.stopImmediatePropagation()"
                                class="btn btn-light-success btn-sm"
                                wire:click.prevent="presus({{$item->id}})">Aktif</button> --}}
                            @else
                            <button
                                onclick="confirm('Apakah anda yakin akan mengaktifkan {{$item->name}} ?') || event.stopImmediatePropagation()"
                                class="btn  btn-light-danger btn-sm"
                                wire:click.prevent="presus({{$item->id}})">Suspended
                            </button>
                            @endif
                        </td>
                        <!--end::Date=-->
                        <!--begin::Action=-->
                        <td class="text-end ">
                            <button wire:ignore.self class="btn btn-light-primary btn-icon btn-active-light-info btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Password"
                                wire:click.prevent="resetPass({{$item->id}})">

                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr029.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z"
                                            fill="black" />
                                    </svg></span>
                                <!--end::Svg Icon-->
                            </button>

                            <button wire:ignore.self data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                class="btn btn-light-warning btn-icon btn-active-light-primary btn-sm"
                                data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="buttom"
                                title="Edit" wire:click.prevent="edit({{$item->id}})">

                                <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="black" />
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="black" />
                                    </svg></span>
                            </button>
                            <button wire:ignore.self
                                onclick="confirm('Apakah anda yakin akan menghapus {{$item->name}} ?') || event.stopImmediatePropagation()"
                                class="btn btn-light-danger btn-icon btn-active-light-primary btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                wire:click.prevent="destroy({{$item->id}})">

                                <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art004.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M8.38 22H21C21.2652 22 21.5196 21.8947 21.7071 21.7072C21.8946 21.5196 22 21.2652 22 21C22 20.7348 21.8946 20.4804 21.7071 20.2928C21.5196 20.1053 21.2652 20 21 20H10L8.38 22Z"
                                            fill="black" />
                                        <path
                                            d="M15.622 15.6219L9.855 21.3879C9.66117 21.582 9.43101 21.7359 9.17766 21.8409C8.92431 21.946 8.65275 22 8.37849 22C8.10424 22 7.83268 21.946 7.57933 21.8409C7.32598 21.7359 7.09582 21.582 6.90199 21.3879L2.612 17.098C2.41797 16.9042 2.26404 16.674 2.15903 16.4207C2.05401 16.1673 1.99997 15.8957 1.99997 15.6215C1.99997 15.3472 2.05401 15.0757 2.15903 14.8224C2.26404 14.569 2.41797 14.3388 2.612 14.145L8.37801 8.37805L15.622 15.6219Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M8.37801 8.37805L14.145 2.61206C14.3388 2.41803 14.569 2.26408 14.8223 2.15906C15.0757 2.05404 15.3473 2 15.6215 2C15.8958 2 16.1673 2.05404 16.4207 2.15906C16.674 2.26408 16.9042 2.41803 17.098 2.61206L21.388 6.90198C21.582 7.0958 21.736 7.326 21.841 7.57935C21.946 7.83269 22 8.10429 22 8.37854C22 8.65279 21.946 8.92426 21.841 9.17761C21.736 9.43096 21.582 9.66116 21.388 9.85498L15.622 15.6219L8.37801 8.37805Z"
                                            fill="black" />
                                    </svg></span>
                                <!--end::Svg Icon-->
                            </button>

                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    @empty

                    <table class="dataTable dataTables_empty">


                        <td class="flex text-center justify-center items-center space-x-2">
                            <div>
                                <span class="font-medium text-center py-8 text-cool-gray-400 text-xl">No matching
                                    records found</span>
                            </div>
                        </td>

                    </table>

                    @endforelse
                </tbody>
            </table>
            {{ $karyawan->links('layout.pagination-link')}}
    </div>
</div>

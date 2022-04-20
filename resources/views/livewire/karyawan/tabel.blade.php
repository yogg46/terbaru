
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
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" wire:model="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search User" />
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
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add User</a>
                    @endif

                    <!--end::Add subscription-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                @if ($ceklis)
                <div class=" d-flex justify-content-end align-items-center">
                <div class="fw-bolder me-5 me-2">{{count($ceklis)}} Selected</div><button type="button"  wire:click="deleteCountries" class="btn btn-danger"> Delete Selected</button>
                </div>




                {{-- <div class="d-flex justify-content-end align-items-center d-none" >
                    <div class="fw-bolder me-5">
                    <span class="me-2" ></span> Selected</div>
                    <button wire:click="deleteCountries()" type="button" class="btn btn-danger" >Delete Selected</button>
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
            <table class="table dataTable align-middle table-row-dashed fs-6 gy-5" >
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
                        <th wire:click="sortBy('email')" style="cursor: pointer;"  class="min-w-125px ">Email
                            @include('layout._sort-icon',['field'=>'email'])
                        </th>
                        <th wire:click="sortBy('role')" style="cursor: pointer;"  class="min-w-125px">Jabatan
                            @include('layout._sort-icon',['field'=>'role'])</th>
                        <th wire:click="sortBy('status')" style="cursor: pointer;"  class="text-center min-w-25px">Status
                            @include('layout._sort-icon',['field'=>'status'])</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>

                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody  wire:loading.class="opacity-90" class="text-gray-600 fw-bold">
                    @php
                    $no=1
                    @endphp

                    @forelse ($karyawan as $item)
                    <tr >
                        <!--begin::Checkbox-->
                        <td >
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input  class="form-check-input" type="checkbox" value="{{ $item->id }}" wire:model="ceklis" />
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
                        <td ><span class="badge  text-hover-inverse-light
                            {{ $item->utk->kategori == 'Programer'  ? 'badge-light-danger' : ''}}
                            {{ $item->utk->kategori == 'Leader'  ? 'badge-light-warning' : ''}}
                            {{ $item->utk->kategori == 'Management'  ? 'badge-light-info' : ''}}
                            {{ $item->utk->kategori == 'Marketing'  ? 'badge-light-primary' : ''}}
                            {{ $item->utk->kategori == 'Administator'  ? 'badge-light-success' : ''}} mb-1"
                            >{{ $item->utk->kategori}}</span></td>

                        <!--end::Billing=-->
                        <!--begin::Product=-->

                        <!--end::Product=-->
                        <!--begin::Date=-->
                        <td class="text-center">@if ($item->status == 1)
                            <button data-kt-customer-table-select="delete_selected"   class="btn btn-light-success btn-sm" wire:click.prevent="presus({{$item->id}})" >Aktif</button>
                            {{-- <button onclick="confirm('Apakah ada mau mensuspen {{$item->name}} ?') || event.stopImmediatePropagation()"   class="btn btn-light-success btn-sm" wire:click.prevent="presus({{$item->id}})" >Aktif</button> --}}
                            @else
                            <button onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"   class="btn btn-light-danger btn-sm" wire:click.prevent="presus({{$item->id}})" >Suspended</button>
                            @endif
                        </td>
                        <!--end::Date=-->
                        <!--begin::Action=-->
                        <td class="text-end ">

                            <button data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-light btn-active-light-primary btn-sm"wire:click.prevent="edit({{$item->id}})">Edit</button>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    @empty

                    <table class="dataTable dataTables_empty" >


                            <td class="flex text-center justify-center items-center space-x-2">
                    <div >
                        <span class="font-medium text-center py-8 text-cool-gray-400 text-xl">No matching records found</span>
                    </div>
                            </td>

                    </table>

                    @endforelse
                </tbody>
            </table>
            {{ $karyawan->links('layout.pagination-link')}}
        </div>
    </div>

<div>
    @include('livewire.karyawan.edit')
    @include('livewire.karyawan.create')
    @include('livewire.karyawan.suspend')



    <!--begin::Alert-->


    @if (session()->has('message'))
        <div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mb-10">
            <!--begin::Icon-->
            <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3"
                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                        fill="black"></path>
                    <path
                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                        fill="black"></path>
                </svg>
            </span>
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column pe-0 pe-sm-10">
                <!--begin::Title-->

                <h4 class="fw-bold">{{ session('message') }}</h4>
                <span></span>


                <!--end::Title-->
                <!--begin::Content-->
                <!--end::Content-->

                <!--end::Close-->
            </div>
            <button type="button"
                class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                data-bs-dismiss="alert">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Wrapper-->
        </div>
    @endif




    <!--end::Alert-->

    {{-- <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <button data-toggle="modal" data-target="#createmodal" type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i class="di di-plus"></i></span>                    Input Data Karyawan Baru
                    </button>
                </h3>
            </div>

        </div>
    </div> --}}


    @include('livewire.karyawan.tabel')


</div>



<script wire:ignore.self>
    window.livewire.on('edit', () => {
        $('#kt_modal_1').modal('hide');
    })

    window.livewire.on('delete', () => {
        $('#deletemodal').modal('hide');
    })

    window.livewire.on('save', () => {
        $('#createmodal').modal('hide');
    })

    window.addEventListener('swal:deleteCountries', function(event) {
        swal.fire({
            title: event.detail.title,
            html: event.detail.html,
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            width: 300,
            allowOutsideClick: false
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit('deleteCheckedCountries', event.detail.checkedIDs);
            }
        });
    });


    window.addEventListener('swal', function(e) {
        swal.fire(e.detail);
    });
</script>

</div>

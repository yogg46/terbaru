<div>
    {{-- {{ $moduls->ModulToProject->slug }}
    {{ $moduls->progres }}
    <form action="" wire:submit="prog({{ $moduls->id }},{{ $moduls->ModulToProject->id }})">

        <input type="text" value="{{ $moduls->id }}">
        <input wire:model="progres" value="" type="range" class="form-range" min="0" max="100"
            name="" id="">
        <input type="number" wire:model='progres'>
        <button type="submit"> sub </button>
    </form> --}}

    <div class="card mb-3 mb-xl-9">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                <!--begin::Image-->
                <!--end::Image-->
                <!--begin::Wrapper-->
                <div class="flex-grow-1">
                    <!--begin::Head-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::Details-->
                        <div class="d-flex flex-column">
                            <!--begin::Status-->
                            <div class="d-flex align-items-center mb-1">
                                <span
                                    class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $moduls->nama }}</span>
                                <span
                                    class="badge badge-light-success me-auto">{{ $moduls->status == 0 ? 'In Progress' : 'Completed' }}</span>
                            </div>
                            <!--end::Status-->
                            <!--begin::Description-->
                            <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">Progres :
                                {{ $moduls->progres }}%</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Actions-->
                        <div class="d-flex mb-4">

                            <!--begin::Menu-->
                            <div class="me-0">

                            </div>
                            {{-- <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a> --}}
                            <!--end::Menu-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Head-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap justify-content-start">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bolder">{{ $moduls->deadline }}</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Deadline</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Users-->
                        {{-- <div class="symbol-group symbol-hover mb-3">
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/150-12.jpg">
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/150-13.jpg">
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <!--end::All users-->
                        </div> --}}
                        <!--end::Users-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Details-->
            <div class="separator"></div>
            <!--begin::Nav wrapper-->
            <!--end::Nav wrapper-->
        </div>
    </div>

    <div class="card mb-2 mb-xl-9">

        <div class="card-boy mx-3 my-3">
            <label class=" align-items-center ml-2 fs-5 fw-bold mb-2">
                <span class="">Keterangan</span>

            </label>
            <textarea class="form-control form-control-white rounded-3"
                {{ Auth::user()->id == $moduls->programer ? '' : 'readonly' }} placeholder="{{ $moduls->keterangan }}"
                wire:change="simKet()" wire:model.lazy="keterangan" rows="4">

            </textarea>
        </div>
    </div>
    @if (Auth::user()->id == $moduls->programer)
        <div class="card mb-6 mb-xl-9">
            <!--begin::Body-->
            <div class="card-body my-3">
                <form action="" wire:submit.prevent="prog({{ $moduls->id }},{{ $moduls->ModulToProject->id }})">
                    <div class="mb-5">

                        <span class="text-gray-800 text-hover-primary fs-5 mb-6 fw-bolder me-3">Update Progress
                        </span>
                    </div>
                    <div class="card mb-6 mb-xl-9 " style="width: 100%">
                        <span id="rangeValue">{{ $progres }}</span>
                        <input wire:model.lazy="progres" type="range" class="range" name="" value="0"
                            min="0" max="100" onmousemove="rangeSlider(this.value)"
                            onchange="rangeSlide(this.value)">
                    </div>
                    <script wire:ignore.self type="text/javascript">
                        function rangeSlider(value) {
                            document.getElementById('rangeValue').innerHTML = value;
                        }
                    </script>

                    <button type="submit" class=" btn btn-sm btn-light-success">
                        Simpan
                    </button>
                </form>
            </div>
            <!--end:: Body-->
        </div>
    @endif

</div>

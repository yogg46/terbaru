<div>
    <div class="d-flex flex-wrap flex-stack my-3 ">
        <!--begin::Heading-->
        @if (Auth::user()->role == 3 || Auth::user()->role == 1)
            <button data-bs-toggle="modal" data-bs-target="#modal_add"
                class="fw-bolder btn btn-light-success btn-sm me-5 my-1"> <i class="las fs-3 la-plus "></i>Add
                Project</button>
            @include('livewire.projects.add')
        @endif
        <h2 class="fs-2 fw-bold my-2">

            <span class="fs-6 text-gray-400 ms-1"></span>
        </h2>

        <!--end::Heading-->
        <!--begin::Controls-->
        <div class="d-flex flex-wrap my-1">
            <!--begin::Select wrapper-->
            <div wire:ignore class="m-0">
                <!--begin::Select-->
                <select wire:model="select"
                    class="form-control form-select form-select-white form-control-lg select2 form-select-white form-select-sm fw-bolder w-125px">
                    <option value="" selected>All</option>
                    <option value="1">Project Baru</option>
                    <option value="2">On progres</option>
                    <option value="3">Bug report</option>
                    <option value="4">Trial error</option>
                    <option value="5">Revisi</option>
                    <option value="6">Realese</option>
                </select>

            </div>
            <!--end::Select wrapper-->
        </div>
        <!--end::Controls-->
    </div>


    <div class="row g-6 g-xl-9">
        <!--begin::Col-->
        @foreach ($project as $item)
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <a href="/projects/{{ $item->slug }}" class="card border border-2 border-gray-300 border-hover">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <span class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                    {{ Str::substr($item->nama_project, 0, 2) }}
                                </span>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <span class="badge @include('layout.badge_status') fw-bolder me-auto px-4 py-3">
                                @include('layout.status') </span>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bolder text-dark">{{ $item->nama_project }}</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">
                            {{ Str::substr($item->deskripsi_project, 0, 30) . '...' }}</p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">@include('layout.kategori')</div>
                                <div class="fw-bold text-gray-400">kategori</div>
                            </div>
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">@include('layout.level')</div>
                                <div class="fw-bold text-gray-400">Level</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->
                        <div wire:ignore.self class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="This project {{ $item->total_progres . '%' }} completed">
                            <div class="bg-primary rounded h-4px" role="progressbar"
                                style="width: {{ $item->total_progres . '%' }}"
                                aria-valuenow="{{ $item->total_progres }}" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Users-->


                        <div wire:ignore class="symbol-group symbol-hover">
                            <!--begin::User-->
                            <div wire:ignore class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title=""
                                data-bs-original-title="Marketing : {{ $item->MarketingToProject->name }}">
                                <span class="symbol-label bg-info fs-4 text-inverse-warning fw-bolder">

                                    {{ Str::substr($item->MarketingToProject->name, 0, 2) }}
                                </span>
                            </div>
                            @if (!is_null($item->leader))
                                <div wire:ignore class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title=""
                                    data-bs-original-title=" Leader: {{ $item->LeaderToProject->name }}">
                                    <span class="symbol-label bg-warning fs-4 text-inverse-warning fw-bolder">

                                        {{ Str::substr($item->LeaderToProject->name, 0, 2) }}
                                    </span>
                                </div>
                            @endif

                            <div wire:ignore class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                data-bs-placement="right" title=""
                                data-bs-original-title="Programmer : @foreach ($item->projectModul as $key) {{ $key->ModulProgramer->name . ', ' }} @endforeach">
                                <span class="symbol-label bg-danger fs-7 text-inverse-warning fw-bolder">

                                    {{ '+' . count($item->projectModul) }}
                                </span>
                            </div>


                            {{-- @foreach ($item->projectModul as $key)
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="{{ $key->ModulProgramer->name }}">
                                    <span class="symbol-label bg-danger fs-4 text-inverse-warning fw-bolder">
                                        {{ Str::substr($key->ModulProgramer->name, 0, 2) }}
                                    </span>
                                </div>
                            @endforeach --}}
                            <!--begin::User-->
                            <!--begin::User-->
                            <!--begin::User-->
                        </div>

                        <!--end::Users-->
                    </div>
                    <!--end:: Card body-->
                </a>
                <!--end::Card-->
            </div>
        @endforeach

        <!--end::Col-->
        {{-- @json($project) --}}

    </div>
    <div class="d-flex flex-stack flex-wrap pt-10">

        {{ $project->links('layout.pagination-link') }}
    </div>

    <script>
        window.livewire.on('save2', () => {
            $('#modal_add').modal('hide');
        });
    </script>

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

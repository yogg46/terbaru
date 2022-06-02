<div>
    <div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">

                <div class="card mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Pro new projects</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Over new projects</span>

                        </h3>
                        <div class="card-toolbar">

                        </div>
                    </div>

                    <div class="card-body pt-3">
                        <table class="table align-middle gs-0 gy-9">
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
                                @foreach ( $project as $item )

                                <tr>
                                    <th>
                                        <div class="symbol symbol-50px me-2">
                                            <span class="symbol-label">
                                                <span
                                                    class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                    {{ Str::substr( $item->nama_project,0,2 ) }}

                                                </span>
                                            </span>
                                        </div>
                                    </th>
                                    <td>
                                        <a href="/projects/{{$item->slug}}"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{
                                            $item->nama_project}}</a>
                                        <span class="text-muted fw-bold d-block fs-7">{{ $item->no_project }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div wire:ignore class="d-flex flex-stack mb-2">
                                                <span wire:ignore class="text-muted me-2 fs-7 fw-bold"
                                                    data-kt-countup="true"
                                                    data-kt-countup-value="{{ $item->total_progres}}"
                                                    data-kt-countup-suffix="%">
                                                    0</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div wire:ignore.self class="progress-bar bg-primary" role="progressbar"
                                                    style="width:0%" aria-valuenow="{{ $item->total_progres }}"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="/projects/{{$item->slug}}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black"></rect>
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

                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- {{ $marketing }}

    <form action="" method="get">

        <select wire:model='marketing' class="form-control" data-prompt-position="topLeft">
            <option value="">Pilih Jabatan</option>
            @foreach ($nama_market as $k)
            <option value="{{ $k->id }}"> {{ $k->name }}</option>
            @endforeach
        </select>


    </form>


    @foreach ($projek as $p )
    {{ $p->nama_project }} <br>
    {{ $p->LeaderToProject->name }} <br>
    {{ $p->MarketingToProject->name }} <br>
    {{ $p->ClientToProject->nama }} <br>
    {{ $p->ClientToProject->r_kc->nama }} <br>
    {{ $p->tgl_deadline }} <br>
    {{ ($p->tgl_deadline) }} <br>
    <br>
    {{ $p->name }} <br>


    @endforeach --}}


    {{-- @foreach ($projek as $item )
    @php
    $diff = abs(strtotime($item->tgl_deadline) - strtotime($item->tgl_buat));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $totalDaysDiff = $diff/60/60/24;
    @endphp
    {{ $item->tgl_buat }} <br>
    {{ $item->tgl_deadline}} <br>
    {{ $totalDaysDiff.' hari'}} <br>
    {{ $years . ' tahun ' . $months. ' bulan '. $days .' hari ' }} <br> <br>
    @endforeach --}}


    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-success card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bolder text-success fs-5 mb-3 d-block">Project Progress</a>
                    <div class="py-1">
                        <span class="text-dark fs-1 fw-bolder me-2">50%</span>
                        <span class="fw-bold text-muted fs-7">Avarage</span>
                    </div>
                    <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                        <div class="progress-bar-animated progress-bar progress-bar-striped bg-success"
                            role="progressbar" style="width: 0%" aria-valuenow="{{ $aktif }}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
        </div>
        <div class="col-xl-4">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-warning card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bolder text-warning fs-5 mb-3 d-block">Company Finance</a>
                    <div class="py-1">
                        <span class="text-dark fs-1 fw-bolder me-2">15%</span>
                        <span class="fw-bold text-muted fs-7">48k Goal</span>
                    </div>
                    <div class="progress h-7px bg-warning bg-opacity-50 mt-7">
                        <div class="progress-bar-animated progress-bar-striped bg-warning" role="progressbar"
                            style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
        </div>
        <div class="col-xl-4">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title fw-bolder text-primary fs-5 mb-3 d-block">Marketing Analysis</a>
                    <div class="py-1">
                        <span class="text-dark fs-1 fw-bolder me-2">76%</span>
                        <span class="fw-bold text-muted fs-7">400k Impressions</span>
                    </div>
                    <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                        <div class="progress-bar-animated progress-bar progress-bar-striped bg-primary"
                            role="progressbar" style="width: 90%" aria-valuenow="76" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
        </div>
    </div>
    <div wire:ignore class="progress bg-primary bg-opacity-50">
        <div data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"
            class="progress-bar-animated progress-bar progress-bar-striped bg-primary" role="progressbar"
            style="width: 0%" aria-valuenow="{{100/3}}" aria-valuemin="0" aria-valuemax="{{100/3}}">
        </div>
        <div data-bs-toggle="popover" data-bs-placement="top" title="Popover on top"
            data-bs-content="And here's some amazing content. It's very engaging. Right?"
            class="progress-bar-animated progress-bar progress-bar-striped bg-danger" role="progressbar"
            style="width: 0%" aria-valuenow="{{50/3}}" aria-valuemin="0" aria-valuemax="{{100/3}}">
        </div>
        <div class="progress-bar-animated progress-bar progress-bar-striped bg-info" role="progressbar"
            style="width: 0%" aria-valuenow="{{76/3}}" aria-valuemin="0" aria-valuemax="{{100/3}}">
        </div>

    </div>

    <input type="text" class=" form-check-danger form-control" wire:model='coba'>
    {{$coba}}
    <button wire:ignore class=" btn btn-light" wire:click='coba()'> asdasd</button>

    <script wire:ignore>
        $(document).ready(function() {
        $('.progress .progress-bar').css("width",
        function() {
            return $(this).attr("aria-valuenow") + "%";
        }
        )
    });


    window.addEventListener('swal',function(e){
            Swal.fire(e.detail);
        });
    </script>
</div>

<div>

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
                            role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0"
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

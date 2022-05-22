<div>
    {{-- @php
    $coba = 'Joko sembung';
    $firstChar = mb_substr($coba, 0, 1, "UTF-8");
    @endphp --}}



    <div id="kt_content_container" class="container-xxl">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">

            <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">



                @if (auth()->user()->role=='1')
                @include('livewire.dashboard.admin')
                @endif

                @if (auth()->user()->role=='2')
                @include('livewire.dashboard.manager')
                @endif

                @if (auth()->user()->role=='3')
                @include('livewire.dashboard.marketing')
                @endif

                @if (auth()->user()->role=='4')
                @include('livewire.dashboard.leader')
                @endif

                @if (auth()->user()->role=='5')
                @include('livewire.dashboard.programer')
                @endif





            </div>







            <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary"
                    data-kt-sticky-offset="{default: false, lg: '200px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Theme</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 fs-6">


                        <div class="separator separator-dashed mb-7"></div>

                        @if (auth()->user()->hitam==0)

                        <button class="btn btn-dark" wire:click.prevent="dark( {{auth()->user()->id}})">
                            Dark Mode
                        </button>
                        @else
                        <button class="btn btn-light" wire:click.prevent="dark( {{auth()->user()->id}})">
                            Light Mode
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

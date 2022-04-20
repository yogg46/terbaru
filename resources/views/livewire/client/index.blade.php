<div>
    {{-- @foreach ($client as $c )


    @foreach ($c->projectClient as $s )
      {{mb_substr($s->nama_project, 0, 1, "UTF-8")}}
    @endforeach

    @endforeach --}}

@include('livewire.client.edit')
@include('livewire.client.create')


@if (session()->has('message'))

<div class="d-flex flex-column pe-0 pe-sm-10" >


<div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mb-10">
    <!--begin::Icon-->
    <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
        </svg>
    </span>
    <!--end::Icon-->            <!--begin::Wrapper-->
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <!--begin::Title-->

        <h4  class="fw-bold">{{session('message')}}</h4>
        <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>


        <!--end::Title-->
        <!--begin::Content-->
        <!--end::Content-->

        <!--end::Close-->
    </div>
</div>
@endif

{{-- <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <a  data-toggle="modal" data-target="#createmodal"  >
                Input Data Client Baru
                </a>
            </h3>
        </div>

    </div>
</div> --}}
@include('livewire.client.tabel')





<script>
    window.livewire.on('edit',()=>{
        $('#editmodal').modal('hide');
    })
</script>
<script>
    window.livewire.on('save',()=>{
        $('#createmodal').modal('hide');
    })
</script>


</div>

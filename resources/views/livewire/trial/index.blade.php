<div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <div class="card mb-5 mb-xl-8">
                {{-- <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1"></span>
                        <span class="text-muted mt-1 fw-bold fs-7"></span>

                    </h3>
                    <div class="card-toolbar">

                    </div>
                </div> --}}

                <div class="card-body pt-3">
                    <table class="table align-middle gs-0 gy-9">
                        <!--begin::Table head-->
                        <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-200px"></th>
                                <th class="p-0 min-w-40px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-40px"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($trial as $item)
                                <tr>
                                    <th>
                                        <div class="symbol symbol-50px me-2">
                                            <span class="symbol-label">
                                                <span
                                                    class="symbol-label bg-primary fs-2 text-inverse-warning fw-bolder">

                                                    {{ Str::substr($item->TrialProject->nama_project, 0, 2) }}

                                                </span>
                                            </span>
                                        </div>
                                    </th>
                                    <td>
                                        <a href="/trial-error/{{ $item->TrialProject->slug }}"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->TrialProject->nama_project }}</a>
                                        <span
                                            class="text-muted fw-bold d-block fs-7">{{ $item->TrialProject->no_project }}</span>
                                    </td>
                                    <td>
                                        <div class=" badge badge-sm badge-light-danger ">
                                            {{ $item->TrialProject->status == 1
                                                ? 'Project baru'
                                                : ($item->TrialProject->status == 2
                                                    ? 'On progres'
                                                    : ($item->TrialProject->status == 3
                                                        ? 'Bug report'
                                                        : ($item->TrialProject->status == 4
                                                            ? 'Trial error'
                                                            : ($item->TrialProject->status == 5
                                                                ? 'Revisi'
                                                                : 'Realese')))) }}

                                        </div>

                                    </td>
                                    <td>
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span wire:ignore.self class="text-muted me-2 fs-7 fw-bold"
                                                    data-kt-countup="true"
                                                    data-kt-countup-value="{{ $item->TrialProject->total_progres }}"
                                                    data-kt-countup-suffix="%">
                                                    0</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div wire:ignore.self class="progress-bar bg-primary" role="progressbar"
                                                    style="width:0%"
                                                    aria-valuenow="{{ $item->TrialProject->total_progres }}"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="/trial-error/{{ $item->TrialProject->slug }}"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                                        fill="black"></rect>
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
                    {{ $trial->links('layout.pagination-link') }}
                </div>

            </div>
        </div>
    </div>
</div>

<x-admin-app-layout :title="'Event List'">

    

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.event.create') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Create
                </a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>

                        <th width="25%">Banner Image</th>
                        <th width="25%">Event Name</th>
                        <th width="25%">Start Date</th>
                        <th width="25%">End Date</th>

                        <th width="100%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="">

                                <img class=""
                                    src="{{ !empty($item->banner_image) ? url('storage/event/' . $item->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                    height="40" width="40" alt="">

                            </td>

                            <td class="text-start">{{ $item->event_name }}</td>
                            <td class="text-start">{{ $item->start_date }}</td>
                            <td class="text-start">{{ $item->end_date }}</td>

                            <td>

                                <a href="{{ route('admin.event.edit', $item->id) }}" class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                <a href="{{ route('admin.event.destroy', $item->id) }}" class="delete">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>


                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>

    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush

</x-admin-app-layout>

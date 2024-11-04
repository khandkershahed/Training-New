<x-app-layout :title="'Registered Events'">

    <div class="col-xl-12">
        <div class="card card-flush">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <span class="text-gray-500 pt-1 fw-semibold fs-2">Event Registration Information</span>
                </div>
            </div>

            <div class="card-body pt-0">
                <table id="kt_datatable_example_5"
                    class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th width="5%">No</th>
                            <th>Event Name</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>Event Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold text-gray-600">

                        @foreach ($eventregs as $key => $item)
                            <tr>
                                <td class="text-start">{{ $key + 1 }}</td>

                                <td class="text-start">{{ optional($item->events)->event_name }}</td>
                                <td class="text-start">
                                    {{ optional($item->events)->start_date ? \Carbon\Carbon::parse($item->events->start_date)->format('d-M-Y') : '' }}
                                </td>

                                <td class="text-start">{{ optional($item->events)->start_time }}</td>
                                <td class="text-start">{{ optional($item->events)->event_type }}</td>


                                <td class="text-start">
                                    <a href="#" class="view">
                                        <i class="bi bi-pencil text-primary"></i>
                                    </a>
                                </td>


                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>

<x-admin-app-layout :title="'Registration'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>

            <div class="card-toolbar">

                <a href="" class="btn btn-light-danger ms-2 rounded-2">
                     Unpaid
                </a>

                <a href="" class="btn btn-light-primary rounded-2 ms-2">
                     Pending
                </a>

                <a href="" class="btn btn-light-info rounded-2 ms-2">
                    Paid
               </a>


            </div>

        </div>
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr>
                        <th width="8%">No</th>
                        <th width="5%">Name</th>
                        <th width="10%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="25%">Course Name</th>
                        <th width="15%">Register Date</th>
                        <th width="15%">Payment Method</th>
                        <th width="15%">Transcation</th>
                        <th width="18%">Status</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($registrations as $key => $registration)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $registration->name }}</td>
                            <td class="text-start">{{ $registration->email }}</td>
                            <td class="text-start">{{ $registration->phone }}</td>
                            <td class="text-start">{{ optional($registration->courseName)->name }}</td>
                            <td class="text-start">
                                {{ \Carbon\Carbon::parse($registration->course_register_date)->format('F j, Y') }}
                            </td>

                            <td class="text-start">{{ $registration->payment_method }}</td>
                            <td class="text-start">{{ $registration->transcation_id }}</td>

                            <td>
                                @if ($registration->payment_method == null)
                                    <a href="javascript:;" class="btn btn-danger btn-sm text-light">
                                        Unpaid
                                    </a>
                                @else
                                    @if ($registration->payment_type == 'paid')
                                        <a href="javascript:;" class="btn btn-success btn-sm text-light">
                                            Paid
                                        </a>
                                    @else
                                        <a href="{{ route('registration.paid', $registration->id) }}"
                                            class="btn btn-warning btn-sm text-dark">
                                            Pending
                                        </a>
                                    @endif
                                @endif
                            </td>


                            <td>
                                

                                <a href="{{ route('admin.delete.registration', $registration->id) }}">
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

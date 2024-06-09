<x-admin-app-layout :title="'What we Do Page'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.whatwedo.create') }}" class="btn btn-light-primary rounded-2">
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
            <table class="bannersDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_datatable_example_1">
                <thead>
                    <tr>
                        <th width="5%">SL</th>
                        <th width="70%">Number Of Template</th>
                        <th width="10%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @php
                        $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                    @endphp

                    @if ($whatWeDoPages)
                        @foreach ($whatWeDoPages as $key => $whatWeDoPage)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ isset($words[$key]) ? Str::ucfirst($words[$key]) . ' ' . 'Template' : 'Number out of range' }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.whatwedo.edit', [$whatWeDoPage->id]) }}"
                                        class="text-primary">
                                        <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                    </a>
                                    <a href="{{ route('admin.whatwedo.destroy', [$whatWeDoPage->id]) }}"
                                        class="text-danger delete">
                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>

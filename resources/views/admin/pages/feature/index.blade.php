<x-admin-app-layout :title="'Feature List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.feature.create') }}" class="btn btn-light-primary rounded-2">
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
            <table class="bannersDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <thead>
                    <tr>
                        <th width="3%">Id</th>
                        <th width="8%">Logo</th>
                        <th width="40%">Title</th>
                        <th width="40%">Header</th>
                        <th width="9%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @if ($features)
                        @foreach ($features as $key => $feature)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td class="text-center"><img class="rounded-circle"
                                        src="{{ asset('storage/thumb/' . $feature->logo) }}"
                                        height="25" width="25" alt=""></td>
                                <td class="text-start">{{ $feature->title }}</td>
                                <td class="text-start"><span title="{!! $feature->header !!}">{!! implode(' ', array_slice(str_word_count($feature->header, 1), 0, 10)) !!}</span></td>
                                <td>
                                    <a href="{{ route('admin.feature.edit', $feature->id) }}"
                                        class="text-primary"> edit
                                        <i
                                            class="fas fa-pen-to-square dash-icons"></i>
                                    </a>
                                    <a href="{{ route('admin.feature.destroy', [$feature->id]) }}"
                                        class="text-danger delete"> Delete
                                        <i class="fas fa-trash dash-icons"></i>
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

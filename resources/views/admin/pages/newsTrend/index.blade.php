<x-admin-app-layout :title="'News and Trend List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.news-trend.create') }}" class="btn btn-light-primary rounded-2">
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
                <thead class="table_header_bg">
                    <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                        <th width="5%">Sl</th>
                        <th width="20%">Title</th>
                        <th width="35%">Header</th>
                        <th width="20%">Author</th>
                        <th width="10%">Banner Image</th>
                        <th class="text-center" width="10%">Action</th>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @if ($newsTrends)
                        @foreach ($newsTrends as $newsTrend)
                            <tr class="odd">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $newsTrend->title }}</td>
                                <td>
                                    {{ $newsTrend->header }}
                                </td>
                                <td>{{ $newsTrend->author }}
                                </td>
                                <td>
                                    <img class="img-fluid rounded-circle" width="35px"
                                        src="{{ !empty($newsTrend->banner_image) ? asset('storage/' . $newsTrend->banner_image) : asset('storage/main/no-image-available.png') }}"
                                        alt="{{ $newsTrend->title }} Logo">
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    
                                    <a href="{{ route('admin.news-trend.edit', $newsTrend->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.news-trend.destroy', $newsTrend->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                        data-kt-docs-table-filter="delete_row">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
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




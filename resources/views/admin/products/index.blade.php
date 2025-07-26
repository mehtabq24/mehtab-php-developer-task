@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <!-- Data Table start -->
                <div class="row">
                    <!-- Default Datatable start -->
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="app-datatable-default overflow-auto">
                                    <table id="example" class="display app-data-table default-data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Company</th>
                                            <th>City</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($enquiries as $enquiry)
                                            <tr>
                                                <td>{{ $enquiry->first_name }} {{ $enquiry->last_name }}</td>
                                                <td><span class="badge text-light-primary">{{ $enquiry->designation }}</span></td>
                                                <td>{{ $enquiry->company_name }}</td>
                                                <td>{{ $enquiry->city }}</td>
                                                <td>{{ $enquiry->email }}</td>
                                                <td>{{ $enquiry->phone }}</td>
                                                <td>
                                                    <span class="badge 
                                                        @if($enquiry->status == 'new') bg-info
                                                        @elseif($enquiry->status == 'in_progress') bg-warning
                                                        @elseif($enquiry->status == 'completed') bg-success
                                                        @elseif($enquiry->status == 'spam') bg-danger
                                                        @endif">
                                                        {{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}
                                                    </span>
                                                </td>
                                                <td>{{ $enquiry->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                                        <i class="ti ti-edit text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- Pagination Links --}}
                                <div class="mt-3">
                                    {{ $enquiries->links() }}
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Table end -->
            </div>
@endsection
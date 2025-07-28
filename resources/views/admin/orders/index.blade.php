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
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Total</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                            <th>Placed On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orders as $order)
                                        <tr>
                                            <td>#{{ $order->id }}</td>
                                            <td>{{ $order->user->name ?? 'N/A' }}</td>
                                            <td>${{ number_format($order->total, 2) }}</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ ucfirst($order->status) }}</td>
                                            <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                            <td><a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary">View</a></td>
                                        </tr>
                                        @empty
                                        <tr><td colspan="7" class="text-center">No orders found.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{-- Pagination Links --}}
                                <div class="mt-3">
                                        {{ $orders->links() }}
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Table end -->
            </div>
@endsection
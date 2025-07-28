@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <!-- Data Table start -->
                <div class="row">
                    <!-- Default Datatable start -->
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <h2 class="mb-4">Order #{{ $order->id }} Details</h2>
                                    <div class="mb-4">
                                        <strong>User:</strong> {{ $order->user->name ?? 'N/A' }} <br>
                                        <strong>Total:</strong> ${{ number_format($order->total, 2) }} <br>
                                        <strong>Payment Method:</strong> {{ $order->payment_method }} <br>
                                        <strong>Payment ID:</strong> {{ $order->payment_id ?? 'N/A' }} <br>
                                        <strong>Status:</strong> {{ ucfirst($order->payment_status) }} <br>
                                        <strong>Order Date:</strong> {{ $order->created_at->format('d M Y, h:i A') }} <br>
                                    </div>
                                    </div>
                                <div class="app-datatable-default overflow-auto">
                                    <table id="example" class="display app-data-table default-data-table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price ($)</th>
                                                <th>Quantity</th>
                                                <th>Subtotal ($)</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($order->items as $item)
                                                <tr>
                                                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                                                    <td>{{ number_format($item->price, 2) }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ number_format($item->price * $item->quantity, 2) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Table end -->
            </div>
@endsection
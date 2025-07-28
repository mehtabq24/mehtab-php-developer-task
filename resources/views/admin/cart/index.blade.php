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
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($cartItems as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>${{ number_format($item->product->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No items in cart</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4" class="text-end">Total</th>
                                            <th>${{ number_format($total, 2) }}</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                {{-- Pagination Links --}}
                                <div class="mt-3">
                                    {{-- {{ $cartItems->links() }} --}}
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Table end -->
            </div>
@endsection
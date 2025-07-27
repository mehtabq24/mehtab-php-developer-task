@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <!-- Data Table start -->
                <div class="row">
                    <!-- Default Datatable start -->
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="mt-4 d-flex justify-content-end gap-2 flex-column flex-sm-row text-end">
                                    <a href="{{ route('admin.products.create') }}" class="btn btn-light-primary" style="margin-right: 50px;">Add Product</a>
                                </div>
                                <div class="app-datatable-default overflow-auto">
                                    <table id="example" class="display app-data-table default-data-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price (₹)</th>
                                            <th>Images</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @forelse($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ number_format($product->price, 2) }}</td>
                                                <td>
                                                    @foreach($product->images as $image)
                                                        <img src="{{ asset('storage/' . $image->image_path) }}" width="50" height="50" class="rounded" />
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                                        @csrf @method('DELETE')
                                                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="5">No products found.</td></tr>
                                        @endforelse
                                        </tbody>
                                </table>

                                {{-- Pagination Links --}}
                                <div class="mt-3">
                                    {{ $products->links() }}

                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Table end -->
            </div>
@endsection
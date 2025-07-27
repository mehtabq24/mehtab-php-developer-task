@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <!-- Breadcrumb start -->
                <div class="row m-1">
                    <div class="col-12 ">
                        <h4 class="main-title">Update Product</h4>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <!-- Add Product start -->
                <div class="row">
                    <div class="col-lg-8 col-xxl-9">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="app-product-section">
                                    <div class="main-title">
                                        <h6>General Information</h6>

                                            {{-- Show validation errors --}}
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            
                                    </div>
                                    <div>
                                                                                    <div class="mb-3">
                                                <label class="form-label">Product Name</label>
                                                <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control">
                                            </div>
                                          
                                                                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text b-r-left" id="basic-addon1">$</span>
                                                       <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control">
                                                    </div>
                                                                                        </div>
                                              <div class="mb-3">
                                                <label class="form-label">Product Description</label>
                                                <input class="form-control" type="text" name="description" value="{{ old('description', $product->description) }}">
                                            </div>

                                    </div>

                                     <div class="col-12">
                                                <div class="mt-4 d-flex justify-content-end gap-2 flex-column flex-sm-row text-end">
                                                    <a href="{{ route('admin.products.index') }}" class="btn btn-light-secondary">Discard</a>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="app-product-section">
                                    <div class="main-title">
                                        <h6>Product Media</h6>
                                    </div>
                                    <div class="mb-3">
                                            <label>Existing Images</label><br>
                                            @foreach($product->images as $image)
                                                <img src="{{ asset('storage/' . $image->image_path) }}" width="70" height="70" class="me-2 mb-2 rounded" />
                                            @endforeach
                                        </div>

                                    <div class="mb-5">
                                        <label>Add New Images (optional)</label>
                                        <input type="file" name="images[]" multiple class="form-control">
                                    </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- Add Product end -->
            </div>

@endsection
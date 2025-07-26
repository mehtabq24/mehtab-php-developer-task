@extends('admin.layouts.app')

@section('content')
            <div class="container-fluid">
                <!-- Breadcrumb start -->
                <div class="row m-1">
                    <div class="col-12 ">
                        <h4 class="main-title">Add Product</h4>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <!-- Add Product start -->
                <div class="row">
                    <div class="col-lg-8 col-xxl-9">
                        <div class="card">
                            <div class="card-body">
                                <form class="app-form" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
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
                                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                            </div>
                                          
                                                                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text b-r-left" id="basic-addon1">$</span>
                                                        <input aria-describedby="basic-addon1" aria-label="Username" type="number" step="0.01" name="price" value="{{ old('price') }}" class="form-control b-r-right" type="text">
                                                    </div>
                                                                                        </div>
                                              <div class="mb-3">
                                                <label class="form-label">Brand Name</label>
                                                <input class="form-control" type="text">
                                            </div>

                                    </div>

                                     <div class="col-12">
                                                <div class="mt-4 d-flex justify-content-end gap-2 flex-column flex-sm-row text-end">
                                                    <button class="btn btn-light-secondary" type="button">Discard
                                                    </button>
                                                    <button class="btn btn-primary" type="submit">Add Product</button>
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

                                    <div>
                                        <input class="app-file-upload addproduct" data-allow-reorder="true" id="addProduct" name="images[]" multiple="multiple" type="file">
                                    </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- Add Product end -->
            </div>
@endsection
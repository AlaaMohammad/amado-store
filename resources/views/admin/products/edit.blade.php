@extends('layouts.admin.app')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    @extends('layouts.admin.app')
                    @section('content')
                        <main>
                            <div class="container-fluid px-4">
                                <h1 class="mt-4">Dashboard</h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">Products List</li>
                                </ol>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Products List
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('products.update',$product)}}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           value="{{$product->name}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="description"
                                                       class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="description" class="form-control"
                                                              id="description"> {{$product->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" value="{{$product['price']}}"
                                                           class="form-control" id="price">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                    <input type="number" value="{{$product['quantity']}}"
                                                           class="form-control" id="quantity">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="imgSrc" class="col-sm-2 col-form-label">Image Src</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{$product['img_src']}}"
                                                           class="form-control" id="imgSrc">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{$product['slug']}}" class="form-control"
                                                           id="slug">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="slug" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control col-form-select"
                                                            aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->slug}}" @if($category->slug) selected @endif>{{$category->category}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="submit" value="Update" class="btn btn-primary"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>
                    @endsection


                </div>
            </div>
        </div>
    </main>
@endsection



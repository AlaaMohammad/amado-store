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
                    <table id="datatables">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><img src="{{$product->img_src}}"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>@if ($product->quantity > 0)<i class='text-success fa fa-circle'></i> In Stock</p> @else <p><i class='text-danger fa fa-circle'></i> Out of Stock</p>  @endif</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td><a class="btn btn-primary" href="{{route('products.edit',$product)}}">Edit</a></td>
                            <td>
                                <form action="{{route('products.destroy',$product)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="delete">
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection



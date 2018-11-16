@extends('admin.layout.app')
@section('content')
    <a class="button" href="/admin/products/create">Add Product</a>
    <div>Product List</div>
    <ul>
        @foreach ($products as $product)
            <li><a href="/admin/products/{{$product->id}}">{{$product->name}}</a></li>
        @endforeach
    </ul>
@endsection
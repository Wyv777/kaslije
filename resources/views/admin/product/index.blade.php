@extends('admin.layout.app')
@section('content')
    <a class="button" href="/admin/categories/create">Add Category</a>
    <div>Category List</div>
    <ul>
        @foreach ($categories as $category)
            @include('admin.category.categorylist',['category' => $category])
        @endforeach
    </ul>
@endsection
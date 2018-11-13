@extends('admin.layout.app')
@section('content')
    <div>Category detail</div>
    <div class="field">
        <label class="label">Category Name</label>
        <div class="control">
            <input class="input" type="text" name="name" value="{{ $category->name }}" disabled>
        </div>
    </div>
    <div class="field">
        <label class="label">Active Status</label>
        <div class="control">
            <select disabled>
                <option value="1">{{ $category->active_status? 'Active': 'Inactive' }}</option>
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">Category Parent</label>
        <div class="control">
            <select disabled>
                <option>
                    {{$category->parent_name}}
                </option>
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">Slug</label>
        <div class="control">
            <input class="input" type="text" value="{{ $category->slug }}" disabled>
        </div>
    </div>
    <a href="/admin/categories/{{$category->id}}/edit">Edit category</a>
@endsection
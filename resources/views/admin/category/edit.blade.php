@extends('admin.layout.app')
@section('content')
    <div>Create New category</div>
    {{ Form::open(array('url' => '/admin/categories')) }}
        <div class="field">
            <label class="label">Category Name</label>
            <div class="control">
                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" placeholder="name">
            </div>
            @if ($errors->has('name'))
                <p class="help is-danger">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
        <div class="field">
            <label class="label">Active Status</label>
            <div class="control">
                <select name="is_active">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>
        <div class="field">
            <label class="label">Category Parent</label>
            <div class="control">
                <select name="parent_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="field">
            <label class="label">Slug</label>
            <div class="control">
                <input class="input {{ $errors->has('slug') ? 'is-danger' : '' }}" type="text" name="slug" placeholder="slug">
            </div>
            @if ($errors->has('slug'))
                <p class="help is-danger">
                    {{ $errors->first('slug') }}
                </p>
            @endif
        </div>
        <button type="submit">Create Category</button>
    {{ Form::close() }}
@endsection
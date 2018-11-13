@extends('admin.layout.app')
@section('content')
    @if (Session::has('message'))
        <div>{{ Session::get('message') }}</div>
    @endif
    <div>Create New category</div>
    {{ Form::open(array('url' => '/admin/categories/'.$category->id, 'method' => 'put')) }}
        <div class="field">
            <label class="label">Category Name</label>
            <div class="control">
                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" placeholder="name" value="{{ $category->name }}">
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
                    <option value="1" {{ $category->is_active == '1'? 'selected':'' }}>Active</option>
                    <option value="0" {{ $category->is_active == '0'? 'selected':'' }}>Inactive</option>
                </select>
            </div>
        </div>
        <div class="field">
            <label class="label">Category Parent</label>
            <div class="control">
                <select name="parent_id">
                    @foreach ($categories as $c)
                        @if ($c->name != $category->name)
                            <option value="{{$c->id}}" {{$category->parent_id == $c->id? 'selected':''}}>
                                {{$c->name}}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="field">
            <label class="label">Slug</label>
            <div class="control">
                <input class="input {{ $errors->has('slug') ? 'is-danger' : '' }}" type="text" name="slug" placeholder="slug" value='{{$category->slug}}'>
            </div>
            @if ($errors->has('slug'))
                <p class="help is-danger">
                    {{ $errors->first('slug') }}
                </p>
            @endif
        </div>
        <button type="submit">Update Category</button>
    {{ Form::close() }}
    {{ Form::open(array('url' => '/admin/categories/'.$category->id, 'method' => 'delete', 'class' => 'delete')) }}
        <input type="submit" value="Delete Category">
    {{ Form::close() }}
@endsection

@section('script')
    <script>
        $(".delete").on("submit", function(){
            return confirm("Are you sure?");
        });
    </script>
@endsection
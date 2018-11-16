@extends('admin.layout.app')
@section('content')
    <div>Create New Product</div>
    {{ Form::open(array('url' => '/admin/products', 'enctype' => 'multipart/form-data')) }}
        <div class="field">
            <label class="label">Product Name</label>
            <div class="control">
                <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" placeholder="name">
            </div>
            @if ($errors->has('name'))
                <p class="help is-danger">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
        <div class="image is-128x128 imagePreview" style="background-image:url(''); border: 1px solid black;"></div>
        <div class="field">
            <span class="small section-34">Upload product picture <br/>(Max: 2MB, Format: JPG, JPEG, PNG)</span>
            <div>
                <input style="display:none;" id="uploadFile" type="file" name="image_url" accept=".jpg, .png, .jpeg">
                <!-- error for image -->
                @if ($errors->has('image_url'))
                    <p class="help is-danger">
                        {{ $errors->first('image_url') }}
                    </p>
                @endif
            </div>
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
            <label class="label">Category</label>
            <div class="control">
                <select name="category_id">
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
        <div class="field">
            <label class="label">Tokopedia Link</label>
            <div class="control">
                <input class="input" type="text" name="tokopedia_link" placeholder="Tokopedia link">
            </div>
        </div>
        <div class="field">
            <label class="label">Bukalapak Link</label>
            <div class="control">
                <input class="input" type="text" name="bukalapak_link" placeholder="Bukalapak link">
            </div>
        </div>
        <div class="field">
            <label class="label">Shopee Link</label>
            <div class="control">
                <input class="input" type="text" name="shopee_link" placeholder="Shopee link">
            </div>
        </div>
        <button type="submit">Create Product</button>
    {{ Form::close() }}
@endsection
@section('script')
<script>
    $(function() {
        $(".imagePreview").click(function(e) {
            $("#uploadFile").click();
        });
        $("#uploadFile").on("change", function()
        {
            console.log("success");
            let files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                let reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                reader.onloadend = function(){ // set image data as background of div
                    $(".imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });

    });

</script>
@endsection
@extends('admin.layout.app')
@section('content')
    <div>Product Detail</div>
    <div class="field">
        <label class="label">Product Name</label>
        <div class="control">
            <input class="input" type="text" name="name" value="{{ $product->name }}" disabled>
        </div>
    </div>
    <img src="{{ Storage::url($product->image_url) }}">
    <div class="image is-128x128 imagePreview" style="background-image:url('{{ Storage::url($product->image_url) }}'); border: 1px solid black;"></div>
    <div class="field">
        <label class="label">Active Status</label>
        <div class="control">
            <select disabled>
                <option value="1">{{ $product->active_status? 'Active': 'Inactive' }}</option>
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">Category</label>
        <div class="control">
            <select disabled>
                <option>
                    {{ $product->category_name }}
                </option>
            </select>
        </div>
    </div>
    <div class="field">
        <label class="label">Slug</label>
        <div class="control">
            <input class="input" type="text" name="slug" value="{{ $product->slug }}" disabled>
        </div>
    </div>
    <div class="field">
        <label class="label">Tokopedia Link</label>
        <div class="control">
            <input class="input" type="text" name="tokopedia_link" value="{{ $product->tokopedia_link }}" disabled>
        </div>
    </div>
    <div class="field">
        <label class="label">Bukalapak Link</label>
        <div class="control">
            <input class="input" type="text" name="bukalapak_link" value="{{ $product->bukalapak_link }}" disabled>
        </div>
    </div>
    <div class="field">
        <label class="label">Shopee Link</label>
        <div class="control">
            <input class="input" type="text" name="shopee_link" value="{{ $product->shopee_link }}" disabled>
        </div>
    </div>
    <button type="submit">Edit Product</button>
@endsection

<li>
    <a href="/admin/categories/{{$category->id}}">
        {{$category->name}}
    </a>
</li>
 @if (count($category->childrenRecursive) > 0)
     <ul style="margin-left:10px">
       @foreach($category->childrenRecursive as $c)
         @include('admin.category.categorylist', ['category' => $c])
       @endforeach
    </ul>
@endif
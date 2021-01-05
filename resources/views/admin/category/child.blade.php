<option value="{{ $childCategory->id }}" @if ($childCategory->id == $category->parent_id) selected @endif>{{ $parent . $childCategory->name }}</option>
@if ($childCategory->categories)
    @foreach ($childCategory->categories as $child)
        @include('category.child', ['childCategory' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
<option value="{{ $child->id }}" @if ($child->id == $category->parent_id) selected @endif>{{ $parent . $child->name }}</option>
@if ($child->categories)
    @foreach ($child->categories as $child)
        @include('category.child', ['child' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
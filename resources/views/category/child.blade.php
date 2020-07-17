<option value="{{ $child->id }}">{{ $parent . $child->name }}</option>
@if ($child->categories)
    @foreach ($child->categories as $child)
        @include('category.child', ['child' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
<option value="{{ $childCategory->id }}" @if ($childCategory->id == old('category_id')) selected @elseif(isset($post->category) && $post->category_id == $childCategory->id) selected @endif>{{ $parent . $childCategory->name }}</option>
@if ($childCategory->categories)
    @foreach ($childCategory->categories as $child)
        @include('post.category', ['childCategory' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
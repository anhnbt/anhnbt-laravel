<tr>
    <th scope="row" class="text-center">{{ $childCategory->id }}</th>
    <td>
        @if ($childCategory->thumbnail != '')
            <img src="{{ url('storage/thumbnails/' . $childCategory->thumbnail) }}" width="50" class="img-thumbnail" alt="{{ $childCategory->name }}">
        @else
            <img src="{{ url('images/noimage.jpg') }}" width="50" class="img-thumbnail" alt="{{ $childCategory->name }}">
        @endif
    </td>
    <td>{{ $parent . $childCategory->name }}</td>
    <td>{{ $childCategory->description ?? '—' }}</td>
    <td>{{ $childCategory->slug }}</td>
    <td>{{ Carbon\Carbon::parse($childCategory->created_at)->diffForHumans() }}</td>
    <td class="text-center">
        <form action="{{ route('categories.destroy', $childCategory->id) }}" method="POST">
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('categories.show', $childCategory->id) }}" class="btn btn-info text-white" role="button">{{ __('Xem') }}</a>
                <a href="{{ route('categories.edit', $childCategory->id) }}" class="btn btn-secondary" role="button">{{ __('Chỉnh sửa') }}</a>
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">{{ __('Xóa') }}</button>
            </div>
        </form>
    </td>
</tr>
@if ($childCategory->categories)
    @foreach ($childCategory->categories as $child)
        @include('admin.category.child_tr', ['childCategory' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
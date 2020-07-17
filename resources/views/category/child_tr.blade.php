<tr>
    <th scope="row" class="text-center">{{ $child->id }}</th>
    <td>{{ $parent . $child->name }}</td>
    <td>{{ $child->description ?? '—' }}</td>
    <td>{{ $child->slug }}</td>
    <td>{{ Carbon\Carbon::parse($child->created_at)->diffForHumans() }}</td>
    <td class="text-center">
        <form action="{{ route('categories.destroy', $child->id) }}" method="POST">
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('categories.show', $child->id) }}" class="btn btn-info text-white" role="button">{{ __('Xem') }}</a>
                <a href="{{ route('categories.edit', $child->id) }}" class="btn btn-secondary" role="button">{{ __('Chỉnh sửa') }}</a>
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">{{ __('Xóa') }}</button>
            </div>
        </form>
    </td>
</tr>
@if ($child->categories)
    @foreach ($child->categories as $child)
        @include('category.child_tr', ['child' => $child, 'parent' => $parent . "— "])
    @endforeach
@endif
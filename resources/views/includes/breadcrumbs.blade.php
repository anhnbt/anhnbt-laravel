<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/category/' . $post->category->slug) }}">{{ $post->category->name }}</a></li>
    </ol>
</nav>
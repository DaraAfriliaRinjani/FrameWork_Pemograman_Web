<!DOCTYPE html>
<html>
<head>
    <title>Data Posts</title>
</head>
<body>
    <h1>Daftar Post</h1>

    {{-- Form Search --}}
    <form method="GET" action="{{ route('posts.index') }}">
        <input type="text" name="search" placeholder="Cari judul..." value="{{ request('search') }}">
        <button type="submit">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($posts as $index => $post)
        <tr>
            <td>{{ $posts->firstItem() + $index }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
        @endforeach
    </table>

    {{ $posts->links() }}
</body>
</html>

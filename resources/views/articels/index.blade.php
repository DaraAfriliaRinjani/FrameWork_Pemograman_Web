@extends('layouts.app')

@section('content')
<h1>Daftar Artikel</h1>
<a href="{{ route('articles.create') }}">+ Tambah Artikel</a>

<ul>
    @foreach($articles as $article)
        <li>
            <strong>{{ $article->title }}</strong> - {{ $article->content }}
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

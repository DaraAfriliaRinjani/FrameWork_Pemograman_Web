@extends('layouts.app')

@section('content')
<h1>Buat Artikel Baru</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label>Judul</label>
    <input type="text" name="title" required>
    <br>
    <label>Konten</label>
    <textarea name="content" required></textarea>
    <br>
    <button type="submit">Simpan</button>
</form>
@endsection

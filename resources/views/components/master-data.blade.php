{{-- resources/views/components/master-data.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Data Master' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>{{ $title ?? 'Data Master' }}</h3>
        <hr>
        {{-- Ini tempat konten halaman ditampilkan --}}
        {{ $slot }}
    </div>
</body>
</html>

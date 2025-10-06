<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
       Halaman Utama
    </h1>
    <a href="{{ route(name: 'contact.page') }}">Halaman Contact</a>
    <a href="{{ route(name: 'manage.edit') }}">Halaman edit</a>
</body>
</html>
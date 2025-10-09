<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ganjil / Genap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-body text-center">
                <h3 class="mb-3 text-primary">Hasil Parameter Ganjil / Genap</h3>

                <!-- Pesan dari Controller -->
                <div class="alert alert-{{ $alertType }} fs-4 fw-bold">
                    {{ $message }}
                </div>

                <p class="text-muted">Parameter yang dikirim: <strong>{{ $msg }}</strong></p>

                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary mt-3">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>

</body>
</html>

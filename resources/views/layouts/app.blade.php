<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container justify-content-space-between">
                <a class="navbar-brand" href="{{ route('buku.index') }}">Perpustakaan Sekolah</a>
                <div>
                    <a class="navbar-brand" href="{{ route('buku.index') }}">Buku</a>
                    <a class="navbar-brand" href="{{ route('pinjam.index') }}">Peminjaman Buku</a> 
                </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
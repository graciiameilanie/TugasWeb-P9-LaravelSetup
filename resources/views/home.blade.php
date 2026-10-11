<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
</head>
<body>
    <nav>
        <a href="/">Beranda</a> |
        <a href="/about">Tentang</a> |
        <a href="/contact">Kontak</a>
    </nav>

    <h1>{{ $judul }}</h1>
    <p>Halo, saya {{ $nama }}.</p>

    <h3>Mata kuliah semester ini</h3>
    <ul>
        @foreach ($mata_kuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
</body>
</html>
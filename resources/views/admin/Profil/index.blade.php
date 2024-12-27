<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Sekolah</title>
</head>
<body>
    <div class="container">
        <h1>Profil Sekolah</h1>

        <!-- Tombol untuk menambah profil sekolah -->
        <a href="/admin/Profil/create" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">
            Tambah Profil Sekolah
        </a>

        <hr>

        @if($profil->isEmpty())
            <p>Data profil sekolah belum tersedia.</p>
        @else
            @foreach ($profil as $item)
                <div style="border: 1px solid #ccc; margin: 10px; padding: 15px;">
                    <h3>{{ $item->nama_sekolah }}</h3>
                    <p>{{ Str::limit($item->sejarah, 100) }}</p>
                    <a href="{{ route('profil-sekolah.show', $item->id) }}">Lihat Detail</a> |
                    <a href="{{ route('profil-sekolah.edit', $item->id) }}">Edit</a>

                    <!-- Form untuk menghapus -->
                    <form action="{{ route('profil-sekolah.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ini tampilan Guest

    @foreach ($profil as $item)
    <div style="border: 1px solid #ccc; margin: 10px; padding: 15px;">
        <h3>{{ $item->nama_sekolah }}</h3>
        <p>{{ Str::limit($item->sejarah, 100) }}</p>
        <a href="{{ route('guest.show', $item->id) }}">Lihat Detail</a> |

      
    </div>
@endforeach
</body>
</html>
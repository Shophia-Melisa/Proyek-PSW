<form action="{{ route('profil-sekolah.update', $profil->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama_sekolah" value="{{ $profil->nama_sekolah }}" required>
    <textarea name="visi" required>{{ $profil->visi }}</textarea>
    <textarea name="misi" required>{{ $profil->misi }}</textarea>
    <textarea name="sejarah" required>{{ $profil->sejarah }}</textarea>
    <textarea name="struktur_organisasi" required>{{ $profil->struktur_organisasi }}</textarea>
    <textarea name="tugas_tanggungjawab" required>{{ $profil->tugas_tanggungjawab }}</textarea>
    <button type="submit">Perbarui</button>
</form>

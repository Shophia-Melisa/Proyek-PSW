<form action="{{ route('profil-sekolah.store') }}" method="POST">
    @csrf
    <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" required>
    <textarea name="visi" placeholder="Visi" required></textarea>
    <textarea name="misi" placeholder="Misi" required></textarea>
    <textarea name="sejarah" placeholder="Sejarah" required></textarea>
    <textarea name="struktur_organisasi" placeholder="Struktur Organisasi" required></textarea>
    <textarea name="tugas_tanggungjawab" placeholder="Tugas dan Tanggung Jawab" required></textarea>
    <button type="submit">Simpan</button>
</form>

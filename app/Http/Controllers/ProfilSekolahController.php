<?php
namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::all();
        return view('admin.Profil.index', compact('profil'));
    }

    public function create()
    {
        return view('admin.Profil.create'); // Sesuaikan case folder jika menggunakan huruf kecil.
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'sejarah' => 'required|string',
            'struktur_organisasi' => 'required|string',
            'tugas_tanggungjawab' => 'required|string',
        ]);

        ProfilSekolah::create($request->all());

        return redirect()->route('admin.Profil.index')->with('success', 'Profil sekolah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $profil = ProfilSekolah::find($id);

        if (!$profil) {
            // Redirect jika data tidak ditemukan
            return redirect()->route('admin.Profil.index')->with('error', 'Profil tidak ditemukan.');
        }

        return view('admin.Profil.show', compact('profil'));
    }

    public function edit($id)
    {
        $profil = ProfilSekolah::find($id);

        if (!$profil) {
            // Redirect jika data tidak ditemukan
            return redirect()->route('admin.Profil.index')->with('error', 'Profil tidak ditemukan.');
        }

        return view('admin.Profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'sejarah' => 'required|string',
            'struktur_organisasi' => 'required|string',
            'tugas_tanggungjawab' => 'required|string',
        ]);

        $profil = ProfilSekolah::find($id);

        if (!$profil) {
            return redirect()->route('admin.Profil.index')->with('error', 'Profil tidak ditemukan.');
        }

        $profil->update($request->all());

        return redirect()->route('admin.Profil.index')->with('success', 'Profil sekolah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = ProfilSekolah::find($id);

        if (!$profil) {
            return redirect()->route('admin.Profil.index')->with('error', 'Profil tidak ditemukan.');
        }

        $profil->delete();

        return redirect()->route('admin.Profil.index')->with('success', 'Profil sekolah berhasil dihapus.');
    }
}

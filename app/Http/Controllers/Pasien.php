<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Pasien extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/pasien');
        $pasien = $response->json();

        return view('pasien/index', [
            'pasien' => $pasien['data_pasien'],
        ]);
    }

    public function create()
    {
        return view('pasien.tambah');
    }

    public function store(Request $request)
    {
        // Validasi sederhana
        $validated = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
        ]);

        // Kirim data ke API CodeIgniter
        $response = Http::post('http://localhost:8080/pasien', $validated);

        if ($response->successful()) {
            return redirect()->route('pasien.index')->with('success', 'pasien berhasil ditambahkan.');
        } else {
            return back()->withErrors(['error' => 'Gagal menyimpan pasien.']);
        }
    }

    public function destroy($id)
    {
        // Hapus data pasien berdasarkan ID
        $response = Http::delete("http://localhost:8080/pasien/$id");

        if ($response->successful()) {
            return redirect()->route('pasien.index')->with('success', 'pasien berhasil dihapus.');
        } else {
            return redirect()->route('pasien.index')->with('error', 'Gagal menghapus pasien.');
        }
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/pasien/$id");
        $pasien = $response->json();

        return view('pasien.edit', ['pasien' => $pasien['data_pasien']]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['nama', 'alamat', 'tanggal_lahir', 'jenis_kelamin']);

        Http::put("http://localhost:8080/pasien/$id", $data);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diubah');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Obat extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/obat');
        $obat = $response->json();

        return view('obat/index', [
            'obat' => $obat['data_obat'],
        ]);
    }

    public function create()
    {
        return view('obat.tambah');
    }

    public function store(Request $request)
    {
        // Validasi sederhana
        $validated = $request->validate([
            'nama_obat' => 'required|string',
            'kategori' => 'required|string',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        // Kirim data ke API CodeIgniter
        $response = Http::post('http://localhost:8080/obat', $validated);

        if ($response->successful()) {
            return redirect()->route('obat.index')->with('success', 'obat berhasil ditambahkan.');
        } else {
            return back()->withErrors(['error' => 'Gagal menyimpan obat.']);
        }
    }

    public function destroy($id)
    {
        // Hapus data obat berdasarkan ID
        $response = Http::delete("http://localhost:8080/obat/$id");

        if ($response->successful()) {
            return redirect()->route('obat.index')->with('success', 'obat berhasil dihapus.');
        } else {
            return redirect()->route('obat.index')->with('error', 'Gagal menghapus obat.');
        }
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/obat/$id");
        $obat = $response->json();

        return view('obat.edit', ['obat' => $obat['data_obat']]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['nama_obat', 'kategori', 'stok', 'harga']);

        Http::put("http://localhost:8080/obat/$id", $data);

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diubah');
    }
}

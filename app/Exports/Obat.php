<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Http;

class Obat implements FromView
{
    public function view(): View
    {
        $response = Http::get('http://localhost:8080/obat');
        $obat = $response->json()['data_obat'];

        return view('exports.obat', [
            'obat' => $obat
        ]);
    }
}

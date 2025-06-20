<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Http;

class Pasien implements FromView
{
    public function view(): View
    {
        $response = Http::get('http://localhost:8080/pasien');
        $pasien = $response->json()['data_pasien'];

        return view('exports.pasien', [
            'pasien' => $pasien
        ]);
    }
}

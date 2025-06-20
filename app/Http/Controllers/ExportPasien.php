<?php
namespace App\Http\Controllers;

use App\Exports\Pasien;
use Maatwebsite\Excel\Facades\Excel;

class ExportPasien extends Controller
{
    public function export()
    {
        return Excel::download(new Pasien, 'daftar_pasien.xlsx');
    }
}

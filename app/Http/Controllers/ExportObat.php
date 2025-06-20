<?php
namespace App\Http\Controllers;

use App\Exports\Obat;
use Maatwebsite\Excel\Facades\Excel;

class ExportObat extends Controller
{
    public function export()
    {
        return Excel::download(new Obat, 'daftar_obat.xlsx');
    }
}

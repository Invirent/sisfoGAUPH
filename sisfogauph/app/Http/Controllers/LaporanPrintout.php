<?php

namespace App\Http\Controllers;

use App\Models\replacement;
use Illuminate\Http\Request;
use PDF;

class LaporanPrintout extends Controller
{
    public function index(){
        $rpl = replacement::all();
        return view('laporan/replacement',['replacement'=>$rpl]);

    }

    public function cetak_pdf(){
        $rpl = replacement::all();
        $pdf = PDF::loadview('laporan/replacementpdf',['replacement'=>$rpl]);

        return $pdf->download('laporan-replacement.pdf');
    }
}
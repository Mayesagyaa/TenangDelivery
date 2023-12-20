<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {   
       return view('index');
    }

    public function hitung(Request $request)
    {   
        $validate = $request->validate([
            'lokasi' => 'required',
            'tujuan' => 'required'
        ]);

        if(!$validate){
            return redirect('/perhitungan');
        }

        $lokasi = $request-> lokasi;
        $tujuan = $request-> tujuan;

        // Inisialisasi variabel $jarak dengan nilai awal 0
        $jarak = 0;

        // Logika perhitungan jarak dan biaya
        $biaya = 0; // Inisialisasi biaya

        if ($lokasi == 'jl_sono_kembang' && $tujuan == 'margonda') {
            $jarak = 1.3; // Jarak dari Jl. Sono Kembang ke Margonda
            $biaya = 17000; // Biaya sesuai dengan jarak 0-10 km
        } elseif ($lokasi == 'kelapa_dua' && $tujuan == 'cilodong') {
            $jarak = 13.5; // Jarak dari Margonda ke Cilodong (contoh)
            $biaya = 22000; // Biaya sesuai dengan jarak 11-15 km (contoh)
        } elseif ($lokasi == 'kelapa_dua' && $tujuan == 'margonda') {
            $jarak = 5.4; // Jarak dari Margonda ke Cilodong (contoh)
            $biaya = 17000; // Biaya sesuai dengan jarak 11-15 km (contoh)
        } elseif ($lokasi == 'jl_sono_kembang' && $tujuan == 'cilodong') {
            $jarak = 11.3; // Jarak dari Margonda ke Cilodong (contoh)
            $biaya = 22000; // Biaya sesuai dengan jarak 11-15 km (contoh)
        } else {
            return response("
                <script>
                    alert('Kombinasi lokasi dan tujuan tidak valid.');

                    window.location.herf = '/perhitungan';
                </script>
            ");   
        }

        return view('index')->with([
            'jarak' => $jarak,
            'biaya' => $biaya
        ]);
    }
}

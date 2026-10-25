<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloodReportController extends Controller
{
    /**
     * Menampilkan halaman form pelaporan banjir.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Memproses data yang dikirimkan melalui form POST dan menampilkan halaman konfirmasi.
     */
    public function store(Request $request)
    {
        // Validasi data input sederhana
        $validated = $request->validate([
            'nama'            => 'required|string|max:255',
            'kecamatan'       => 'required|string|max:255',
            'desa'            => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric|min:1',
            'keterangan'      => 'nullable|string',
        ]);

        // Karena tanpa database, data langsung dikirim ke view konfirmasi
        return view('confirmation', ['report' => $validated]);
    }
}
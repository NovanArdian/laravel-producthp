<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::all(); // Mengambil semua data stok
        return view('stock.stok', compact('stok'));
    }

    public function create()
    {
        return view('stock.damel'); // Menampilkan form tambah stok
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'seri' => 'required',
            'ram' => 'required',
            'stok' => 'required|integer',
        ]);

        Stok::create($request->all()); // Menyimpan data stok baru
        return redirect()->back()->with('success', 'Stok berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $stok =  Stok::find($id);
      
        return view('stock.costom', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'seri' => 'required',
            'ram' => 'required',
            'stok' => 'required|integer',
        ]);

        Stok::where('id', $id)->update([
            'nama' => $request->nama,
            'seri' => $request->seri,
            'ram' => $request->ram,
            'stok' => $request->stok,
        ]);

        return redirect()->back()->with('success', 'Berhasil Mengedit pegawai!');
    }

    public function destroy($id)
    {
        Stok::findOrFail($id)->delete(); // Menghapus stok
        return redirect()->back()->with('success', 'Stok berhasil dihapus.');
    }
}

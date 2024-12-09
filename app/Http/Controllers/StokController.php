<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StokController extends Controller
{
    public function index()
    {
        //agar setiap user beda beda data 
        $stok = Stok::where('user_id', Auth::id())->get();
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
         // agar setiap user beda beda data
        Stok::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'seri' => $request->seri,
            'ram' => $request->ram,
            'stok' => $request->stok,
        ]);
        return redirect()->back()->with('success', 'Stok berhasil ditambahkan.');
    }

    public function edit($id)
    {
        //agar setiap user beda beda data
        $stok = Stok::where('user_id', Auth::id())->findOrFail($id);
      
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

        //agar setiap user beda beda data

        $stok = Stok::where('user_id', Auth::id())->findOrFail($id);
        $stok->update([
            'nama' => $request->nama,
            'seri' => $request->seri,
            'ram' => $request->ram,
            'stok' => $request->stok,
        ]);

        return redirect()->back()->with('success', 'Berhasil Mengedit pegawai!');
    }

    public function destroy($id)
    {
       // Menghapus stok sesuai user berbeda beda
        Stok::where('user_id', Auth::id())->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Stok berhasil dihapus.');
    }
}

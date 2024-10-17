<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Ambil semua data employee dari database
        $employee = Employee::orderBy('id', 'asc')->get(); // Urutkan berdasarkan ID
    return view('karyawan.data', compact('employee'));
    }

    public function create()
    {
        return view('karyawan.bikin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        Employee::create($request->all());
        return redirect()->back()->with('success', 'Pegawai berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $employee =  Employee::find($id);
        return view('karyawan.rubah', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        Employee::where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);

        return redirect()->back()->with('success', 'Berhasil Mengedit pegawai!');
    }


    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data akun!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = Pasien::orderBy('nama')->paginate(5);
        return view('index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = Pasien::orderBy('penyakit')->get();
        return view('tambah-pasien', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'penyakit' => 'required',
        ]);

        Pasien::create($validateData);
        return redirect()->route('index')->with('message', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'penyakit' => 'required',
        ]);

        $pasien->update($validateData);
        return redirect()->route('index')->with('message', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete($pasien->id);
        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}

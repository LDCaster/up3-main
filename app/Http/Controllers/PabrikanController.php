<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pabrikan;

class PabrikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pabrik = Pabrikan::get();

        return view('Pabrikan.index', [
            "title" => "Data Pabrikan",
            "pabrikan" => $pabrik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_vendor'   => 'max:255',
            'nama_direktur'   => 'max:255',
            'jabatan'   => 'max:255',
            'alamat'   => 'max:255',
            'email'   => 'max:255',
            'no_telp'   => 'max:255',
            'no_notaris'   => 'max:255',
            'no_khs'   => 'max:255',
            'nama_pengadaan'   => 'max:255',
            'nama_rekening'   => 'max:255',
            'nama_bank'   => 'max:255',
            'cabang'   => 'max:255',
            'no_rekening'   => 'max:255',
            'no_type'   => 'max:255',
            'no_spm'   => 'max:255',
        ]);

        Pabrikan::create($validatedData);
        return back()->with([
            'message' => 'Data berhasil Di tambah',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Pabrikan::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_vendor'   => 'max:255',
            'nama_direktur'   => 'max:255',
            'jabatan'   => 'max:255',
            'alamat'   => 'max:255',
            'email'   => 'max:255',
            'no_telp'   => 'max:255',
            'no_notaris'   => 'max:255',
            'no_khs'   => 'max:255',
            'nama_pengadaan'   => 'max:255',
            'nama_rekening'   => 'max:255',
            'nama_bank'   => 'max:255',
            'cabang'   => 'max:255',
            'no_rekening'   => 'max:255',
            'no_type'   => 'max:255',
            'no_spm'   => 'max:255',
        ]);
        Pabrikan::where('id', $id)->update($validatedData);
        return back()->with([
            'message' => 'Data berhasil Di Ubah',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pabrikan::destroy($id);
        return back()->with([
            'message' => 'Data berhasil Di Hapus',
            'type' => 'success'
        ]);
    }
}

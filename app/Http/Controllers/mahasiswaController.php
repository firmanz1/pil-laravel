<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Home Mahasiswa
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tmbah Mahasiswa
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Halaman Simpan Tambah Mahasiswa
        Session::flash('nim', $request->nim);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate(
            [
                'nim' => 'required|numeric|unique:mahasiswas,nim',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'prodi' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required',

            ],
            [
                'nim.required' => 'ih bandel kali nim nimnya ga dibuat bisa-bisanya',
                'nim.numeric' => 'nim itu angka bukan huruf ya dek ya',
                'nim.unique' => 'itu nim orang woi',
                'nama_mahasiswa.required' => 'nama woi agpunya nama kah?',
                'tgl_lahir.required' => 'macem gapernah lahir',
                'alamat.required' => 'rohingya lu? gapunya alamat?',
                'nim.required' => 'ih bandel kali nim nimnya ga dibuat bisa-bisanya'
            ]
        );

        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'prodi' => $request->prodi,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
        ];
        mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Ok sip dah masuk datanya');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Edit Mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Simpan Edit Mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus Mahasiswa
    }
}

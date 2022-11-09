<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = DB::table('bukus')->paginate(5);
        return view('bukus.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pengarang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'lokasi' => 'required',
        ]);

        // up gbr
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/buku', $gambar->hashName());
        // $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = '/public/buku/';
            $pgbr = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $pgbr);
            $input['gambar'] = "$pgbr";
        }
        $input = $request->all();

        Buku::create($input);

        return redirect()->route('bukus.index')->with('success', 'Data Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('bukus.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pengarang' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'lokasi' => 'required',
        ]);

        // up gbr
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buku', $gambar->hashName());
        $input = $request->all();

        $input = $request->all();

        $buku->update($input);

        return redirect()->route('bukus.index')->with('success', 'Data Berhasil di Tambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('bukus.index')->with('success', 'Data Berhasil di Tambah!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bar = Barang::get()->all();
 
        $search = $request->search;
        if ($request->has('search')) {
            $bar = Barang::where('nama_barang', 'like', '%' . $search . '%')->orWhere('kategori_barang', 'like', '%' . $search . '%')->orWhere('kode_barang', 'like', '%' . $search . '%')->get();
        } else if ($request->has('search')) {
            // $pro;
            // echo "Pencarian tidak tersedia"; 
        }
        return view('barang.index', compact('bar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bar = Barang::get()->all();
        return view('barang.create', compact('bar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // melakukan validasi data 
        $validate = $request->validate([
            // 'id_program' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required'
        ]);

        //untuk menambah data jika data sudah ada tidak akan ditambahkan
        Barang::firstOrCreate($validate);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id
        $bar = Barang::find($id);
        return view('barang.detail', compact('bar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bar = Barang::find($id);
        return view('barang.edit', compact('bar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bar = Barang::find($id);
        //melakukan validasi data 
        $validate = $request->validate([
            // 'id_program' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required'
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita 
        $bar->update($validate);
        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('barang.index')
            ->with('success', 'barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Barang::find($id)->delete();
        return redirect()->route('barang.index')
            ->with('success', 'barang Berhasil Dihapus');
    }
}

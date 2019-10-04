<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelPeminjaman;
use App\ModelMobil;
use Validator;
class Peminjaman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelPeminjaman::all();
        return view('peminjaman', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ModelMobil::all();
        return view('peminjaman_create', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,
        [
            'id' => 'required',
            'kd_mobil' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);

        // menambah data
        $data = new ModelPeminjaman();
        $data->kd_mobil = $request->kd_mobil;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();

        // merubah stok ditambah dari controller mobil
        $databeli = ModelMobil::where('kd_mobil', $request->kd_mobil)->first();
        $databeli->stok = $databeli->stok + $request->jumlah;
        $databeli->save();

        return redirect()->route('peminjaman.index')->with('alert_message', 'Berhasil menambah data!');
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
        $data = ModelPeminjaman::where('id', $id)->get();
        return view('peminjaman_edit', compact('data'));
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
        //
        $this->validate($request,
        [
            'id' => 'required',
            'kd_mobil' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);
        $data = ModelPeminjaman::where('id', $id)->first();
        $data->id = $request->id;
        $data->kd_mobil = $request->kd_mobil;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();
        return redirect()->route('peminjaman.index')->with('alert_message', 'Berhasil menambah data!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = ModelPeminjaman::where('id', $id)->first();
        $data->delete();
        return redirect()->route('peminjaman.index')->with('alert_message', "Berhasil Menghapus data!");
    }
}
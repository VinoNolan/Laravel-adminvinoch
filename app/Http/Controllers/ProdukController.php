<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function produk()
    {
        $data = Produk::get();
        return view("produk", compact("data"));
    }
    public function createproduk()
    {
        return view("createproduk");
    }
    public function pushproduk(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'judulproduk' => 'required|max:15',
            'hargaproduk' => 'required',
            'deskripsiproduk' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $gambar = $request->file('gambar');
        $filename = date('Y-m-d') . $gambar->getClientOriginalName();
        $path = 'gambar-produk/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($gambar));

        $data['judulproduk'] = $request->judulproduk;
        $data['hargaproduk'] = $request->hargaproduk;
        $data['deskripsiproduk'] = $request->deskripsiproduk;
        $data['gambar'] = $filename;

        Produk::create($data);

        return redirect()->route('produk');
    }
    public function edit(Request $request, $id)
    {
        $data = Produk::find($id);
        return view('editproduk', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'judulproduk' => 'required|max:15',
            'hargaproduk' => 'required',
            'deskripsiproduk' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['judulproduk'] = $request->judulproduk;
        $data['hargaproduk'] = $request->hargaproduk;
        $data['deskripsiproduk'] = $request->deskripsiproduk;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = date('Y-m-d') . $gambar->getClientOriginalName();
            $path = 'gambar-produk/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($gambar));
            $data['gambar'] = $filename;
        }

        Produk::whereId($id)->update($data);

        return redirect()->route('produk');
    }
    public function delete(Request $request, $id)
    {
        $data = Produk::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('produk');
    }
}

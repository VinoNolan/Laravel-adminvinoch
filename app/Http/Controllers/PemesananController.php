<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    public function pemesanan()
    {
        $data = Pemesanan::get();
        return view("pemesanan", compact("data"));
    }
    public function edit(Request $request, $id)
    {
        $data = Pemesanan::find($id);
        return view('editpemesanan', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pesanan' => 'required',
            'quantity' => 'required',
            'totalharga' => 'required',
            'namapembeli' => 'required',
            'email' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'alamatlengkap' => 'required',
            'tipepembayaran' => 'required',
            'catatan' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);



        $data['pesanan'] = $request->pesanan;
        $data['quantity'] = $request->quantity;
        $data['totalharga'] = $request->totalharga;
        $data['namapembeli'] = $request->namapembeli;
        $data['email'] = $request->email;
        $data['kabupaten'] = $request->kabupaten;
        $data['kecamatan'] = $request->kecamatan;
        $data['alamatlengkap'] = $request->alamatlengkap;
        $data['tipepembayaran'] = $request->tipepembayaran;
        $data['catatan'] = $request->catatan;

        Pemesanan::whereId($id)->update($data);

        return redirect()->route('pemesanan');
    }
    public function delete(Request $request, $id)
    {
        $data = Pemesanan::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('pemesanan');
    }
}

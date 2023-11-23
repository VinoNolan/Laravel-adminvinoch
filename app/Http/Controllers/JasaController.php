<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JasaController extends Controller
{
    public function jasa()
    {
        $data = Jasa::get();
        return view("jasa", compact("data"));
    }
    public function createjasa()
    {
        return view("createjasa");
    }
    public function pushjasa(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'gambarjasa' => 'required|mimes:png,jpg,jpeg|max:2048',
            'juduljasa' => 'required|max:15',
            'hargajasa' => 'required',
            'deskripsijasa' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $gambar = $request->file('gambarjasa');
        $filename = date('Y-m-d') . $gambar->getClientOriginalName();
        $path = 'gambar-jasa/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($gambar));

        $data['juduljasa'] = $request->juduljasa;
        $data['hargajasa'] = $request->hargajasa;
        $data['deskripsijasa'] = $request->deskripsijasa;
        $data['gambarjasa'] = $filename;

        Jasa::create($data);

        return redirect()->route('jasa');
    }
    public function edit(Request $request, $id)
    {
        $data = Jasa::find($id);
        return view('editjasa', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambarjasa' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'juduljasa' => 'required|max:15',
            'hargajasa' => 'required',
            'deskripsijasa' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);



        $data['juduljasa'] = $request->juduljasa;
        $data['hargajasa'] = $request->hargajasa;
        $data['deskripsijasa'] = $request->deskripsijasa;
        if ($request->hasFile('gambarjasa')) {
            $gambar = $request->file('gambarjasa');
            $filename = date('Y-m-d') . $gambar->getClientOriginalName();
            $path = 'gambar-jasa/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($gambar));
            $data['gambarjasa'] = $filename;
        }

        Jasa::whereId($id)->update($data);

        return redirect()->route('jasa');
    }
    public function delete(Request $request, $id)
    {
        $data = Jasa::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('jasa');
    }
}

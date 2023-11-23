<?php

namespace App\Http\Controllers;

use App\Models\UserPembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserpembeliController extends Controller
{
    public function userpembeli()
    {
        $data = UserPembeli::get();

        return view("userpembeli", compact("data"));
    }
    public function create()
    {
        return view("createuserpembeli");
    }
    public function pushUserPembeli(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => 'required | email',
            "name" => 'required',
            "password" => 'required',
            "asalkota" => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);
        $data['asalkota'] = $request->asalkota;

        UserPembeli::create($data);

        return redirect()->route('userpembeli');
    }
    public function edit(Request $request, $id)
    {
        $data = UserPembeli::find($id);
        return view('edituserpembeli', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "email" => 'required | email',
            "name" => 'required',
            "password" => 'nullable',
            "asalkota" => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['asalkota'] = $request->asalkota;
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        UserPembeli::whereId($id)->update($data);

        return redirect()->route('userpembeli');
    }
    public function hapuspembeli(Request $request, $id)
    {
        $data = Userpembeli::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('userpembeli');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function user()
    {
        $data = User::get();
        return view("user", compact("data"));
    }
    public function create()
    {
        return view("create");
    }
    public function pushUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => 'required | email|unique:users',
            "name" => 'required',
            "password" => 'required',
            "role" => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('user');
    }
    public function edit(Request $request, $id)
    {
        $data = User::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "email" => 'required | email |unique:users',
            "name" => 'required',
            "password" => 'nullable',
            "role" => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['name'] = $request->name;
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('user');
    }
    public function delete(Request $request, $id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('user');
    }
}

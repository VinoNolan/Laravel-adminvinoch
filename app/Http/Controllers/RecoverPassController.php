<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RecoverPassController extends Controller
{
    public function recover($token)
    {
        return view("recoverpass", ["token" => $token]);
    }
    public function submitResetPasswordForm(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $email['email'] = $request->email;
        $password['password'] = Hash::make($request->password);

        User::where($email)->update($password);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect()->route('login')->with('message', 'Password behasil diganti');
    }
}

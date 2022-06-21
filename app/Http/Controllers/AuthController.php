<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\User;

class AuthController extends Controller
{
    public function user()
    {
        $user = user::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);
        return redirect('/user');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->save();
        return redirect('/user')->with('alert', 'Berhasil diubah');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login')->with('alert', 'Anda gagal login');
        }
        else
        {
            return redirect('/home')->with('alert', 'Anda berhasil login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert', 'Berhasil dihapus');
    }


}

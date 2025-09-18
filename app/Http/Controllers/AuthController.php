<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Opd;


class AuthController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
       
        // validasi minimal
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');;

        // ambil user dari DB berdasarkan email
        $user = Opd::where('email', $email)->first();

        if (! $user) {
            return back()->withErrors(['email' => 'Email belum terdaftar.'])->withInput();
        }

        // BANDINGKAN PLAIN PASSWORD (TIDAK DI-HASH)
        if ($user->password !== $password) {
            return back()->withErrors(['password' => 'Password salah.'])->withInput();
        }

        // login user (model harus extend Authenticatable)
        Auth::login($user);

        // regenerate session untuk keamanan session fixation
        $request->session()->regenerate();

        //ganti route ini dengan informasi user yang login
        return redirect()->intended(route('pengajuan'));
    }

    public function logout()
    {   
        return view('login');
    }

}
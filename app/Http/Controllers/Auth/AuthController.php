<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_process(Request $request)
    {
        $phone = $request->phone;
        if (Str::startsWith($phone, '+62')) {
            $phone = '0' . substr($phone, 3);
        } else if (Str::startsWith($phone, '62')) {
            $phone = '0' . substr($phone, 2);
        }

        //pesan error
        $message = [
            'phone.required' => 'Nomor telepon tidak boleh kosong',
            'phone.exists' => 'Nomor telepon tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong'
        ];

        //validasi
        $request->validate([
            'phone' => ['required', 'exists:users,phone'],
            'password' => ['required']
        ], $message);

        //mengatur credentials user
        $credentials = [
            'phone' => $phone,
            'password' => $request->password
        ];

        //cek apakah user sudah verifikasi
        $user = User::where('phone', $phone)->first();
        if ($user && $user->acces == 'no') {
            $rand = Str::random(64);
            return "Silahkan verivikasi terlebih dahulu!";
        }

        //cek autentikasi user
        if (Auth()->attempt($credentials, $request->has('remember'))) {
            return redirect()->route('frontend.dashboard');
        } else {
            return redirect()->route('login')->with(['error' => 'Nomor atau password anda salah']);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_process(Request $request)
    {
        // dd($request)
        $phone = $request->phone;
        if (Str::startsWith($phone, '+62')) {
            $phone = '0' . substr($phone, 3);
        } else if (Str::startsWith($phone, '62')) {
            $phone = '0' . substr($phone, 2);
        }

        //validate, apabila password dan confirmsion password tidak sama

        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'phone' => ["required", "min:11", "max:13", "unique:users,phone,{$phone}"],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'password-confirmation' => ['required', 'same:password']
        ]);

        // dd($data);

        // if (User::where('phone', $phone)->exists()) {
        //     return redirect()->back()->withErrors(['phone' => 'Nomor sudah terdaftar']);
        // }

        $data['otp'] = rand(111111, 999999);
        $data['acces'] = 'no';

        User::create($data);
        return redirect()->route('frontend.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('frontend.profile');
    }


    public function updateProfile(Request $request)
    {
        $validasi = $request->validate([
            'name' => ['required', 'min:2', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:11', 'max:13', 'unique:users,phone,' . Auth::id()],
            'password' => ['nullable', 'min:8'],
        ]);

        if ($request->password) {
            $password = bcrypt($validasi['password']);
        }

        $user = User::find(Auth::id());

        if ($request->password) {
            $user->update([
                'name' => $validasi['name'],
                'email' => $validasi['email'],
                'phone' => $validasi['phone'],
                'password' => $password
            ]);
        } else {
            $user->update([
                'name' => $validasi['name'],
                'email' => $validasi['email'],
                'phone' => $validasi['phone'],
            ]);
        }

        return redirect()->route('profile')->with(['success' => 'Profile berhasil diupdate']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Customer;

class AuthController extends Controller
{
    public function showLoginAdmin(){
        return view('pages.admin.auth.login');
    }

    public function loginAdmin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect('/admin');
        } else {
            return back()->withErrors([
                'email' => 'Email / Password tidak ditemukan'
            ]);
        }
    }

    public function showRegisterAdmin(){
        return view('pages.admin.auth.register');
    }

    public function registerAdmin(Request $request){
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'terms' => ['accepted']
        ]);

        if(!$credentials){
            return back();
        }

        $admin = new Admin($request->all());
        $admin->password = Hash::make($request->password);
        
        if(!$admin->save()){
            return back();
        } else {
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect('/admin');
            } else {
                return back()->withErrors([
                    'email' => 'Akun gagal dibuat'
                ]);;
            };
        }
    }

    public function showLoginCustomer() {
        return view('pages.auth.login');
    }

    public function loginCustomer(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::guard('customer')->attempt($credentials)){
            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Email / Password tidak ditemukan'
            ]);
        }
    }

    public function showRegisterCustomer() {
        return view('pages.auth.register');
    }

    public function registerCustomer(Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'max:35'],
            'terms' => ['accepted']
        ]);

        if(!$credentials){
            return back();
        }

        $admin = new Customer($request->all());
        $admin->password = Hash::make($request->password);
        $admin->nama_lengkap = $request->input('name');
        $admin->no_hp = '0' . $request->input('no_hp');
        
        if(!$admin->save()){
            return back();
        } else {
            if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect('/');
            } else {
                return back()->withErrors([
                    'email' => 'Akun gagal dibuat'
                ]);;
            };
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('login');
    }
}

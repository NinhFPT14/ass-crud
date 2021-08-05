<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function confirm(Request $request){
        $request->validate( 
        [
            'name' => 'required|max:255',
            'password' => 'required|max:255',
        ],
        [
        'name.required' => "Tên tài khoản không được để trống",
        'name.max' => "Tên tài khoản không được vượt quá 255 ký tự",
        'password.required' => "Mật khẩu không được để trống",
        'password.max' => "Mật khẩu không được vượt quá 255 ký tự",
        ]);
        if (Auth::attempt(array('name' => $request->name, 'password' => $request->password), true)) {
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function logout(){
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('home');
    }
    
}

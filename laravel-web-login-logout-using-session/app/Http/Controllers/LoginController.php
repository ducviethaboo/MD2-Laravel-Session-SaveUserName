<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function showLogin()
    {
        return view('showlogin');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if($username === 'admin' && $password === '1')  {
            $request->session()->push('login', true);
            return redirect()->route('show.blog');
        }
        $message = "Đăng nhập không thành công";
        $request->session()->flash('login-fail', $message);
        return view('showlogin');
    }

    public function showBlog()
    {
        return view('blog');
    }

    public function logOut(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}

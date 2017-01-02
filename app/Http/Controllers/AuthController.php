<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(Request $request)
    {
        $remember = false;
        if (!empty($request->input('remember'))){
            $remember = true;
        };
        if (Auth::attempt(['email' => $request->input('email'),
            'password' => $request->input('password'), 'status' => '1'], $remember)) {
            return redirect('/profile');
        } else {
            return back()->with('message', 'Не правильный логин или пароль, а может не подтвержден email');
        }
    }

    /**
     *
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, [
                'email' => 'required|max:250|email',
            ]
        );
        $user = User::where('email', '=', $request->input('email'))->first();

        if(!$user){
            return back()->with('message',
                '<p>Пользователь с таким e-mail не обаружен.</p>'
                . '<p>Можете <a href="/password">попробовать еще раз.</a></p>'
            );
        } else if($user->status == 0){
            return back()->with('message',
                '<p>Вы еще не подтвердили свой e-mail.</p>'
                . '<p>Необходимо пройти по ссылке, высланной на Ваш e-mail при регистрации.</p>'
                . '<p>Или можете <a href="/repeat_confirm">отослать письмо</a> еще раз.</p>'
            );
        }

        //отправляем ссылку с токеном пользователю
        Mail::send('emails.password', ['token' => $request->input('_token')], function ($u) use ($user) {
            $u->from('admin@site.ru');
            $u->to($user->email);
            $u->subject('Сброс пароля');
        });

        return back()->with('message',
            '<p>Сообщение отправлено на Ваш e-mail.</p>'
            . '<p>Необходимо пройти по ссылке, высланной на Ваш e-mail.</p>'
            . '<p>Читерская <a href="/password_reset/'.$request->input('_token').'">ссылка</a></p>'
        );
    }

    public function getReset($token)
    {
        return view('auth.reset', ['token'=>$token]);
    }

    public function postReset(Request $request)
    {
        $_token = $request->input('_token');
        $token = $request->input('token');

        if($_token !== $token){
            return back()->with('message',
                '<p>Ваша ссылка для сброса пароля просрочена.</p>'
                . '<p>Необходимо вновь <a href="/password">запросить смену пароля.</a></p>'
            );
        }

        $this->validate($request,[
            'email' => 'required|max:250|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', '=', $request->input('email'))->first();

        if(!$user){
            return back()->with('message',
                '<p>Пользователь с таким e-mail не обаружен.</p>'
                . '<p>Можете <a href="/password_reset/'.$request->input('_token').'">попробовать еще раз.</a></p>'
            );
        } else if($user->status == 0){
            return back()->with('message',
                '<p>Вы еще не подтвердили свой e-mail.</p>'
                . '<p>Необходимо пройти по ссылке, высланной на Ваш e-mail при регистрации.</p>'
                . '<p>Или можете <a href="/repeat_confirm">отослать письмо</a> еще раз.</p>'
            );
        }

        $user->password = bcrypt($request->input('password'));
        $user->remember_token = $request->input('_token');
        $user->save();

        return back()->with('message',
            '<p>Ваш пароль успешно изменен.</p>'
            . '<p>Можете <a href="/auth">авторизироваться</a> на сайте.</p>'
        );
    }
}

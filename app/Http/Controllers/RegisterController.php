<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\ConfirmUser;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $this->validate($request, [

            'last_name' => 'required|max:100',

            'first_name' => 'required|max:100',

            'email' => 'required|max:250|email',

            'password' => 'required|confirmed|min:6',

            'agree' => 'accepted',

        ]);

        $user = User::where('email', '=', $request->input('email'))->first();

        if(!empty($user->email)){
            if($user->status == 0){
                return redirect()->back()->with('message',
                    '<p>Такой email уже зарегестрирован, но не подтвержден.</p>'
                    . '<p>Проверьте почту или <a href="/repeat_confirm">запросите</a> '
                    . 'повторное подтверждение email.</p>'
                );
            } else {
                return redirect()->back()->with('message',
                    '<p>Пользователь с таким email уже зарегестрирован.</p>'
                    . '<p><a href="/password">Забыли пароль?</a></p>'
                );
            }
        }

        //Insert user

        $user=User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'father_name' => $request->input('father_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'remember_token' => $request->input('_token'),
        ]);

        if($user) {
            $email = $user->email;
            $token = str_random(32);
            $model = new ConfirmUser;
            $model->email = $email;
            $model->token = $token;
            $model->save();

            //отправляем ссылку с токеном пользователю
            Mail::send('emails.confirm', ['token' => $token], function ($u) use ($user) {
                $u->from('admin@site.ru');
                $u->to($user->email);
                $u->subject('Confirm registration');
            });

            if (!empty($user->id)) {
                return redirect()->back()->with('message', '<p>Вы успешно зарегистрировались</p>'
                    . '<p>Для продолжения регистрации нужно подтвердить Ваш e-mail.</p>'
                    . '<p>Перейдите по ссылке в письме, высланном по указанному адресу.</p>'
                    . '<p>Если письмо не пришло, Вы можете <a href="/repeat_confirm">'
                    . 'отправить его повторно</a>.</p>'
                    . '<p>Для подтверждения регистрации, пройдите по '
                    . '<a href="/register/confirm/' . $token . '"> ссылке</a></p>'
                );
            } else {
                return redirect()->back()->with('message', '<p>Произошла ошибка при регистрации</p>'
                    . '<p>Попробуйте зарегистрироваться позднее</p>');
            }
        }
    }

    /**
     * Validate e-mail user
     * @param $token
     * @return string
     */
    public function confirm($token)
    {
        $model = ConfirmUser::where('token','=',$token)->firstOrFail();

        $user = User::where('email','=', $model->email)->first();

        $user->status = true;

        $user->save();

        $model->delete();

        Auth::login($user);

        return redirect('/auth')->with('message','<p>Ваш e-mail успешно подтвержден.</p>'
        . '<p>Регистрация завершена</p>'
        . '<p>Вы можете перейти на <a href="/">главную страницу</a></p>'
        . '<p>Или войти в профиль <a href="/profile">в профиль</a></p>'
        );

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRepeat(){
        return view('auth.repeat');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function postRepeat(Request $request)
    {

        $user=User::where('email','=',$request->input('email'))->first();

        if(!empty($user->email))
        {
            if($user->status==0 )
            {
                $user->touch();
                $confirm=ConfirmUser::where('email','=',$request->input('email'))->first();
                $confirm->touch();

                Mail::send('emails.confirm',['token'=>$confirm->token], function($u) use ($user)
                {
                    $u->from('admin@site.ru');
                    $u->to($user->email);
                    $u->subject('Подтверждение email');
                });
                return back()->with('message',
                    '<p>Письмо для активации успешно выслано на указанный адрес</p>'
                    . '<p>Если письмо не пришло <a href="/repeat_confirm">запросите</a> '
                    . 'повторную отправку письма</p>');
            }
            else {
                return back()->with('message',"<p>Такой email уже подтвержден</p>");}
        }
        else {
            return back()->with('message',"<p>Нет пользователя с таким email</p>");
        }

    }
}

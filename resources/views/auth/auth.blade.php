@extends('main')

@section('header')
    @include('header.secondHeader')
@stop

@section('content')
<section id="myauth">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <!--Authorization n registration tabs-->
                <div id="content">
                    @if(Session::has('message'))
                        {!!Session::get('message')!!}
                    @endif
                    @if(!Session::has('message'))
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#userauth" data-toggle="tab">Авторизация Пользователя</a></li>
                        <li><a href="#userregistration" data-toggle="tab" >Регистрация Пользователя</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane fade in active" id="userauth">
                            <h2>Авторизация</h2>
                            <form class="form-horizontal" method="POST" action="/auth/login">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="inputEmail" class="col-xs-3 control-label">Адрес email:</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Введите email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-xs-3 control-label" name="password">Пароль:</label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="remember"> Запомнить</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <button type="submit" class="btn btn-default">Войти</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="userregistration">
                            <h2>Регистрация</h2>
                            <form id="register-form" class="form-horizontal" method="POST" action="/auth/register">

                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="lastName">Фамилия:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="lastName" dataValid="string" placeholder="Введите фамилию" name="last_name" value="{{ old('last_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="firstName">Имя:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="firstName" dataValid="string" placeholder="Введите имя" name="first_name" value="{{ old('first_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="fatherName">Отчество:</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="fatherName" placeholder="Введите отчество" name="father_name" value="{{ old('father_name') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="inputEmail">Email:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" dataValid="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="inputPassword">Пароль:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="inputPassword" dataValid="pass" placeholder="Введите пароль" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="confirmPassword" dataValid="pass_confirm" placeholder="Введите пароль ещё раз" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" dataValid="checkbox" value="yes" name="agree">  Я согласен с <a href="#">условиями</a> <sup>*</sup>.
                                        </label>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <input type="submit" class="btn btn-primary" value="Регистрация">
                                        <input type="reset" class="btn btn-default" value="Очистить форму">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    @endif
                </div> <!-- all the screens dimentional -->
            </div>
            <!-- /.container -->
        </div>
    </div>
</section>
@stop
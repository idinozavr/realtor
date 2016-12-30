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
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#userauth" data-toggle="tab">Авторизация Пользователя</a></li>
                        <li><a href="#userregistration" data-toggle="tab">Регистрация Пользователя</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane fade in active" id="userauth">
                            <h2>Авторизация</h2>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputEmail" class="col-xs-3 control-label">Адрес email:</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-xs-3 control-label">Пароль:</label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Запомнить</label>
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
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="lastName">Фамилия:</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="lastName" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="firstName">Имя:</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="firstName" placeholder="Введите имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="fatherName">Отчество:</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="fatherName" placeholder="Введите отчество">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:</label>
                                    <div class="col-xs-9">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль ещё раз">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
                                    <div class="col-xs-9">
                                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="postalAddress">Адрес:</label>
                                    <div class="col-xs-9">
                                        <textarea rows="3" class="form-control" id="postalAddress" placeholder="Введите адрес"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Пол:</label>
                                    <div class="col-xs-2">
                                        <label class="radio-inline">
                                            <input type="radio" name="genderRadios" value="male"> Мужской
                                        </label>
                                    </div>
                                    <div class="col-xs-2">
                                        <label class="radio-inline">
                                            <input type="radio" name="genderRadios" value="female"> Женский
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="agree">  Я согласен с <a href="#">условиями</a>.
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
                </div> <!-- all the screens dimentional -->
            </div>
            <!-- /.container -->
        </div>
    </div>
</section>
@stop
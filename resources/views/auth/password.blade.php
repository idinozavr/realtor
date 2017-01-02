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
                        <div id="my-tab-content" class="tab-content">
                            <h2>Сброс пароля.</h2>
                            <form id="main-form" class="form-horizontal" method="POST" action="">
                                {!! csrf_field() !!}
                                @if (count($errors) > 0)
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group">
                                    <label class="control-label col-xs-3" for="inputEmail">Email:<sup>*</sup></label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" dataValid="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <input type="submit" class="btn btn-primary" value="Сбросить пароль">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div> <!-- all the screens dimentional -->
                </div>
                <!-- /.container -->
            </div>
        </div>
    </section>
@stop
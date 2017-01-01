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
                                <h2>Повторная отправка письма с подтверждением.</h2>
                                <form id="repeat-form" class="form-horizontal" method="POST" action="/repeat_confirm">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" for="inputEmail">Email:<sup>*</sup></label>
                                        <div class="col-xs-9">
                                            <input type="email" class="form-control" id="inputEmail" dataValid="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <div class="col-xs-offset-3 col-xs-9">
                                            <input type="submit" class="btn btn-primary" value="Отправить">
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
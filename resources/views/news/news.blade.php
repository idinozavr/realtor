@extends('main')

@section('header')
    @include('header.secondHeader')
@stop

@section('content')
    <section id="news">
        <div class="container">
            <div class="row">
                @foreach($news as $item)
                    <article>
                        <h2>{!!  $item->title !!}</h2>
                        <p>{!! $item->short !!}</p>
                        <p>Дата публикации:{!! $item->date !!}</p>
                        <p>Просмотров:{!! $item->views !!}</p>

                    </article>
                @endforeach
            </div>
        </div>
    </section>
@stop
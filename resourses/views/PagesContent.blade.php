@extends('layouts.Pages')

@section('content')
    @if($content==null && $eng == false)
        <p align="center">Выберите категорию</p>

    @elseif($content==null && $eng == true)
        <p align="center">Choose a category</p>

    @else
        @foreach($content as $c)
            <h1 align="center">{{$c->caption}}</h1>
            <p align="center">{{$c->content}}</p>
        @endforeach
    @endif

@endsection
@extends('layout')

@section('title','Portafolio')

@section('content')
<h1>portafolio</h1>

<ul>
    @isset($portafolio)
        @foreach ($portafolio as $portafioItem)
            <li> {{$portafioItem['title']}}</li>
        @endforeach
    @else
        <li>No hay proyectos para mostrar!</li>
    @endisset

</ul>

@endsection
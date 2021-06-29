@extends('layout')

@section('title','Contact')

@section('content')
<h1>Contact</h1>
<form method="POST" action="{{ route('contact') }}">
    @csrf
    <input name="name" placeholder="Nombre..."><br>
    {!! $errors->first('name','<small>:message</small><br>') !!}

    <input name="email" placeholder="Email..."><br>
    {!! $errors->first('email','<small>:message</small><br>') !!}

    <input name="subject" placeholder="Asunto..."><br>
    {!! $errors->first('subject','<small>:message</small><br>') !!}

    <textarea name="content" placeholder="Mensaje..."></textarea><br>
    {!! $errors->first('content','<small>:message</small><br>') !!}

    <button>Enviar</button>
</form>
@endsection
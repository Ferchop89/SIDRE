@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="content_turn">
    <div class="name_user">
      <h2>Bienvenid@: Georgina Alejandra Espinosa Cortes</h2>
      <h3>305016614</h3>
    </div>
    <div class="title">
        <h3>Turno de reinscripción</h3>
    </div>
    <div class="turno">
        <h2>31-07-2018 a las 19:50</h2>
        <p>Recuerda ingresar en el horario indicado, de lo contrario tu cuenta puede ser bloqueda y no podras concluir el proceso de reinscripción.</p>
        <a href="" class="btn-blue">Comenzar</a>
    </div>
  </div>
@endsection

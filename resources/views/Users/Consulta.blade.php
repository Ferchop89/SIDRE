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
        <h3>Consulta de grupos</h3>
    </div>
    <div class="consulta">
      <p>Elige</p>
      <div class="grado">
        <label for="grado">Grado: <p class="obligatorio">*</p></label>
        <select class="grado" name="grado">
          <option value="" selected>Selecciona una opción</option>
          <option value="">Segundo</option>
          <option value="">Tercero</option>
          <option value="">Cuarto</option>
          <option value="">Quinto</option>
          <option value="">Sexto</option>
        </select>
      </div>
      <div class="grupos">
        <label for="grupos">Grupos: <p class="obligatorio">*</p></label>
        <select class="grupos" name="grupos">
          <option value="" selected>Selecciona una opción</option>
          <option value="">Grupos 101</option>
          <option value="">Grupos 101</option>
        </select>
      </div>
    </div>
  </div>
@endsection

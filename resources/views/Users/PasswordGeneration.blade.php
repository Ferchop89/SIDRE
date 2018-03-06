@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="name_user">
    <h2>Bienvenid@: Georgina Alejandra Espinosa Cortes</h2>
    <h3>305016614</h3>
  </div>
  <div class="title">
      <h3>Generación de Contraseña</h3>
  </div>
  <div class="formulario">
    <p>Proporciona una contraseña mayor a 4 caracteres y menor a 10 caracteres.</p>
    <form class="" name="form-passwordgeneration" action="" method="post" accept-charset="UTF-8">
      <div class="form-group ">
        <label for="newpass">Nueva Contraseña: <p class="obligatorio">*</p></label>
        <div class="input-group input-group-custom" id="pass1">
          <input class="form-control form-control-custom" name="newpass1" id="newpass1" placeholder="" value="" type="password" maxlength="10">
        </div>
      </div>
      <div class="form-group ">
        <label for="newpass2">Repite tú Contraseña: <p class="obligatorio">*</p></label>
        <div class="input-group input-group-custom" id="pass2">
          <input class="form-control form-control-custom" name="newpass2" id="newpass2" placeholder="" value="" type="password" maxlength="10">
        </div>
      </div>
      <div id="btn-submit">
        <input type="submit" value="Continuar" class="btn-blue">
      </div>
      
    </form>
  </div>


@endsection

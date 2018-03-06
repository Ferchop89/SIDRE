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
      <h3>Recuperación de Contraseña</h3>
  </div>
  <div class="formulario">
    <p>Para recuperar tu contraseña, ingresa los siguientes campos.</p>
    <form class="" name="form-pass_recovery" action="" method="post" accept-charset="UTF-8">
      <div class="form-group ">
        <label for="num_cta">Número de Cuenta: <p class="obligatorio">*</p></label>
        <div class="col-md-6 input-group input-group-custom">
          <input class="form-control form-control-custom" name="num_cta" placeholder="Compuesto por 9 caracteres" value="" type="text" maxlength="9">
        </div>
      </div>
      <div class="form-group ">
        <label for="fecha_nac">Fecha de Nacimiento: <p class="obligatorio">*</p></label>
        <div class="col-md-6 input-group input-group-custom">
          <input class="form-control form-control-custom" name="fecha_nac" placeholder="ddmmaaaa" value="" type="password" maxlength="8">
        </div>
      </div>
{{-- https://github.com/zablose/captcha --}}
      <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Captcha: <p class="obligatorio">*</p></label>
          <div class="col-md-6 input-group">
              <input type="text" class="form-control" name="captcha" placeholder="Captura los datos de la imagen de abajo" autocomplete="off">
              @if ($errors->has('captcha'))
                  <span class="help-block">
              <strong>{{ $errors->first('captcha') }}</strong>
          </span>
              @endif
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <label>
                <img src="{!! captcha_url() !!}" alt="captcha">
            </label>
        </div>
      </div>

      <div id="btn-submit">
        <input type="submit" value="Continuar" class="btn-blue">
      </div>

    </form>
  </div>


@endsection

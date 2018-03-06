@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/ihover.css">
@endsection
@section('content')
  <div class="container steps">
    <div class="name_user">
      <h2>Bienvenid@: Georgina Alejandra Espinosa Cortes</h2>
      <h3>305016614</h3>
    </div>
      <div class="row">
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right">
            <a href="#">
              <div class="img"><img src="images/Act_Info.jpg" alt="img"></div>
              <div class="info">
                <h3>Actualizar Datos Personales</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right">
            <a href="#">
              <div class="img"><img src="images/Consulta_fecha.jpg" alt="img"></div>
              <div class="info">
                <h3>Consulta Grupos</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right">
            <a href="#">
              <div class="img"><img src="images/Reinscripcion.jpg" alt="img"></div>
              <div class="info">
                  <h3>Consulta Turno de Reinscripción</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right">
            <a href="#">
              <div class="img"><img src="images/Entrega_documental.jpg" alt="img"></div>
              <div class="info">
                <h3>Reinscripción</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
  </div>
@endsection

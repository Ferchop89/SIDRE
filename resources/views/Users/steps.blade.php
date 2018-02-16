@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="container">
      <div class="row">
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right"><a href="#">
          <div class="img"><img src="images/circ_img1.jpg" alt="img"></div>
          <div class="info">
            <h3>Actualizar Datos</h3>

          </div></a></div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right"><a href="#">
          <div class="img"><img src="images/circ_img2.jpg" alt="img"></div>
          <div class="info">
            <h3>Fecha de Inscripcion</h3>

          </div></a></div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right"><a href="#">
          <div class="img"><img src="images/circ_img3.jpg" alt="img"></div>
          <div class="info">
            <h3>Grupos</h3>

          </div></a></div>
        </div>
        <div class="grid_3">
          <div class="ih-item circle effect2 left_to_right"><a href="#">
          <div class="img"><img src="images/circ_img4.jpg" alt="img"></div>
          <div class="info">
            <h3>Reinscripcion</h3>

          </div></a></div>
        </div>
      </div>
  </div>
@endsection

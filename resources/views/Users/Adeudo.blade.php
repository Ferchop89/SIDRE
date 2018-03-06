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
        <h3>Adeudo</h3>
    </div>
    <div class="adeudo">
        <table>
          <tr class="encabezado">
            <th>Área</th>
            <th>Tipo de material</th>
            <th>Fecha de incidente</th>
          </tr>
          <tr class="biblioteca">
            <td>Biblioteca</td>
            <td>Libro [Título: ] [Autor: ]</td>
            <td>19-02-2018</td>
          </tr>
          <tr class="experimental">
            <td>Ciencias Experimentales</td>
            <td>Material de Laboratorio</td>
            <td>19-02-2018</td>
          </tr>
          <tr class="deporte">
            <td>Educación Física</td>
            <td>Balón</td>
            <td>19-02-2018</td>
          </tr>
        </table>
    </div>
  </div>

@endsection

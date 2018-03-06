@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="format">
    <div class="name_user">
      <h2>Bienvenid@: Georgina Alejandra Espinosa Cortes</h2>
      <h3>305016614</h3>
    </div>
    <div class="info">
        <p>Tú información personal, ya fue actualizada.</p>
        <p>Cualquier duda o aclaración deberas hacerla directamente en ventanillas del plantel</p>
        <div class="info">
          <div class="foto">
            FOTO
          </div>
          <h2>Datos del alumno:</h2>
          <p>Número de cuenta: </p>
          <p>Nombre del alumno: </p>
          <p>CURP: </p>
          <p>Escuela de procedencia: </p>
          <p>Dirección:</p>
        </div>
        <div class="info">
          <h2>Datos del Tutor:</h2>
          <p>CURP: </p>
          <p>Nombre: </p>
          <p>Lugar de Trabajo: </p>
        </div>
        <div class="info">
          <h2>Datos adicionales:</h2>
          <p>Tipo de Sangre: </p>
          <p>Tipo Seguro: </p>
          <p>Alergias: </p>
          <p>Trataminetos Especiales:</p>
          <p>Padecimientos: </p>
          <p>Contacto de emergencia: </p>
          <p>Parentesco: </p>
          <p>Teléfono de emergencia: </p>
          <p>Datos Adicionales: </p>
        </div>
        <span class="aviso">AVISO: Se hace constar que todos los datos proporcionados en este formulario fueron revisados y validados por mi persona.</span>

        <p class="entrega">Entregar 2 impresiones de este documento junto con una fotografía de 3.5 x 4.5 cm. En la fecha en que se te soliciten tus documentos.</p>
        <p class="firma_tutor">Firma de Tutor</p>
    </div>
  </div>

@endsection

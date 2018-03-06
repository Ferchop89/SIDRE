@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
  {{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
  <script>
  $( function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons, collapsible: true
    });
    $( "#toggle" ).button().on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  } );
  </script>
@endsection
@section('content')
  <div class="name_user">
    <h2>Bienvenid@: Georgina Alejandra Espinosa Cortes</h2>
    <h3>305016614</h3>
  </div>
  <div class="title">
    <h3>Actualización de datos personales</h3>
  </div>
  <div class="sixteen columns top-1 bottom-3 bordeado">
    <p> Llena el formulario para iniciar el proceso de reinscripción.</p>
    <form class="" id="formulario_uno" name="form-data" action="" method="post" accept-charset="UTF-8">
      <div id="accordion">
        <h3>Datos Personales</h3>
        <div class="caja">
          <div class="info" id="datosPersonbales">
            <label for="apellido_pat_alumno">Apellido Paterno:</label>
            <input type="text" name="apellido_pat_alumno" id="apellido_pat_alumno" placeholder="Apellido Paterno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="apellido_mat_alumno">Apellido Materno:</label>
            <input type="text" name="apellido_mat_alumno" id="apellido_mat_alumno" placeholder="Apellido Materno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="nombre_alumno">Nombre(s):</label>
            <input type="text" name="nombre_alumno" id="nombre_alumno" placeholder="Nombre(s)" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="curp_alumno">CURP:<p class="obligatorio">*</p></label>
            <input type="text" name="curp_alumno" id="curp_alumno" placeholder="CURP 18 caracteres" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="genero">Género:<p class="obligatorio">*</p></label>
            {{-- <div class="styled-select slate"> --}}
            <select name="genero" id="genero" class="genero" autocomplete="off">
              <option value="" selected>Selecciona una opción</option>
              <option title="Masculino" value="M">Masculino</option>
              <option title="Femenino" value="F">Femenino</option>
           </select>

           <br/>
           <label for="peso">Peso:<p class="obligatorio">*</p></label>
            <input type="text" name="peso" id="peso" placeholder="Peso en Kg." value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="estatura">Estatura:<p class="obligatorio">*</p></label>
            <input type="text" name="estatura" id="estatura" placeholder="Estatura en cm." value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="nacionalidad">Nacionalidad:<p class="obligatorio">*</p></label>
            <select name="nacionalidad" id="nacionalidad" class="nacionalidad" autocomplete="off">
              <option title="Mexicana" value="MEX">Mexicana</option>
              <option title="Extranjera" value="EXT">Extranjera</option>
           </select>
           <br/>
           <label for="escuela_proce">Escuela de Procedencia:</label>
            <input type="text" name="escuela_proce" id="escuela_proce" placeholder="Escuela de procedencia" value="" autocomplete="off" maxlength="70">
            <br/>
          </div>
        </div>
        <h3>Domicilio</h3>
        <div class="caja">
          <div class="info" id="datosDomicilio">
            <label for="cp">Código Postal:<p class="obligatorio">*</p></label>
            <input type="text" name="cp" id="cp" placeholder="Código Postal" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="calle_numero">Calle y Número:<p class="obligatorio">*</p></label>
            <input type="text" name="calle_numero" id="calle_numero" placeholder="Calle y Número" value=""autocomplete="off" maxlength="70">
            <br/>
            <label for="colonia">Colonia:<p class="obligatorio">*</p></label>

              <select name="colonia" id="colonia" class="colonia" autocomplete="off">
                <option title="col1" value="col1">Colonia 1</option>
                <option title="col2" value="col2">Colonia 2</option>
              </select>

            <br/>
            <label for="del_mun">Delegación o Municipio:<p class="obligatorio">*</p></label>
            <input type="text" name="del_mun" id="" placeholder="Delegación/Municipio" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="ciudad">Ciudad:<p class="obligatorio">*</p></label>
            <input type="text" name="" id="" placeholder="" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="tel_casa_alumno">Teléfono de Casa:<p class="obligatorio">*</p></label>
            <input type="text" name="tel_casa_alumno" id="tel_casa_alumno" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="tel_celular_alumno">Teléfono Celular: <p class="obligatorio">*</p></label>
            <input type="text" name="tel_celular_alumno" id="tel_celular_alumno" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="email">Correo electrónico:<p class="obligatorio">*</p></label>
            <input type="email" name="mail_alumno" id="mail_alumno" placeholder="E-mail" value="" autocomplete="off" maxlength="70">
          </div>
        </div>
        <h3>Datos del Padre o Tutor</h3>
        <div class="caja">
          <div class="info" id="datosTutor">
            <label for="apellido_pat_tutor">Apellido Paterno:<p class="obligatorio">*</p></label>
            <input type="text" name="apellido_pat_tutor" id="apellido_pat_tutor" placeholder="Apellido Paterno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="apellido_mat_tutor">Apellido Materno:<p class="obligatorio">*</p></label>
            <input type="text" name="apellido_mat_tutor" id="apellido_mat_tutor" placeholder="Apellido Materno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="nombre_tutor">Nombre(s):<p class="obligatorio">*</p></label>
            <input type="text" name="nombre_tutor" id="nombre_tutor" placeholder="Nombre(s)" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="curp_tutor">CURP:<p class="obligatorio">*</p></label>
            <input type="text" name="curp_tutor" id="curp_tutor" placeholder="CURP 18 caracteres" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="tel_fijo_tutor">Teléfono Fijo:<p class="obligatorio">*</p></label>
            <input type="text" name="tel_fijo_tutor" id="tel_fijo_tutor" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="tel_celular_tutor">Teléfono Celular:<p class="obligatorio">*</p></label>
            <input type="text" name="tel_celular_tutor" id="tel_celular_tutor" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="mail_tutor">Correo Electrónico:</label>
            <input type="email" name="mail_tutor" id="mail_tutor" placeholder="E-mail" value="" autocomplete="off" maxlength="70">
          </div>
        </div>
        <h3>Datos Médicos</h3>
        <div class="caja">
          <div class="info" id="datosAdicionales">
            <label for="tipo_sangre">Tipo de Sangre:<p class="obligatorio">*</p></label>
            <select name="tipo_sangre" id="tipo_sangre" class="tipo_sangre" autocomplete="off">
              <option title="tipo_sangre_1" value="1">O+</option>
              <option title="tipo_sangre_2" value="2">O-</option>
              <option title="tipo_sangre_3" value="3">A+</option>
              <option title="tipo_sangre_4" value="4">A-</option>
              <option title="tipo_sangre_5" value="5">B+</option>
              <option title="tipo_sangre_6" value="6">B-</option>
              <option title="tipo_sangre_7" value="7">AB+</option>
              <option title="tipo_sangre_8" value="8">AB-</option>
            </select>
            <br/>
            <label for="seguro_medico">Seguro Médico:<p class="obligatorio">*</p></label>
            <select name="seguro_medico" id="seguro_medico" class="seguro_medico" autocomplete="off">
              <option title="seguro_medico_1" value="1">IMSS</option>
              <option title="seguro_medico_2" value="2">ISSTE</option>
              <option title="seguro_medico_3" value="3">Privado</option>
            </select>
            <br/>
            <label for="alergias">Alergias:</label>
            <input type="text" name="alergias" id="alergias" placeholder="Alergias" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="tratamientos_especiales">Tratamientos Especiales:</label>
            <input type="text" name="tratamientos_especiales" id="trataminetos_especiales" placeholder="Tratamientos Especiales" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="padecimientos">Padecimientos:</label>
            <input type="text" name="padecimientos" id="padecimientos" placeholder="Padecimientos" value="" autocomplete="off" maxlength="70">
          </div>
        </div>
        <h3>Datos en caso de Emergencia</h3>
        <div class="caja">
          <div class="info" id="datosEmergencia">
            <label for="apellido_pat_contacto">Apellido Paterno:<p class="obligatorio">*</p></label>
            <input type="text" name="apellido_pat_contacto" id="apellido_pat_contacto" placeholder="Apellido Paterno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="apellido_mat_contacto">Apellido Materno:<p class="obligatorio">*</p></label>
            <input type="text" name="apellido_mat_contacto" id="apellido_mat_contacto" placeholder="Apellido Materno" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="nombre_contacto">Nombre(s):<p class="obligatorio">*</p></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre(s)" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="parentesco">Parentesco:<p class="obligatorio">*</p></label>
            <input type="text" name="parentesco" id="patrentesco" placeholder="Parentesco" value="" autocomplete="off" maxlength="29">
            <br/>
            <label for="tel_fijo_contacto">Teléfono Fijo:</label>
            <input type="text" name="tel_fijo_contacto" id="tel_fijo_contacto" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
            <br/>
            <label for="tel_celular_contacto">Teléfono Celular:</label>
            <input type="text" name="tel_celular_contacto" id="tel_celular_contacto" placeholder="Incluye Lada" value="" autocomplete="off" maxlength="70">
          </div>
        </div>
        <h3>Datos Adicionales</h3>
        <div class="caja">
          <div class="info" id="datosAdicionales">
            <p>Mencionar cualquier indicación importante que debamos tomar en cuenta.</p>
            <textarea rows="8" placeholder="Ninguna" name="adicional"></textarea>
          </div>
        </div>
        <input type="submit" value="Continuar" class="btn-blue">
      </div>
    </form>
  </div>
@endsection

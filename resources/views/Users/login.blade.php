@extends('layout')
@section('add_css')
  <link href="{{ asset ('css/estilo_content.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="modal-dialog modal-dialog-custom">
  			<!--<div class="modal-header modal-header-login-custom">
  				<img src="img/3.0/login-uno.png">
  			</div>-->
  			<div class="modal-body">

  				<form id="loginForm" action="" method="POST">
  					<div class="login-form">
  							<div class="form-group ">
  								<label for="username">Usuario</label>
  								<div class="input-group input-group-custom">
  									<div class="input-group-addon input-group-addon-custom">
                      <div class="icon-uno user"></div>
  									</div>
  									<input id="username" name="username" class="form-control form-control-custom" placeholder="Usuario" type="text" value="">
  								</div>

  								<span class="icon-uno cross icon-small form-control-feedback input-feedback hidden" aria-hidden="true"></span> <label id="usernameError" class="error hidden"></label>
  							</div>
  							<div class="form-group ">
  								<label for="username">Contraseña</label>
  								<div class="input-group input-group-custom">
  									<div class="input-group-addon input-group-addon-custom">
  										<div class="icon-dos lock" aria-hidden="true"></div>
  									</div>
  									<input id="password" name="password" class="form-control form-control-custom" placeholder="Contraseña" type="password" value="">
  								</div>
  								<span class="icon-uno cross icon-small form-control-feedback input-feedback hidden" aria-hidden="true"></span> <label id="passwordError" class="error hidden"></label>
  							</div>
                <div id="btn-submit">
  						<input type="submit" value="Acceder" class="btn-blue">
  					</div>

  					<a class="btn btn-link" id="forgotten-password" role="button">He olvidado mi contraseña</a>

                      <div class="login-messages-container hidden" id="responseText">
                          <p><span class="icon-uno info-line icon-medium"></span><span id="success-message"></span></p>
                      </div>
                      <div class="login-messages-container  hidden" id="responseTextError">
                          <p><span class="icon-uno question-circle-line icon-medium"></span><span id="error-message"></span></p>
                      </div>
  				</form>
  			</div>
  		</div>
@endsection

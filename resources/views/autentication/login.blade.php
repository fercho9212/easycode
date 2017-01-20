<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    width:80%;
}
.margin {
  margin: 0 !important;
}
</style>
  </head>
  <body class="teal darken-3">
    <div id="login-page" class="row">
      <div class="col s12 l12 z-depth-6 card-panel">
        {{Form::open(['route'=>'login','method'=>'POST'])}}
          <div class="row">
            <div class="input-field col s12 center">
              <img src="http://i.ct-stc.com/1/logos/empresas/2014/10/30/lumitax-sas-997E54579B9BB002thumbnail.jpeg" alt="" class="responsive-img valign profile-image-login">
              <p class="center login-form-text">Sistema de Administración</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input name="email" class="validate" id="email" type="email">
              <label  for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input name="password" id="password" type="password">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me">Remember me</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">

              {!!Form::submit('Login',['class'=>'btn waves-effect waves-light col s12'])!!}
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="register.html">Register Now!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
            </div>
          </div>

        {{Form::close()}}
      </div>
    </div>

  </body>
</html>

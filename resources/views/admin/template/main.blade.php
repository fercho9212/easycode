<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Defualt') Panel de administración </title>
    {{ Html::style('plugins/bootstrap/css/bootstrap.css') }}
  </head>
  <body>
    @include('admin.template.components.nav')
    <section>
      @yield('content')
    </section>
    {{ Html::script('plugins/jquery/js/jquery-3.1.1.min.js') }}
    {{ Html::script('plugins/bootstrap/js/bootstrap.js') }}
  </body>
</html>

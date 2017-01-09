<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Defualt') Panel de administración </title>
    {{ Html::style('plugins/materialize/css/materialize-icons.css') }}
    {{ Html::style('plugins/materialize/css/materialize.css') }}
  </head>
  <body>
    @include('admin.template.components.nav')
    <section>
      @yield('content')
    </section>
    {{ Html::script('plugins/jquery/js/jquery.js') }}
    {{ Html::script('plugins/materialize/js/materialize.js') }}
    <script>
     $(function(){
       $(".button-collapse").sideNav();
     });
    </script>
  </body>

</html>

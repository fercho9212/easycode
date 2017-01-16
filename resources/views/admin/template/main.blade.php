<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Defualt') Panel de administración </title>
    {{ Html::style('plugins/materialize/css/materialize-icons.css') }}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    {{ Html::style('plugins/materialize/css/materialize.css') }}
    {{ Html::style('css/style_theme.css') }}
  </head>
  <body>
    @include('admin.template.components.nav')
    <main>
      <section>
        <div class="container">
            @yield('content')
        </div>
      </section>
    <main>
    {{ Html::script('plugins/jquery/js/jquery.js') }}
    {{ Html::script('plugins/materialize/js/materialize.js') }}
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

    <script>
     $(function(){

      //Pagination
      $('.pagination li.disabled span').html('<a href="#!"><i class="material-icons">chevron_left</i></a></li>');
      $('.pagination li:last-child').html('<a href="#!"><i class="material-icons">chevron_right</i></a></li>');
      $('.pagination li').addClass('waves-effect');
      $('.pagination li a[rel="prev"]').html('<a href="#!"><i class="material-icons">chevron_left</i></a></li>');

$('#table_id').DataTable();





       $('select').material_select();
       $('.button-collapse').sideNav({
       menuWidth: 280, // Default is 240
       closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
     }
   );
   $('.collapsible').collapsible();

     });
    </script>

  </body>

</html>

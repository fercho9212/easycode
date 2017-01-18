<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Defualt') Panel de administración </title>
    {{ Html::style('plugins/materialize/css/materialize-icons.css') }}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    <link rel="stylesheet"type="text/css"  href="//cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
    {{ Html::style('plugins/materialize/css/materialize.css') }}
    {{ Html::style('css/style_theme.css') }}

  </head>
  <body>
    @include('admin.template.components.nav')
    <main>
      <section>
        <div class="container">
            @include('admin.template.components.errors')
            @yield('content')
        </div>
      </section>
    <main>
    {{ Html::script('plugins/jquery/js/jquery.js') }}
    {{ Html::script('plugins/materialize/js/materialize.js') }}
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


    <script>
     $(function(){

      //Pagination
      $('.pagination li.disabled span').html('<a href="#!"><i class="material-icons">chevron_left</i></a></li>');
      $('.pagination li:last-child').html('<a href="#!"><i class="material-icons">chevron_right</i></a></li>');
      $('.pagination li').addClass('waves-effect');
      $('.pagination li a[rel="prev"]').html('<a href="#!"><i class="material-icons">chevron_left</i></a></li>');


$('#table_id').DataTable({
  dom: 'Bfrtip',
  buttons: [
                {
                  extend:'excelHtml5',
                  text:   'Excle',
                  titleAttr:'Excel'
                },
                {
                  extend:'pdfHtml5',
                  text:   'PDF',
                  titleAttr:'PDF'
                },
                {
                  extend:'print',
                  text:   'PRINT',
                  titleAttr:'PDF'
                }
            ],
      "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
                dom: 'Bfrtip',

    });
  $("select").val('10');
  $('select').addClass("browser-default");
  $('select').material_select();




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

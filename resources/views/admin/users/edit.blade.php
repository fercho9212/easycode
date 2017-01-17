@extends('admin.template.main')
@section('title','Editar Usuario')
@section('content')

  <div class="container">
    <h3 class="center">Crear usuario</h3>
    <div class="col s6 m6 l6">
       <div class="card">
         <div class="card-content ">
            <span class="card-title center">Card Title</span>
            {!!Form::open(['route'=>['users.update',$user->name],'method'=>'POST'])!!}

              <div class="row">

                <div class="input-field col s12 m6 l4">
                  <i class="material-icons prefix">account_circle</i>
                  {!!Form::text('name',$user->name,['class'=>'validate','id'=>'icon_prefix'])!!}
                  {!!Form::label('name','Nombre',array('for' => 'icon_prefix'))!!}
                </div>

                <div class="input-field col s12 m6 l4">
                  <i class="material-icons prefix">email</i>
                  {!!Form::text('email',$user->email,['class'=>'validate','id'=>'icon_telephone'])!!}
                  {!!Form::label('email','Correo',array('for' => 'icon_telephone'))!!}
                </div>

                <div class="input-field col s12 m6 l4 ">
                  <i class="material-icons prefix">password</i>

                  {!!Form::password('password',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                  {!!Form::label('password',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                </div>

                </div>

                <div class="row">


                  <div class="input-field col s6">
                    {!! Form::select('type',[''=>'Seleccione','member'=>'miembro','admin'=>'Administrador'])!!}
                    {!! Form::label('type','Tipo')!!}
                  </div>
                </div>

                <div class="row">
                  <div class="center">
                    {!! Form::submit('Registrar!',['class'=>'waves-effect waves-light btn ']);!!}
                  </div>

                </div>


      {!!Form::close()!!}
    </div>
  </div>
    </div>
  </div>


@endsection

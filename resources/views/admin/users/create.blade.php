@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')

  <div class="container">
    <h4 class="">Crear Usuarios</h4>
    <div class="col s6 m6 l6">
      {!!Form::open(['route'=>'users.store','method'=>'POST'])!!}


              <div class="row">

                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  {!!Form::text('name',null,['class'=>'validate','id'=>'icon_prefix'])!!}
                  {!!Form::label('name','Nombre',array('for' => 'icon_prefix'))!!}
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  {!!Form::text('mail',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                  {!! Form::label('mail','Correo',array('for' => 'icon_telephone'))!!}
                </div>
                </div>

                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">password</i>

                    {!!Form::password('password',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                    {!!Form::label('password',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                  </div>

                  <div class="input-field col s6">
                    {!! Form::label('type','Tipo')!!}
                    {!! Form::select('type',['member'=>'miembro','admin'=>'Administrador'])!!}
                  </div>
                </div>










      {!!Form::close()!!}
    </div>
  </div>


@endsection

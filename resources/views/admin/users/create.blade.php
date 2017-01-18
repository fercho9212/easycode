@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')

  <div class="container">
    <h3 class="center">Crear usuario</h3>
    @if(count($errors)>0)
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    @endif
    <div class="col s6 m6 l6">
       <div class="card">
         <div class="card-content ">

            <span class="card-title center">Card Title</span>
      {!!Form::open(['route'=>'users.store','method'=>'POST'])!!}

              <div class="row">

                <div class="input-field col s12 m6 l4">
                  <i class="material-icons prefix">account_circle</i>
                  {!!Form::text('name',null,['class'=>'validate','id'=>'icon_prefix'])!!}
                  {!!Form::label('name','Nombre',array('for' => 'icon_prefix'))!!}
                  @if ($errors->has('name'))
                    {{$errors->first('name')}}
                  @endif
                </div>

                <div class="input-field col s12 m6 l4">
                  <i class="material-icons prefix">email</i>
                  {!!Form::text('email',null,['class'=>'validate','id'=>'icon_telephone'])!!}
                  {!!Form::label('email','Correo',array('for' => 'icon_telephone'))!!}
                  @if ($errors->has('email'))
                    {{$errors->first('email')}}
                  @endif
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

@extends('admin.template.main')
@section('title','Agregar categoria')
 @section('content')
  <div class="container">
    <h3 class="center">Crear usuario</h3>
      <div class="col s6 m6 l6">
         <div class="card">
           <div class="card-content ">


                   @if (isset($category))
                     <span class="card-title center">Editar Categoria</span>
                     {!! Form::model($category,['method'=>'PUT','route'=>['categories.update',$category->id]]) !!}
                    @else
                      <span class="card-title center">Crears Categoria</span>
                      {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
                   @endif
                      <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">account_circle</i>
                        {!!Form::text('name',null,['class'=>'validate','id'=>'icon_prefix'])!!}
                        {!!Form::label('name','Nombre',array('for' => 'icon_prefix'))!!}
                      </div>
                      @if ($errors->has('name'))
                        {{$errors->first('name')}}
                      @endif
                      <div class="row">
                        <div class="center">
                          {!! Form::submit('Registrar Categoria',['class'=>'waves-effect waves-light btn ']);!!}
                        </div>
                      </div>

                    {!! Form::close()!!}
            </div>
          </div>
        </div>
      </div>

  @endsection

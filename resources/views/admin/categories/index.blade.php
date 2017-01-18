@extends('admin.template.main')
@section('content')
  @if (session()->has('flash_notification.message'))
      <div class="alert alert-{{ session('flash_notification.level') }}">
          {!! session('flash_notification.message') !!}
      </div>
  @endif


    <table id="" class="display bordered">
          <thead>
            <tr>
                <th data-field="id">Número</th>
                <th data-field="name">Category</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($categories as $category)
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{route('categories.edit',$category->id)}}" class="waves-effect waves-light btn-floating btn green darken-3"><i class="material-icons">mode_edit</i></a>
                    <a href="{{route('categories.destroy',$category->id)}}" class="waves-effect waves-light btn-floating btn red darken-4"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
            @endforeach
          </tbody>

        </table>
@endsection

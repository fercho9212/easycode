@extends('admin.template.main')
@section('content')
<br><br>
<a href="{{ route('users.create')}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
<br><br>
@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        {!! session('flash_notification.message') !!}
    </div>
@endif

  <table id="table_id" class="display bordered">
        <thead>
          <tr>
              <th data-field="id">Nrerame</th>
              <th data-field="name">Item Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->name }}</td>

                  @if ($user->type == "admin")
                     <td><span class="" data-badge-caption="">{{$user->type}}</span></td>
                    @else
                     <td><span class="" data-badge-caption="">{{$user->type}}</span></td>
                  @endif

              <td>
                  <a href="{{route('users.edit',$user->id)}}" class="waves-effect waves-light btn-floating btn green darken-3"><i class="material-icons">mode_edit</i></a>
                  <a href="{{route('users.destroy',$user->id)}}" class="waves-effect waves-light btn-floating btn red darken-4"><i class="material-icons">delete_forever</i></a>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>



@endsection

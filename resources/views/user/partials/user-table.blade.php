
  <table  class="striped">
    <thead>
      <tr>
          <th >N° documento</th>
        <th >Usuario</th>
        <th >Nombres</th>
        <th>Usuario creación</th>
          <th>Fecha creación</th>
        <th >Estado</th>
        <th >Opciones</th>
      </tr>
    </thead>
    <tbody >
        @forelse ($users as $user)
        <tr>
            <td >{{$user->document_number}}</td>
            <td >{{$user->user_name}}</td>
            <td >{{$user->name .' '.$user->last_name}} </td>
            <td >{{optional($user->user_created)->user_name}}</td>
            <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
            <td >{{$user->stateDescription}}</td>
            <td >
                <button data-url="{{route('user.edit',$user)}}"  title="Editar" class="edit mb-1 btn-floating mb-1 gradient-45deg-indigo-purple " type="button" name="action">
                    <i class="material-icons">edit</i>
                </button>
                <button data-url="{{route('user.reset-password',$user)}}" title="Reset contraseña" class="reset mb-1 btn-floating mb-1 waves-effect  light-blue" type="button" name="action">
                    <i class="material-icons">refresh</i>
                </button>
                <button data-url="{{route('user.destroy',$user)}}" title="{{$user->state ? 'Deshabilitar' : 'Habilitar'}}" class="delete mb-1 btn-floating mb-1 waves-effect waves-light " type="button" name="action">
                    <i class="material-icons">{{$user->state ? 'delete' : 'check'}}</i>
                </button>
            </td>
          </tr>
        @empty
        <tr class="group">
            <td colspan="7">Sin resultados</td>
          </tr>
        @endempty

    </tbody>
      <tfoot>
      <tr>
          <td colspan="6">
              @if(request()->ajax())
                  {!! $users->render() !!}
              @endif
          </td>
      </tr>
      </tfoot>
  </table>

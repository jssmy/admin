
  <table  class="striped">
    <thead>
      <tr>
        <th >Usuario</th>
        <th >Nombres</th>
        <th >Email</th>
        <th >Estado</th>
        <th >Opciones</th>
      </tr>
    </thead>
    <tbody >
        @forelse ($users as $user)
        <tr>
            <td >{{$user->user_name}}</td>
            <td >{{$user->name}}</td>
            <td >{{$user->email}}</td>
            <td >{{$user->stateDescription}}</td>
            <td ></td>
          </tr>
        @empty
        <tr class="group">
            <td colspan="5">Sin resultados</td>
          </tr>
        @endempty

    </tbody>
      <tfoot>
      <tr>
          <td colspan="5">
              @if(request()->ajax())
                  {!! $users->render() !!}
              @endif
          </td>
      </tr>
      </tfoot>
  </table>

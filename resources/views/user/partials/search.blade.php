<form id="form-user-seach" method="get" action="{{route('user.index')}}">
    @csrf
    <div class="row">
        <div class="input-field col s12 m2">
          <input type="text" name="user_name">
          <label for="fn" class="">Usuario</label>
        </div>
        <div class="input-field col s12 m2">
          <input type="text" name="name">
          <label for="fn" class="" >Nombres</label>
        </div>
        <div class="input-field col s12 m2">
          <select name="state">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
            <option value="">Todos
          </select>
          <label>Estados</label>
        </div>
        <div class="input-field col s12 m1">
          <button class="search btn col s12 m12 mb-1 waves-effect gradient-45deg-indigo-purple waves-light " type="button" name="action">Consultar
            <i class="material-icons right">search</i>
          </button>
        </div>
        <div class="input-field col s12 m1">
            <button class="clean btn col s12 m12 mb-1 waves-effect waves-light " type="button" name="action">Limpiar
                <i class="material-icons right">do_not_disturb_alt</i>
            </button>
        </div>
      </div>
</form>

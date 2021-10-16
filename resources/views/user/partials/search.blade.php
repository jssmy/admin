<form id="form-user-seach" method="get" action="{{route('user.index')}}">
    @csrf
    <div class="row">
        <div class="input-field col-md-3 col-sm-3">
          <input type="text" name="user_name">
          <label for="fn" class="">Usuario</label>
        </div>
        <div class="input-field col-md-3">
          <input type="text" name="name">
          <label for="fn" class="" >Nombres</label>
        </div>
        <div class="input-field col-md-3 col-sm-3">
          <select name="state">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
            <option value="">Todos
          </select>
          <label>Estados</label>
        </div>
        <div class="input-field col-md-3 col-sm-12">
          <button title="Buscar" class="search mb-1 btn-flat waves-effect  gradient-45deg-indigo-purple white-text mr-1" type="button" name="action">
            <i class="material-icons">search</i>
          </button>
            <button title="Limpiar" class="clean mb-1 btn-flat waves-effect waves-light pink accent-2 white-text mr-1" type="button" name="action">
                <i class="material-icons">do_not_disturb_alt</i>
            </button>
        </div>

      </div>
</form>

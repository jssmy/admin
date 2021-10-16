<form id="form-data" action="{{route('user.store')}}" class="col-md-12">
    <div class="row">
        <div class="input-field col m6 s12">
            <input required class="input-document-number" id="input_document_number" name="document_number" type="text">
            <label>DNI</label>
        </div>
        <div class="input-field col m6 s12">
            <input required id="input_user_name" name="user_name" type="text">
            <label>Usuario</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col m6 s12">
            <input required id="input_name" class="input-text" name="name" type="text">
            <label>Nombres</label>
        </div>
        <div class="input-field col m6  s12">
            <input  required class="input-text" id="input_last_name" name="last_name" type="text">
            <label>Apellidos</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="input_password" readonly name="password">
            <label id="label-password" class="">Contraseña </label>
            <span style="font-size: 13px" class="left green-text">Contraseña por defecto es el DNI</span>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <button class="cancel btn mb-1 waves-effect left" type="button">Cancelar
        </button>
        <button class="store btn mb-1 waves-effect gradient-45deg-indigo-purple right" type="button">Guardar
            <i class="material-icons right">add</i>
        </button>
    </div>


</form>
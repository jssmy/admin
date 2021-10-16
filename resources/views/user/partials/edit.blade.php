<form id="form-data" action="{{route('user.update',$user)}}" class="col-md-12">
    <div class="row">
        <div class="input-field col m6 s12">
            <input required class="input-document-number" id="input_document_number" value="{{$user->document_number}}" name="document_number" type="text">
            <label class="active">DNI</label>
        </div>
        <div class="input-field col m6 s12">
            <input required id="input_user_name" name="user_name" value="{{$user->user_name}}" type="text">
            <label class="active">Usuario</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col m6 s12">
            <input required id="input_name" value="{{$user->name}}" class="input-text" name="name" type="text">
            <label class="active">Nombres</label>
        </div>
        <div class="input-field col m6  s12">
            <input  required class="input-text" id="input_last_name"  value="{{$user->last_name}}" name="last_name" type="text">
            <label class="active">Apellidos</label>
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
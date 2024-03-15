<div class="mb-3">
    @csrf
<label for="rol_id" class="form-label">Rol:</label>
<select name="rol_id" class="form-control">
    @foreach($roles as $rol)
        <option value="{{ $rol->rol_id }}" {{ isset($users) && $users->rol_id==$rol->rol_id?'selected':'' }} >{{ $rol->rol_descripcion }}</option>
    @endforeach
</select>


<br>
            <label for="name" class="form-label">Usuario:</label>
            <input type="text" id="name" value="{{ isset($users)?$users->name:''}}"name="name" class="form-control">
            <label for="usu_nombre" class="form-label">Nombres:</label>
            <input type="text" id="usu_nombre" value="{{ isset($users)?$users->usu_nombre:''}}"name="usu_nombre" class="form-control">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" value="{{ isset($users)?$users->email:''}}"name="email" class="form-control">
            <label for="usu_telefono" class="form-label">Teléfono:</label>
            <input type="text" id="usu_telefono" value="{{ isset($users) ? $users->usu_telefono:''}}" name="usu_telefono" class="form-control" pattern="[0-9]{1,10}" maxlength="10" title="Ingrese solo números (máximo 10)">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
           
        </div>
        <button type="submit" class="btn btn-outline-secondary">Guardar</button>
        
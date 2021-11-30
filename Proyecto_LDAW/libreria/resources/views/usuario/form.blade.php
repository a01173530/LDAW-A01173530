<label for="name" for="exampleFormControlInput1" class="form-label">Nombre del usuario</label>
<input type="text" name="name"  class="form-control" value="{{ isset($usuario->name)?$usuario->name:'' }}" id="name">
<br>
<label for="correo" for="exampleFormControlInput1" class="form-label">Correo del usuario</label>
<input type="email"   class="form-control" name="email" value="{{ isset($usuario->email)?$usuario->email:'' }}" id="email">
<br>
<label for="password" for="exampleFormControlInput1" class="form-label">Contraseña </label>
<input type="password"  class="form-control" name="password" value="{{ isset($usuario->password)?$usuario->password:'' }}" id="password">
<br>
<label for="rol" for="exampleFormControlInput1" class="form-label">Rol </label>
<select class="form-select" aria-label="Default select example" name="rol" id="rol">
  <option selected value="{{ isset($usuario->rol)?$usuario->rol:'' }}">{{ isset($usuario->rol)?$usuario->rol:'' }}</option>
  <option value="Usuario">Usuario</option>
  <option value="Administrador">Administrador</option>
</select>
<br>

<input type="submit" value="Guardar" class="btn btn-success">
<br>
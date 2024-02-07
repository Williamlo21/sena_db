<div class="container">
  <form action="<?=base_url?>aprendiz/guardarAprendiz" method="post">
    <div class="sm-3">
      <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
      <select class="form-select" id="tipoDocumento" name="tipoDocumento" required>
        <option selected>SELECCIONE UNA OPCIÓN</option>
        <option value="0">NO REGISTRA</option>
        <option value="1">CEDULA DE CIUDADANIA</option>
        <option value="2">TARJETA DE IDENTIDAD</option>
        <option value="3">REGISTRO CIVIL</option>
        <option value="4">CEDULA DE EXTRANJERIA</option>
        <option value="5">PASAPORTE</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="numeroDocumento" class="form-label">Número de Documento</label>
      <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" required>
    </div>

    <div class="mb-3">
      <label for="primerNombre" class="form-label">Primer Nombre</label>
      <input type="text" class="form-control" id="primerNombre" name="primerNombre" required>
    </div>

    <div class="mb-3">
      <label for="segundoNombre" class="form-label">Segundo Nombre</label>
      <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
    </div>

    <div class="mb-3">
      <label for="primerApellido" class="form-label">Primer Apellido</label>
      <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
    </div>

    <div class="mb-3">
      <label for="segundoApellido" class="form-label">Segundo Apellido</label>
      <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" required>
    </div>
    <div class="mb-3">
      <label for="fechaDeNacimiento" class="form-label">Fecha de Nacimiento</label>
      <input type="date" class="form-control" id="fechaDeNacimiento" name="fechaDeNacimiento">
    </div>
    <div class="sm-3">
      <label for="sexo" class="form-label">Sexo</label>
      <select class="form-select" id="sexo" name="sexo" required>
        <option selected>SELECCIONE UNA OPCIÓN</option>
        <option value="0">INDEFINIDO</option>
        <option value="1">MASCULINO</option>
        <option value="2">FEMENINO</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Telefono</label>
      <input type="text" class="form-control" name="telefono">
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Direccion</label>
      <input type="text" class="form-control" name="direccion">
    </div>
    <!-- aquí vamos con el formulario del registro -->
    <button type="submit" class="btn btn-primary">Guardar Aprendiz</button>
  </form>
</div>
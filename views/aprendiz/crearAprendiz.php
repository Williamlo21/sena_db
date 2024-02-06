<div class="container mt-5">
    <form action="" method="post">
        <div class="mb-3">
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
        
        <button type="submit" class="btn btn-primary">Guardar Aprendiz</button>
    </form>
</div>

</td>
</tr>
<tr>
    <th><label for="numeroDocumento">Numero de Documento</label></th>
    <td><input type="text" name="numeroDocumento" required></td>
</tr>
<tr>
    <th><label for="primerNombre">Primer Nombre</label></th>
    <td><input type="text" name="primerNombre" required></td>
</tr>
<tr>
    <th><label for="segundoNombre">Segundo Nombre</label></th>
    <td><input type="text" name="segundoNombre"></td>
</tr>
<tr>
    <th><label for="primerApellido">Primer Apellido</label></th>
    <td><input type="text" name="primerApellido" required></td>
</tr>
<tr>
    <th><label for="segundoApellido">Segundo Apellido</label></th>
    <td><input type="text" name="segundoApellido"></td>
</tr>
<tr>
    <th><label for="fechaDeNacimiento">Fecha de Nacimiento</label></th>
    <td></td>
</tr>
</form>
</table>
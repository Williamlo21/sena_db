<div class="table">
  <div class="container">
    <div class="row">
      <thead>
        <tr>
          <div class="col">
            <th scope="col">Id</th>
          </div>
          <div class="col">
            <th scope="col">Numero de Documento</th>
          </div>
          <div class="col">
            <th scope="col">Primer Nombre</th>
          </div>
          <div class="col">
            <th scope="col">Primer Apellido</th>
          </div>
          <div class="col">
            <th scope="col">Editar</th>
          </div>
          <div class="col">
            <th scope="col">Eliminar</th>
          </div>
        </tr>
      </thead>
    </div>
  </div>
  <tbody>

  </tbody>
</div>
<div class="container">
  <div class="row">
    <div class="col-2 col-xs-12">
      <form action="<?= base_url ?>" method="post">
        <button type="submit" class="btn btn-primary">Inicio</button>
      </form>
    </div>
    <div class="col-2 col-xs-12">
      <form action="<?= base_url ?>aprendiz/crearAprendiz" method="post">
        <button type="submit" class="btn btn-primary">Crear Aprendiz</button>
      </form>
    </div>
  </div>
</div>
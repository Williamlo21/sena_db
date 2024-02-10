<?php
if (isset($_GET['data'])) {
    // Decodificar el JSON y asignar a $nAprendiz
    $nAprendizEncoded = urldecode($_GET['data']);
    $nAprendiz = json_decode($nAprendizEncoded, true);
}
if (isset($nAprendiz) && is_array($nAprendiz)) {
?>
    <div class="container mt-4">
        <h2>Información del Aprendiz</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td><?= htmlentities($nAprendiz['id']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de Documento</th>
                    <td><?= htmlentities($nAprendiz['tipoDeDocumento']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Número de Documento</th>
                    <td><?= htmlentities($nAprendiz['numeroDocumento']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Primer Nombre</th>
                    <td><?= htmlentities($nAprendiz['primerNombre']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Segundo Nombre</th>
                    <td><?= htmlentities($nAprendiz['segundoNombre']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Primer Apellido</th>
                    <td><?= htmlentities($nAprendiz['primerApellido']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Segundo Apellido</th>
                    <td><?= htmlentities($nAprendiz['segundoApellido']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td><?= htmlentities($nAprendiz['fechaDeNacimiento']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Edad</th>
                    <td><?= htmlentities($nAprendiz['edad']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Sexo</th>
                    <td><?= htmlentities($nAprendiz['sex']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Teléfono</th>
                    <td><?= htmlentities($nAprendiz['telefono']); ?></td>
                </tr>
                <tr>
                    <th scope="row">Dirección</th>
                    <td><?= htmlentities($nAprendiz['direccion']); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container d-flex justify-content-center btn-editar">
        <!-- Botón con enlace para editar el aprendiz -->
        <a href="<?= base_url ?>aprendiz/editarAprendiz&id=<?= $nAprendiz['id']; ?>" class="btn btn-warning">Editar</a>
    </div>
<?php
} else {
    echo "Error: No hay datos de aprendiz disponibles.";
    // O redirigir a otra página
    // header('Location: ' . base_url . 'error.php');
    // exit;
}
?>
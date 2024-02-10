<?php

// Requiere la conexión a la base de datos
require_once 'config/db.php';

class AleatoriosController
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = Database::connect();
        } catch (Exception $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }

    // Función para generar registros aleatorios
    public function generarRegistrosAleatorios($cantidad = 1000)
    {
        // Arreglos con datos aleatorios
        $tiposDocumentos = [0, 1, 2, 3, 4, 5];
        $nombres = ['Juan', 'María', 'Carlos', 'Luisa', 'Andrés', 'Ana', 'Pedro', 'Laura', 'Javier', 'Sofía'];
        $apellidos = ['Gómez', 'López', 'Martínez', 'Rodríguez', 'Pérez', 'Fernández', 'González', 'Díaz', 'Hernández', 'Torres'];
        $sexos = [1, 2, 0]; // Ajusta según tus valores reales
        $telefonos = ['5551234', '5555678', '5559101', '5552345', '5556789'];

        // Fecha de nacimiento aleatoria entre 50 y 14 años atrás

        // Generar datos aleatorios
        $numeroDocumento = rand(10000000, 99999999);
        $idTipoDocumento = $tiposDocumentos[array_rand($tiposDocumentos)];
        $primerNombre = $nombres[array_rand($nombres)];
        $segundoNombre = rand(0, 1) ? $nombres[array_rand($nombres)] : null;
        $primerApellido = $apellidos[array_rand($apellidos)];
        $segundoApellido = rand(0, 1) ? $apellidos[array_rand($apellidos)] : null;
        $fechaNacimiento = $this->generarFechaAleatoria();
        $edad = $this->calcularEdad($fechaNacimiento);
        // Formatear la fecha
        $idSexo = $sexos[array_rand($sexos)];
        $telefono = $telefonos[array_rand($telefonos)];
        $direccion = 'Dirección aleatoria';

        // Consulta SQL para insertar el registro
        $sql = "INSERT INTO aprendices (idTipoDocumento, numeroDocumento, primerNombre, segundoNombre, primerApellido, segundoApellido, fechaDeNacimiento, edad, idSexo, telefono, direccion)
            VALUES (?, ?, ?, ?, ?, ?, STR_TO_DATE(?, '%Y-%m-%d'), ?, ?, ?, ?)";


        // Preparar la consulta
        $stmt = $this->db->prepare($sql);

        // Vincular los parámetros con el tipo de dato adecuado
        $stmt->bind_param(
            "iisssssisss",
            $idTipoDocumento,
            $numeroDocumento,
            $primerNombre,
            $segundoNombre,
            $primerApellido,
            $segundoApellido,
            $fechaNacimiento,
            $edad,
            $idSexo,
            $telefono,
            $direccion
        );
        // Ejecutar la consulta
        $stmt->execute();

        // Imprimir mensaje de éxito
        echo "Registros generados exitosamente.";

        // Cerrar la conexión
        // $stmt->close();
        // $this->db->close();
    }


function generarFechaAleatoria()
{
    // Establece el rango de años
    $anioInicio = date('Y') - 50; // 50 años atrás
    $anioFin = date('Y') - 14; // 14 años atrás

    // Genera un año aleatorio en el rango
    $anioAleatorio = rand($anioInicio, $anioFin);

    // Genera un mes y un día aleatorios
    $mesAleatorio = rand(1, 12);
    $diaAleatorio = rand(1, 28); // Usamos 28 para evitar problemas con febrero

    // Combina el año, mes y día en una cadena de fecha
    $fechaAleatoria = sprintf('%04d-%02d-%02d', $anioAleatorio, $mesAleatorio, $diaAleatorio);

    return $fechaAleatoria;
}

function calcularEdad($fechaNacimiento)
{
    // Crea un objeto DateTime para la fecha de nacimiento
    $fechaNacimientoObj = new DateTime($fechaNacimiento);

    // Crea un objeto DateTime para la fecha actual
    $fechaActual = new DateTime();

    // Calcula la diferencia entre la fecha actual y la fecha de nacimiento
    $diferencia = $fechaNacimientoObj->diff($fechaActual);

    // La propiedad 'y' de la diferencia es la edad de la persona
    $edad = $diferencia->y;

    return $edad;
}



}

// Llama a la función para generar registros aleatorios 1000 veces
$aleatorio = new AleatoriosController();
for ($i = 0; $i < 10; $i++) {
    $aleatorio->generarRegistrosAleatorios();
}

// $fecha = $aleatorio->generarFechaAleatoria();
// $edad = $aleatorio->calcularEdad($fecha);

// echo $fecha . "esta es la fecha" . PHP_EOL;
// echo $edad;

<?php
require_once 'models/aprendiz.php';
class aprendizController {
    public function crearAprendiz(){
        require_once "views/aprendiz/crearAprendiz.php";
        // funcion que nos redirige a la pagina con el formulario para registrar al aprendiz
    }
		public function verAprendices(){
			// con esta funcion hacemos la consulta de todos los aprendices que hay registrados
			$Naprendices = new Aprendiz();
			$aprendices = $Naprendices->verAprendices();
			require_once'views/aprendiz/verAprendices.php';	
		}
		public function verAprendiz(){
		// funcion para hacer la consulta de un solo aprendiz con el id
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
				$aprendiz = new Aprendiz();
				$aprendiz->setId($id);
				// $_SESSION['aprendiz'] = $aprendiz->verAprendiz();
				$nAprendiz = $aprendiz->verAprendiz();
				require_once 'views/aprendiz/verAprendiz.php';
			}

		}
    public function guardarAprendiz(){
        // funcion donde recibimos el post del formulario para crear al aprendiz
        $tipoDocumento = isset($_POST['tipoDocumento']) ? strtoupper($_POST['tipoDocumento']) : '';
        $numeroDocumento = isset($_POST['numeroDocumento']) ? strtoupper($_POST['numeroDocumento']) : '';
        $primerNombre = isset($_POST['primerNombre']) ? strtoupper($_POST['primerNombre']) : '';
        $segundoNombre = isset($_POST['segundoNombre']) ? strtoupper($_POST['segundoNombre']) : NULL;
        $primerApellido = isset($_POST['primerApellido']) ? strtoupper($_POST['primerApellido']) : '';
        $segundoApellido = isset($_POST['segundoApellido']) ? strtoupper($_POST['segundoApellido']) : NULL;
        $fechaDeNacimiento = isset($_POST['fechaDeNacimiento']) ? $_POST['fechaDeNacimiento'] : '';
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $direccion = isset($_POST['direccion']) ? strtoupper($_POST['direccion']) : '';
        try {
            // Verificar si los campos obligatorios no están vacíos
            if (!empty($tipoDocumento) && !empty($numeroDocumento) && !empty($primerNombre) && !empty($primerApellido) && !empty($fechaDeNacimiento) && !empty($sexo)  && !empty($direccion) && !empty($telefono)) {
                $Naprendiz = new Aprendiz;
								
                $Naprendiz->setTipoDocumento($tipoDocumento);
								$Naprendiz->setNumeroDocumento($numeroDocumento);
								$Naprendiz->setPrimerNombre($primerNombre);
								$Naprendiz->setSegundoNombre($segundoNombre);
								$Naprendiz->setPrimerApellido($primerApellido);
								$Naprendiz->setSegundoApellido($segundoApellido);
								$Naprendiz->setFechaDeNacimiento($fechaDeNacimiento);
								// usamos la funcion calcular edad. para no tener inconsistencias en la informacion
								$edad = $Naprendiz->calcularEdad();
								$Naprendiz->setEdad($edad);
								$Naprendiz->setSexo($sexo);
								$Naprendiz->setTelefono($telefono);
								$Naprendiz->setDireccion($direccion);

								$Naprendiz->crearAprendiz();
								header("Location: ". base_url);
								exit;
								
            }else{
							echo "los campos son obligatorios";
						}
        }catch(Exception $e){
					echo "error al guardar al aprendiz" . $e->getMessage();

				}
			
		}
	}


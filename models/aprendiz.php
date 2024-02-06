<?php

class Aprendiz{
    private $tipoDocumento;
    private $numeroDocumento;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $fechaDeNacimiento;
    private $edad;
    private $sexo;
    private $telefono;
    private $direccion;
    private $password;
    public $db;


    public function __construct()
    {
        try {
            $this->db = Database::connect();
        } catch (Exception $e) {
            echo "Error de conexión: " . $e->getMessage();

            exit;
        }
    }

    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $this->db->real_escape_string($tipoDocumento);

        return $this;
    }

    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $this->db->real_escape_string($numeroDocumento);

        return $this;
    }

    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $this->db->real_escape_string($primerNombre);

        return $this;
    }

    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $this->db->real_escape_string($segundoNombre);

        return $this;
    }

    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $this->db->real_escape_string($primerApellido);

        return $this;
    }

    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $this->db->real_escape_string($segundoApellido);

        return $this;
    }

    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $this->db->real_escape_string($edad);

        return $this;
    }


    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $this->db->real_escape_string($sexo);
        return $this;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    
        public function setTelefono($telefono)
        {
            $this->telefono = $this->db->real_escape_string($telefono);
            return $this;
        }
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
        return $this;
    }
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    public function calcularEdad()
    {
        // Convertir las fechas a objetos DateTime
        $nacimiento = new DateTime($this->fechaDeNacimiento);
        $actual = new DateTime();

        // Calcular la diferencia en años
        $diferencia = $nacimiento->diff($actual);

        // Obtener el número de años
        $edad = $diferencia->y;

        return $edad;
    }
}
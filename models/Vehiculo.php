<?php

class Vehiculo
{
    private $db;
    private $vehiculos;
    private $vehiculo;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->vehiculos = array();
        $this->vehiculo = array();
    }
    // Función del All
    public function getVehiculos()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM vehiculos");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->vehiculos[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->vehiculos;
    }
    //Función de Show
    public function getVehiculo($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM vehiculos WHERE idVehiculo = ? ");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $this->vehiculo = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $this->vehiculo;
    }
    //Función de Create
    public function create($propietario,$fichaTecnica,$diagnosis)
    {
        if (!empty($propietario)) {
            if (!empty($diagnosis)) {
                #region create-con-array
                try {
                    $stmt = $this->db->prepare("INSERT INTO vehiculos(propietario,fichaTecnica,diagnosis) VALUES (?, ?, ?)");
                    $stmt->execute(array($propietario,$fichaTecnica,$diagnosis));
                } catch (Exception $e) {
                    die('Error ' . $e->getMessage());
                }
                $result = 0;
            } else {
                $result = 1;
            }
        } else {
            $result = 2;
        }
        
        return $result;
    }
    //Función de Update
    public function update($id, $propietario,$fichaTecnica,$diagnosis)
    {
        try {
            $stmt = $this->db->prepare("UPDATE vehiculos SET propietario = ?, fichaTecnica = ?, diagnosis = ? WHERE idVehiculo = ?");
            $stmt->execute(array($propietario,$fichaTecnica,$diagnosis, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }
    //Funcion de Delete
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM vehiculos WHERE idVehiculo = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}

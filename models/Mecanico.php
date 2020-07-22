<?php

class Mecanico
{
    private $db;
    private $mecanicos;
    private $mecanico;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->mecanicos = array();
        $this->mecanico = array();
    }
    // Función del All
    public function getMecanicos()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM mecanicos");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->mecanicos[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->mecanicos;
    }
    //Función de Show
    public function getMecanico($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM mecanicos WHERE idMecanico = ? ");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $this->mecanico = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $this->mecanico;
    }
    //Función de Create
    public function create($nombreCliente,$nombreMecanico)
    {
        if (!empty($nombreCliente)) {
            if (!empty($nombreMecanico)) {
                #region create-con-array
                try {
                    $stmt = $this->db->prepare("INSERT INTO mecanicos(nombreCliente,nombreMecanico) VALUES (?, ?)");
                    $stmt->execute(array($nombreCliente,$nombreMecanico));
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
    public function update($id, $nombreCliente,$nombreMecanico)
    {
        try {
            $stmt = $this->db->prepare("UPDATE mecanicos SET nombreCliente = ?, nombreMecanico = ? WHERE idMecanico = ?");
            $stmt->execute(array($nombreCliente,$nombreMecanico, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }
    //Funcion de Delete
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM mecanicos WHERE idMecanico = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}

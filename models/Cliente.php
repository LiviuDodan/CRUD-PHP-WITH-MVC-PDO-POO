<?php

class Cliente
{
    private $db;
    private $clientes;
    private $cliente;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->clientes = array();
        $this->cliente = array();
    }
    //Función del All
    public function getClientes()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM clientes");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->clientes[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->clientes;
    }
    //Función del Show
    public function getCliente($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM clientes WHERE idCliente = ? ");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $this->cliente = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $this->cliente;
    }
    //Función del Create
    public function create($nombre, $dni, $fichaTecnicaCliente)
    {
        if (!empty($nombre)) {
            if (!empty($dni)) {
                #region create-con-array
                try {
                    $stmt = $this->db->prepare("INSERT INTO clientes(nombre, dni, fichaTecnicaCliente) VALUES (?, ?, ?)");
                    $stmt->execute(array($nombre, $dni, $fichaTecnicaCliente));
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
    //Función del Update
    public function update($id, $nombre, $dni, $fichaTecnicaCliente)
    {
        try {
            $stmt = $this->db->prepare("UPDATE clientes SET nombre = ?, dni = ?, fichaTecnicaCliente = ? WHERE idCliente = ?");
            $stmt->execute(array($nombre, $dni, $fichaTecnicaCliente, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }
    //Función del Delete
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM clientes WHERE idCliente = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}

<?php

class FichaTecnica
{
    private $db;
    private $fichasTecnicas;
    private $fichaTecnica;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->fichasTecnicas = array();
        $this->fichaTecnica = array();
    }
    // Función del All
    public function getFichasTecnicas()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM fichastecnicas");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->fichasTecnicas[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->fichasTecnicas;
    }
    //Función de Show
    public function getFichaTecnica($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM fichastecnicas WHERE idFichaTecnica = ? ");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $this->fichaTecnica = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $this->fichaTecnica;
    }
    //Función de Create
    public function create($tipo,$marca,$modelo,$matricula,$anyo)
    {
        if (!empty($marca)) {
            if (!empty($modelo)) {
                if (!empty($matricula)) {
                    if (!empty($anyo)) {
                        #region create-con-array
                        try {
                            $stmt = $this->db->prepare("INSERT INTO fichastecnicas(tipo,marca,modelo,matricula,anyo) VALUES (?, ?, ?, ?, ?)");
                            $stmt->execute(array($tipo,$marca,$modelo,$matricula,$anyo));
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
            } else {
                $result = 3;
            }
        }else{
            $result=4;
        }
        return $result;
    }
    //Función de Update
    public function update($id, $tipo, $marca,$modelo, $matricula, $anyo)
    {
        try {
            $stmt = $this->db->prepare("UPDATE fichastecnicas SET tipo = ?, marca = ?, modelo = ?, matricula = ?, anyo = ? WHERE idFichaTecnica = ?");
            $stmt->execute(array($tipo, $marca,$modelo, $matricula, $anyo, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }
    //Funcion de Delete
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM fichastecnicas WHERE idFichaTecnica = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}

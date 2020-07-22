<?php

class Conectar
{
    public static function conexion()
    {
        try {
            $con = new PDO('mysql: host=localhost; dbname=taller', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->exec("SET CHARACTER SET UTF8");
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
        return $con;
    }
}
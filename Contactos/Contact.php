<?php
include('../config/config.php');
include('../config/Database.php');

class Contact {
    public $conn;

    function __construct() {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    }

    function save($params) {
        $Nombres = $params['Nombres'];
        $Apellidos = $params['Apellidos'];
        $Email = $params['Email'];
        $Celular = $params['Celular'];
        $Pais = $params['Pais'];
        $Reunion = $params['Reunion'];
        $Image = $params['Image'];
        $Asunto = $params['Asunto'];

        $insert = "INSERT INTO contacto VALUES (NULL, '$Nombres', '$Apellidos', '$Email', '$Celular', '$Pais', '$Reunion', '$Image', '$Asunto')";
        return mysqli_query($this->conn, $insert);
    }

    function getALL() {
        $sql = "SELECT * FROM contacto ORDER BY id ASC";
        return mysqli_query($this->conn, $sql);
    }

    function getOne($id) {
        $sql = "SELECT * FROM contacto WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    function update($params) {
        $Nombres = $params['Nombres'];
        $Apellidos = $params['Apellidos'];
        $Email = $params['Email'];
        $Celular = $params['Celular'];
        $Pais = $params['Pais'];
        $Reunion = $params['Reunion'];
        $Image = $params['Image'];
        $Asunto = $params['Asunto'];
        $id = $params['id'];

        $update = "UPDATE contacto SET Nombres='$Nombres', Apellidos='$Apellidos', Email='$Email', Celular='$Celular', Pais='$Pais', Reunion='$Reunion', Image='$Image', Asunto='$Asunto' WHERE id=$id";
        return mysqli_query($this->conn, $update);
    }

    function remove($id) {
        $remove = "DELETE FROM contacto WHERE id = $id";
        return mysqli_query($this->conn, $remove);
    }

    function saveImage($file) {
        $targetDir = '../images/';
        $fileName = basename($file['Image']['name']);
        $targetPath = $targetDir . $fileName;
        
        if (move_uploaded_file($file['Image']['tmp_name'], $targetPath)) {
            return $fileName;
        } else {
            return null;
        }
    }
    
}

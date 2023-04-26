<?php
include_once "modelo/User.php";
$oUsuario= new User();

if(isset($_POST['cc'])&&isset($_POST['fullname'])&&isset($_POST['password'])&&isset($_POST['email'])){

    $doc=Conexion::limpiar($_POST['cc']);
    $nom=Conexion::limpiar($_POST['fullname']);
    $email=Conexion::limpiar($_POST['email']);
    $clave=Conexion::limpiar($_POST['password']);
    $tel=Conexion::limpiar($_POST['phonenumber']);
    $fec_nac=Conexion::limpiar($_POST['birthdate']);
    $sexo=Conexion::limpiar($_POST['genre']);   
    $tipo= "Paciente";

}
?>
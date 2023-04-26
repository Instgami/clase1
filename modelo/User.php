<?php
if ($index == false) {
  include_once "../includes/php_conexion.php";
} else {
  include_once "includes/php_conexion.php";
}
class User extends Conexion
{

    var $contrasena;
    var $email;
    var $nombre;
    var $doc;
    var $tipo;
    var $tel;
    var $fec_nac;
    var $sexo;

    public function __construct()
    {
    }

    public function nuevoUsuario($email,$contrasena,$tipo,$doc){

    }

    Public function nuevoPaciente ($doc, $nombre,$tel, $fec_nac, $sexo) {

    }
    public function getUsuario($email){
  
    }

}

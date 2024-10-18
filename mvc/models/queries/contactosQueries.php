<?php
namespace App\models\queries;

class ContactosQuery{
    static function all(){
        return "select * from contactos";
    }

    static function insert($contacto){
        $nombre = $contacto->get('nombre');
        $telefono = $contacto->get('telefono');
        $email = $contacto->get('email');
        $sql = "insert into contactos(nombre, telefono, email) values";
        $sql .= "('$nombre','$telefono','$email')";
        return $sql;
    }

    static function whereId($id){
        return "select * from contactos where id=".$id;
    }

    static function update($contacto){
        $id = $contacto->get('id');
        $nombre = $contacto->get('nombre');
        $telefono = $contacto->get('telefono');
        $email = $contacto->get('email');
        $sql = "Update contacto set";
        $sql.= "nombre='.$nombre',";
        $sql.= "telefono='$telefono',";
        $sql.= "email='$email',";
        $sql.= "id='$id',";
        return $sql;
    }
}

?>
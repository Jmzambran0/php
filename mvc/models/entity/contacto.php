<?php
namespace App\models\entity;

use EjemploDb;

class Contacto{
    private $id;
    private $nombre;
    private $telefono;
    private $email;

    function set($prop, $value) {
        $this->{$prop} = $value;
    }

    function get($prop) {
        return $this->{$prop};
    }

    static function all() {
        $sql = ContactosQuery::all();
        $db new EjemploDb();
        $result = $db->query($sql);
        $contactos = [];
        while ($row = $db->fetch_assoc()){
            $contacto = new Contacto();
            $contacto->set('id',$row['id']);
            $contacto->set('nombre',$row['nombre']);
            $contacto->set('telefono',$row['telefono']);
            $contacto->set('email',$row['email']);
            array_push($contactos, $contacto);
        }
        $db->close();
        return $contactos;
    }
}
?>
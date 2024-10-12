<?php
namespace App\controllers;

use App\models\entity\Contacto;

class ContactosController{
    function allContactos() {
        $contactos = Contacto::all();
        return $contactos;
    }
}

?>
<?php
namespace App\controllers;

use App\models\entity\Contacto;

class ContactosController{
    function allContactos() {
        $contactos = Contacto::all();
        return $contactos;
    }

    function newContacto($datosFormulario){
        $contacto = new Contacto();
        $contacto->set('nombre', $datosFormulario['nombre']);
        $contacto->set('telefono', $datosFormulario['telefono']);
        $contacto->set('email', $datosFormulario['email']);
        return $contacto->save();
    }

    function getContacto($id){
        return contacto::find($id);
    }

    function updateContacto($datos){
        $contacto = new Contacto();
        $contacto->set('id', $datos['cod']);
        $contacto->set('nombre', $datos['nombre']);
        $contacto->set('telefono', $datos['telefono']);
        $contacto->set('email', $datos['email']);
        return $contacto->update();
    }
}

?>
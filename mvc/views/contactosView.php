<?php

namespace App\views;

use App\controllers\ContactosController;

class ContactosViews{
    private $contactosController;

    function __construct()
    {
        $this->contactosController = new ContactosController();
    }

    function tablaContactos() {
        $rows = '';
        $contactos = $this->contactosController->allContactos();
        if (count($contactos)>0) {
            foreach ($contactos as $contacto) {
                $id = $contacto->get('id');
                $rows .= '<tr>';
                $rows .= '  <td>' . $contacto->get('nombre') .'</td>';
                $rows .= '  <td>' . $contacto->get('email') .'</td>';
                $rows .= '  <td>' . $contacto->get('telefono') .'</td>';
                $rows .= '  <td><a href="formulario.php?cod='.$id.'"><button>Modificar</button></a></td>';
                $rows .= '</tr>';
            }
        } else {
            $rows .= '<tr>';
            $rows .= '  <td colspan="3">No hay datos</td>';
            $rows .= '</tr>';
        }

        $table = '<table>';
        $table .= ' <thead>';
        $table .= '     <tr>';
        $table .= '         <th>Nombre</th>';
        $table .= '         <th>Email</th>';
        $table .= '         <th>Telefono</th>';
        $table .= '     </tr>';
        $table .= ' </thead>';
        $table .= ' <tbody>';
        $table .= $rows;
        $table .= ' </tbody>';
        $table .= '</table>';

        return $table;
    }

    function getMsgConfirmarContacto($datosFormulario){
        $datosGuardados = empty($datosFormulario['cod'])?
        $this->contactosController->newContacto($datosFormulario):
        $this->contactosController->updateContacto($datosFormulario);
        if($datosGuardados){
            return '<p>Datos del contacto guardado</p>';
        } else {
            return '<p>No se pudo guardar los datos del contacto</p>';
        }
    }
}

?>
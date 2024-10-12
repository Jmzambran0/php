<?php
namespace App\models\queries;

class ContactosQuery{
    static function all(){
        return "select * from contactos";
    }
}

?>
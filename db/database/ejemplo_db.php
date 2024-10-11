<?php
class EjemploDb
{
    private $hostDB = 'localhost';
    private $userDB = 'root';
    private $pwdDB = '';
    private $nameDB = 'ejemplo_dl';
    private $conex;

    function __construct()
    {
        $this->conex = new mysqli(
            $this->hostDB,
            $this->userDB,
            $this->pwdDB,
            $this->nameDB,
        );
    }

    function close() {
        $this->conex->close();
    }

    function checkConex() {
        if($this->conex->connect_error) {
            echo $this->conex->connect_error;
            return FALSE;
        }
        return TRUE;
    }

    function query($sql) {
        if($this->checkConex()) {
            return $this->conex->query($sql);
        }
        return null;
    }
}
?>
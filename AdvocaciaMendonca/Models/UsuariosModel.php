<?php

namespace AdvocaciaMendonca\Models;

class UsuariosModel{
    public static function emailExists($email){
        $pdo = \AdvocaciaMendonca\MySql::connect();
        $verificar = $pdo->prepare("SELECT email FROM painel_users WHERE email = ?");
        $verificar->execute(array($email));

        if($verificar->rowCount() == 1){
            //Email existe
            return true;
        }else{
            return false;
        }
    }
}

?>
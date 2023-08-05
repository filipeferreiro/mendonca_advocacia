<?php
    namespace AdvocaciaMendonca\Controllers;

    class Registra_usuarioController{
        public function index(){

            /* FUNCAO PARA VALIDAR CADASTRO DE USUARIO */
            if(isset($_POST['registrar'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $senha_conf = $_POST['senha_conf'];
                

                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    \AdvocaciaMendonca\Utilidades::alerta('E-mail inválido');
                    \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_HOME.'registra_usuario');
                }else if(strlen($senha) < 6){
                    \AdvocaciaMendonca\Utilidades::alerta('Senha muito curta');
                    \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_HOME.'registra_usuario');
                }else if(\AdvocaciaMendonca\Models\UsuariosModel::emailExists($email)){
                    \AdvocaciaMendonca\Utilidades::alerta('Email já cadastrado');
                    \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_HOME.'registra_usuario');

                }else if($senha != $senha_conf){
                    \AdvocaciaMendonca\Utilidades::alerta('Senhas devem ser iguais');
                    \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_HOME.'registra_usuario');
                }else{
                    //Registrar usuário
                    $senha = \AdvocaciaMendonca\Bcrypt::hash($senha);
                    $conexao = \AdvocaciaMendonca\MySql::connect();
                    $registro = $conexao->prepare("INSERT INTO `painel_users` VALUES (null,?,?,?)");
                    $registro->execute(array($email,$senha,$nome));

                    \AdvocaciaMendonca\Utilidades::alerta('Usuário registrado com sucesso');
                    \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_HOME.'registra_usuario');
                }
            }

            \AdvocaciaMendonca\Views\MainView::renderPainel('registra_usuario');
        }
    }
?>
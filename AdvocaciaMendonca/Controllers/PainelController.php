<?php
    namespace AdvocaciaMendonca\Controllers;

    class PainelController{
        public function index(){
            if(isset($_SESSION['login'])){
                //renderizar painel
                if(isset($_GET['loggout'])){
                    session_destroy();
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
                
                \AdvocaciaMendonca\Views\MainView::render('painel');
            }else{
                //abrir login do painel

                if(isset($_POST['enviar'])){
                    $email_login = $_POST['email'];
                    $senha_login = $_POST['senha'];
    
                    $pdo = \AdvocaciaMendonca\MySql::connect();
                    $verificar = $pdo->prepare("SELECT * FROM painel_users WHERE email = ?");
                    $verificar->execute(array($email_login));

                    if($verificar->rowCount() == 0){
                        \AdvocaciaMendonca\Utilidades::alerta('Email não cadastrado');
                        \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_PAINEL);
                    }else{
                        $dados = $verificar->fetch();
                        $senhaBanco = $dados['senha'];
                        if(\AdvocaciaMendonca\Bcrypt::check($senha_login,$senhaBanco)){
                            $_SESSION['login'] = $dados['email'];
                            $_SESSION['usuario'] = $dados['nome'];
                            \AdvocaciaMendonca\Utilidades::alerta('Usuário logado');
                            \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_PAINEL);
                        }else{
                            \AdvocaciaMendonca\Utilidades::alerta('Senha inválida');
                            \AdvocaciaMendonca\Utilidades::redirect(INCLUDE_PATH_PAINEL);
                        }
                    }
                }

                \AdvocaciaMendonca\Views\MainView::render('login');
                
            }
            
        }
    }
?>
<?php
    namespace AdvocaciaMendonca\Controllers;

    class PainelController{
        public function index(){
            if(isset($_SESSION['login'])){
                //renderizar painel
                \AdvocaciaMendonca\Views\MainView::render('painel');
            }else{
                //abrir login do painel
                \AdvocaciaMendonca\Views\MainView::render('login');
            }
        }
    }
?>
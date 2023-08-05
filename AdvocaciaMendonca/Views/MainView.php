<?php

    namespace AdvocaciaMendonca\Views;

    class MainView{
        public static function render($filename, $header = 'pages/includes/header.php', $footer = 'pages/includes/footer.php'){

            if($filename == 'login' ){
                $header == '';
                include('pages/'.$filename.'.php');
                $footer == ' ';
            }
            if($filename == 'painel'){
                include('pages_painel/includes/header.php');
                include('pages/'.$filename.'.php');
                include('pages_painel/includes/footer.php');
            }
            
            if($filename == 'home'){
                $header != ' ' ? include($header) : null;
                include('pages/'.$filename.'.php');
                $footer != ' ' ? include($footer) : null;
            }
        }

        public static function renderPainel($filename, $header = 'pages_painel/includes/header.php', $footer = 'pages_painel/includes/footer.php'){
            $header != ' ' ? include($header) : null;
            include('pages_painel/'.$filename.'.php');
            $footer != ' ' ? include($footer) : null;
            
        }
    }

?>
<?php

    namespace AdvocaciaMendonca\Views;

    class MainView{
        public static function render($filename, $header = 'pages/includes/header.php', $footer = 'pages/includes/footer.php'){

            if($filename == 'login' || $filename == 'painel'){
                $header == ' ';
                include('pages/'.$filename.'.php');
                $footer == ' ';
            }
            if($filename == 'home'){
                $header != ' ' ? include($header) : null;
                include('pages/'.$filename.'.php');
                $footer != ' ' ? include($footer) : null;
            }
        }
    }

?>
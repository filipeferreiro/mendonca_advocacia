<?php
    namespace AdvocaciaMendonca\Controllers;

    class HomeController{
        public function index(){
            \AdvocaciaMendonca\Views\MainView::render('home');
        }
    }
?>
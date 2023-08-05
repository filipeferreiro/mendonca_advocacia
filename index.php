<?php

    session_start();

    require('vendor/autoload.php');

    define('INCLUDE_PATH_PAGES','http://localhost/mendonca_advocacia/AdvocaciaMendonca/Views/pages/');
    define('INCLUDE_PATH_PAGES_PAINEL','http://localhost/mendonca_advocacia/AdvocaciaMendonca/Views/pages_painel/');
    define('INCLUDE_PATH','http://localhost/mendonca_advocacia/AdvocaciaMendonca/');
    define('INCLUDE_PATH_HOME','http://localhost/mendonca_advocacia/');

    $app = new AdvocaciaMendonca\Application();

    $app->run();

?>
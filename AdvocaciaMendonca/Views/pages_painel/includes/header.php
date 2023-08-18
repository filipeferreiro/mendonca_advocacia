<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Lustria&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/13cb636ea3.js" crossorigin="anonymous"></script>
        <link href="<?php echo INCLUDE_PATH_PAGES ?>css/Painel.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH_PAGES; ?>images/logo.ico">
        <title>Painel Administrativo</title>
    </head>
    <body>
        <nav class="menu-nav">
            <div class="nav-header">
                <div class="header-content">
                    <h3><?php echo $_SESSION['usuario']; ?></h3>
                </div><!--header-content-->
            </div><!--nav-header-->
            <div class="nav-body">
                <div class="nav-item">
                    <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout">Log-out <i class="fa-solid fa-right-from-bracket"></i></a>
                </div><!--nav-item-->
                <div class="nav-item">
                    <a href="<?php echo INCLUDE_PATH_HOME; ?>registra_usuario">Registrar Usuário</a>
                </div><!--nav-item-->
            </div><!--nav-body-->
        </nav>
        <section class="corpo">
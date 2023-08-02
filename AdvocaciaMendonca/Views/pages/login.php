<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Lustria&display=swap" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH_PAGES ?>css/Login.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH_PAGES; ?>images/logo.ico">
        <title>Login Administrativo</title>
    </head>
    <body>
        <section class="login">
            <div class="background-line">
                <h1>Mendonça Advocacia</h1>
                <h2>Login Administrativo</h2>
            </div>
            <div class="container">
                <!--<img src="<?php echo INCLUDE_PATH_PAGES; ?>images/MM.jpg" alt="Logo da Advocacia Mendonça"/>-->
                <div class="form-wraper">
                    <form method="post">
                        <div class="input-wraper">
                            <label for="login">Login</label>
                            <input name="login" id="login" placeholder="insira seu e-mail" type="email">
                        </div>
                        <div class="input-wraper">
                            <label for="senha">Senha</label>
                            <input name="senha" id="senha" placeholder="insira sua senha" type="password">
                        </div>
                        <div class="submit-wraper">
                            <input name="enviar" id="enviar" value="Entrar" type="submit">
                        </div>
                    </form>
                </div><!--form-wraper-->
            </div><!--container-->
        </section><!--login-->
    </body>
</html>
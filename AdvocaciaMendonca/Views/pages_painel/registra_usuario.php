<div class="container registrar-usu">
    <div class="title-container">
        <h2>Registrar usuário</h2>
    </div><!--title-container-->
    <div class="body-container">
        <form method="post">
            <div class="input-wraper">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" placeholder="insira seu nome" type="text">
            </div>
            <div class="input-wraper">
                <label for="email">E-mail</label>
                <input name="email" id="email" placeholder="insira seu e-mail" type="email">
            </div>
            <div class="input-wraper">
                <label for="senha">Senha</label>
                <input name="senha" id="senha" placeholder="insira sua senha" type="password">
            </div>
            <div class="input-wraper">
                <label for="senha_conf">Confirmar senha</label>
                <input name="senha_conf" id="senha_conf" placeholder="confirme sua senha" type="password">
            </div>
            <div class="submit-wraper">
                <input name="acao" value="Registrar" type="submit">
                <input type="hidden" name="registrar" value="registrar"/>
            </div>
        </form>
    </div>

</div>
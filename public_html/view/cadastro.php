<html>

<head>
    
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../Assets/css/cadastro.css">
    <script type="text/javascript" src="../Bibliotecas/jquery/jquery.min.js"></script>


</head>

<body>

    <div class="container-cadastro">
        <div class="signup-more">
            <img src="../Assets/img/cadastro.svg" alt="">
        </div>
        <div class="wrap-signup">

            <form id="cadastrar" class="signup-form" name="cadastro">
                <span class="signup-form-title text-info"> Cadastrar</span>
                <a href="login.php" class="link-to-login text-info "> Já é cadastrado? Clique aqui para fazer login.</a>
                <div class="wrap-input">
                    <span class="lable-iput">Nome</span>
                    <input id="nome" type="text" name="nome" class="input" placeholder="Nome" required />
                    <span class="focus-input"></span>
                </div>
                <div class="wrap-input">
                    <span class="lable-iput">E-mail</span>
                    <input type="email" class="input" name="email" placeholder="E-mail" id="email" required>
                    <span class="focus-input"></span>
                </div>
                <div class="wrap-input">
                    <span class="lable-iput">Senha</span>
                    <input type="password" class="input" name="senha" placeholder="Senha" id="senha" required>
                    <span class="focus-input"></span>
                </div>
                <div class="wrap-input">
                    <span class="lable-iput">Instituição de Ensino</span>
                    <input type="text" class="input" name="instituicao" placeholder="Instituição de Ensino"
                        id="instituicao" required>
                    <span class="focus-input"></span>
                </div>
                <div class="wrap-input">
                    <span class="lable-iput ">Perfil</span>
                    <select name="perfil" id="perfil" class="input border-none" required>
                        <option value="aluno">Aluno</option>
                        <option value="professor">Professor</option>
                    </select>
                    <span class="focus-input"></span>
                </div>
                <input type="submit" class="btn" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
</script>
<script src="../Bibliotecas/popper.min.js">
</script>
<script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

</html>
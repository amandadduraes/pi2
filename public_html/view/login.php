<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/login.css">

    <title>Document</title>
</head>

<body>
    <?php
$arrdeveter = [
  "email",
  "senha"
];
// print_r($_POST);
$erro = false;
foreach($arrdeveter as $dev){
if(!isset($_POST[$dev])){
$erro = true;
// echo "<br>".$dev;
}
}
 //echo "<br>".$erro;
if(!$erro){
  $email=$_POST["email"];
  $senha=$_POST["senha"];
}

?>
    <script scr="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-xl-6 mx-auto">
                                <h3 class="display-4">LOGIN</h3> <br>
                                <form method="POST" action="">
                                    <div class="form-group mb-3"> <input name="email" id="inputEmail" type="email"
                                            placeholder="Email" required="" autofocus=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                                    <div class="form-group mb-3"> <input name="senha" id="inputPassword" type="password"
                                            placeholder="Senha" required=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-danger"><br>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3"> <input id="customCheck1"
                                            type="checkbox" checked class="custom-control-input"> <label
                                            for="customCheck1" class="custom-control-label">Mantenha-me
                                            Conectado</label> </div> <button type="submit"
                                        class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill shadow-sm">Conectar-se</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p> Não tem cadastro? &nbsp<a href="cadastro.php"
                                                class="font-italic text-muted"> <u>Crie
                                                    uma conta</u></a></p>
                                        <p><a href="../index.html" class="font-italic text-muted"> <u>menu</u></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
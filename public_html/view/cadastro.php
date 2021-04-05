
<html>
   <head>   
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro</title>

      <!--Bootstrap Versão 4.1.3  -->
    <link rel="stylesheet" href="../assets/bootstrap4/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="../assets/css/cadastro.css">
      <script type="text/javascript" src="../assets/js/jquery.min.js"></script>     

  
   </head>

   <body>

      <div class="container-cadastro">
         <div class="signup-more">
            <img src="../assets/img/cadastro.svg" alt="">
         </div>
         <div class="wrap-signup">
          
            <form  id="cadastrar" class="signup-form" name="cadastro">
               <span class="signup-form-title text-info"> Cadastrar</span>
               <a href="./login.html" class="link-to-login text-info "> Já é cadastrado? Clique aqui para fazer login.</a>
               <div class="wrap-input">
                  <span class="lable-iput">Nome</span>
                  <input id="nome" type="text" name="nome" class="input" placeholder="Nome" required/>
                  <span class="focus-input"></span>
               </div>
               <div class="wrap-input">
                  <span class="lable-iput">E-mail</span>
                  <input type="email" class="input" name="email" placeholder="E-mail" id="email" required>
                  <span class="focus-input"></span>
               </div>
               <div class="wrap-input">
                  <span class="lable-iput">Senha</span>
                  <input type="password" class="input" name="senha" placeholder="Senha"  id="senha" required>
                  <span class="focus-input"></span>
               </div>
               <div class="wrap-input">
                  <span class="lable-iput">Instituição de Ensino</span>
                  <input type="text" class="input" name="instituicao" placeholder="Instituição de Ensino" id="instituicao" required>
                  <span class="focus-input"></span>
               </div>
               <div class="wrap-input">
                  <span class="lable-iput ">Perfil</span>
                  <select name="perfil" id="perfil" class="input border-none" required>
                     <option  value="aluno">Aluno</option>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../assets/bootstrap4/js/bootstrap.min.js"></script>
</html>
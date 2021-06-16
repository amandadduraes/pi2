<?php

function navAluno(){
  echo '<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand">Do 0 Ao 1</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fa fa-star"></i>
          Início
          </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./videos.php">
          <i class="fa fa-youtube-play"></i>
          Video Aulas
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./turmas.php">
          <i class="fa fa-font-awesome"></i>
          Turmas
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./mais.php">
          <i class="fa fa-hand-peace-o"></i>
          Mais
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./material.php">
          <i class="fa fa-newspaper-o"></i>
          Material Complementar
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./editaPerfil.php">
          <i class="fa fa-cog"></i>
          Edita Perfil
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="../controller/UsuarioController.php?deslogar=1">
          <i class="fa fa-sign-out"></i>
          Sair
        </a>
      </li>
    </ul>
  </div>
</nav>';
}
function navProfessor(){
  echo '<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand">Do 0 Ao 1</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-star"></i>
            Início
            </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./videos.php">
            <i class="fa fa-youtube-play"></i>
            Video Aulas
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./turmas.php">
            <i class="fa fa-font-awesome"></i>
            Turmas
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./mais.php">
            <i class="fa fa-hand-peace-o"></i>
            Mais
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./material.php">
            <i class="fa fa-newspaper-o"></i>
            Material Complementar
          </a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="">
            <i class="fa fa-plus"></i>
            Criar Quiz
          </a>
        </li><li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fa fa-minus"></i>
          Remover Quiz
        </a>
      </li>
        <li class="nav-item active">
          <a class="nav-link" href="./editaPerfil.php">
            <i class="fa fa-cog"></i>
            Edita Perfil
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="../controller/UsuarioController.php?deslogar=1">
            <i class="fa fa-sign-out"></i>
            Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>';
}
?>
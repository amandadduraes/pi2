<?php
function navAluno(){
    echo '<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand">Do 0 Ao 1</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="mais.php">
            <i class="fa fa-hand-peace-o"></i>
            Sobre nós
            </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="rendimento.php">
            <i class="fa fa-trophy"></i>
            Ranking Geral
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="videos.php">
            <i class="fa fa-youtube-play"></i>
            Video Aulas
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="turmas.php">
            <i class="fa fa-font-awesome"></i>
            Matérias
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-line-chart"></i>
            Atividades
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="praticas.php">Atividades Práticas <i class="fa fa-laptop "></i> </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="atividades.php">Atividades Teóricas <i class="fa fa-book"></i> </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="EditaPerfil.php">
            <i class="fa fa-cog"></i>
            Edita Perfil
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="../controller/LoginController.php?deslogar=1">
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
          <a class="nav-link" href="mais.php">
            <i class="fa fa-hand-peace-o"></i>
            Sobre nós
            </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="rendimento.php">
            <i class="fa fa-trophy"></i>
            Ranking Geral
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="videos.php">
            <i class="fa fa-youtube-play"></i>
            Video Aulas
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="turmas.php">
            <i class="fa fa-font-awesome"></i>
            Matérias
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-line-chart"></i>
            Atividades
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="praticas.php">Atividades Práticas <i class="fa fa-laptop "></i> </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="atividades.php">Atividades Teóricas <i class="fa fa-book"></i> </a>
          </div>
        </li>
      </ul>

    <ul class="navbar-nav">
    <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-cogs"></i>
      Configuração
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="CriaQuiz.php">Cria Quiz <i class="fa fa-plus"></i> </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="atividades.php">Gerencia Quiz <i class="fa fa-minus"></i> </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="praticas.php">Gerencia Turma <i class="fa fa-users"></i> </a>
    </div>
  </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="EditaPerfil.php">
            <i class="fa fa-cog"></i>
            Edita Perfil
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="../controller/LoginController.php?deslogar=1">
            <i class="fa fa-sign-out"></i>
            Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>';
}
?>
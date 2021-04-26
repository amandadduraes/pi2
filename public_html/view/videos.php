<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../Assets/css/videos.css">
  <meta charset="utf-8" />
  <!--Bootstrap Versão 4.1.3  -->
  <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <title>Vídeos</title>
</head>

<body>


<?php
    session_start();
    include_once "navBar.php";
    if($_SESSION["user"] == 'professor'){
    navProfessor();
    }else{
    navAluno();
    }
    ?>
<!--  <nav class="navbar  navbar-dark bg-info">
    <div>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target"
        style="display: flex; align-items: center;">
        <span class="navbar-toggler-icon"></span>
        <a href="" class="navbar-brand text-white" style="margin-left: 12px;">0 AO 1</a>
    </div>
    Menu hamburguer
    </button>
     Navegação
    <div class="collapse navbar-collapse" id="nav-target">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a href="../index.php" class="nav-link text-white">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="atividades.php" class="nav-link text-white">Atividades Teorícas</a>
        </li>
        <li class="nav-item">
          <a href="praticas.php" class="nav-link text-white">Atividades Práticas</a>
        </li>
        <li class="nav-item">
          <a href="CriaQuiz.php" class="nav-link text-white">Criar Quiz</a>
        </li>
        <li class="nav-item">
          <a href="EditaPerfil.php" class="nav-link text-white">Editar Perfil</a>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link text-white">Login</a>
        </li>
        <li class="nav-item">
          <a href="mais.php" class="nav-link text-white">Sobre</a>
        </li>
        <li class="nav-item">
          <a href="rendimento.php" class="nav-link text-white">Rendimento</a>
        </li>
        <li class="nav-item">
          <a href="Turmas.php" class="nav-link text-white">Matérias</a>
        </li>
        <li class="nav-item">
          <a href="videos.php" class="nav-link text-white">Vídeos</a>
        </li>


      </ul>
    </div>

  </nav> -->


  <div class="container-principal">
    <div class="container-esquerda">
    </div>
    <div class="container-direita">
      <h1 class="text-info">Vídeos</h1>
      <div class="videos-list">
        <!-- Inserindo um vídeo-->
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px" src="https://www.youtube.com/embed/KlIL63MeyMY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">O que é Programação Orientada a Objetos?</p>
        </div>
        <!--Finalizando a inserção do vídeo-->
        <!-- Inserindo um vídeo-->
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/Ucyx_QPfDng?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                          gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <p class="text-info">Instalando o JDK e NetBeans</p>
        </div>
        <!--Finalizando a inserção do vídeo-->
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/aR7CKNFECx0?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; 
                          encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <p class="text-info">O que é um Objeto?</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/wNaoX6VOj54?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                          gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <p class="text-info">Criando Classes e Objetos em Java</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/jFI-qqitzwk?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">O que é Visibilidade em um Objeto?</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/LV2243j4RTQ?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">Configurando Visibilidade de Atributos e Métodos.</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/g2x9oyBFSco?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Métodos Especiais</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/6i-_R5cAcEc?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">Métodos Getter, Setter e Construtor</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/1wYRGFXpVlg?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Pilares da POO: Encapsulamento</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/x4JfzV0Wb5w?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Encapsulamento</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/_PZldwo0vVo?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Herança (Parte 1)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/19IGAeoFKlU?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Herança prática (Parte 1)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/He887D2WGVw?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Herança (Parte 2)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/5pwV2WdD-_Y?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Herança prática (Parte 2)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/9-3-RMEMcq4?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Conceito Polimorfismo (Parte 1)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/NctjqlfKC0U?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info"> Polimorfismo em Java (Parte 1)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/hYek1xqWzgs?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">Conceito Polimorfismo (Parte 2)</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <iframe width="200px" height="200px"
              src="https://www.youtube.com/embed/b7xGYh3NHZU?list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <p class="text-info">Polimorfismo em Java (Parte 2)</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
  <script src="../Bibliotecas/popper.min.js"></script>
  <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>

</html>
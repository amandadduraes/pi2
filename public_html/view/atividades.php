<!DOCTYPE >
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/teorica.css">
    <link rel="stylesheet" href="../bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bibliotecas/Font-awesome/css/font-awesome.min.css">
    <title>Atividades Teóricas</title>
</head>

<body>
<script src="../bibliotecas/jquery/jquery.min.js"></script>
<script src="../bibliotecas/popper.min.js"></script>
<script src="../bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

<script>
        $(document).ready(function () {
          $.ajax({
            url: "../controller/AtividadeController.php",
            type: "GET",
            data: {
              getByTurmaCodigo: '1',
            },
            success: function (data) {
              const atividades = JSON.parse(data)
              atividades.forEach(({ id, descricao }, i) => {
                $(".events ul").append(`
                  <li>
                    <div class="time">
                        <h2>  <br> <span>${i + 1}</span></h2>
                    </div>
                    <div class="details text-info">
                      <h3>${descricao}</h3>
                      <a class="text-info" href="./perguntas.php?ativ=${id}">Iniciar Quiz</a>
                    </div>
                  </li>
                `)
              });
            }
          })
        });
    </script>

<?php include_once "navBar.php"; ?>
    <section>
        <div class="leftBox">
            <div class="content">
                <h1 class="text-info">Atividades Teóricas</h1>
            </div>
        </div>
        <div class="events">
            <ul>
            </ul>
        </div>
    </section>
</body>

</html>
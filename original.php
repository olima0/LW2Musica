<?php
include 'dados.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="./index.html">Início</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>
    
    <div class="container-fluid text-center">
            <div class="jumbotron">
                <h1 class="display-4">Manipulação de Arrays em PHP</h1>
                <p>Exercício para utilização de Arrays</p>
            </div>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Estilo Musical</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $chave => $Item):?>
        <tr>
        <td><?php echo $Item['Nome']?></td>
        <td><?php echo $Item['Idade']?></td>
        <td><?php echo $Item['Estilo']?></td>
        <?php endforeach;?>
    </tr>
  </tbody>
</table>
      <hr>
      <footer class="container">
            <p>CEFET-MG-Varginha 2024</p>
      </footer>
</body>
</html>
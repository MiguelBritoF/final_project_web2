<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmacao.css">
    <title>Kiwi code</title>
</head>
<body>
    <div class='dados'>

        <h2>Seus dados</h2>
        <?php
            
            include '../model/conta.class.php';
            
            $conta = new conta;

            $conta ->setNome($_POST['nome']);
            $conta ->setUsuario($_POST['usuario']);
            $conta ->setEmail($_POST['txtemail']);

            echo "<h4>Nome: {$conta->getNome()}</h4>".
            "<h4>Usuário: {$conta->getUsuario()}</h4>".
            "<h4>Email: {$conta->getEmail()}</h4>";
        ?>

        <a href="../view/home.php">Confirme</a>
    </div>
</body>
</html>

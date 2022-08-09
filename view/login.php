<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/login_sing.css">
    <link rel="shortcut icon" href="../img/kiwi.ico">
    <title>Kiwi Code</title>
</head>
<body>
<navbar class="topo">
        <img src="../img/kiwi-removebg-preview.png" alt="Logo do site">
        <a class="active" href="home.php">Home</a>
        <a href="../controller/conta.controller.php">Conta</a>
        <a href="https://wa.me/555194177250">Contact</a>
        <a href="about.php">About</a>
    </navbar>
    <div class="center">
        <h1>login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="usuario"required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="senha"required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="singup_link">
                Not a member? <a href="singup.php">Singup</a>
            </div>
        </form>
    </div>
</body>
</html>
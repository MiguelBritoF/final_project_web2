<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
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
        <a id='tutorial'href="tutoriais_html.php">Tutoriais</a>
    </navbar>
    <div id="explanation">
        <h2>What is Kiwi Code?</h2>

        <p>
            Kiwi Code is a simple image-based bulletin board where anyone can post 
            comments and share their codes. With a design inspired by 4chan's board system along with Github's 
            code sharing, Kiwi Code makes an easy experience for users to share their stuff and expect feedback from others.
        </p>

    </div>

    <div id="threads">
        <h2>Popular Threads</h2>
        <div class="threads_contents">
            <a href="inside_threads/thread_one.php">
                <img id="um" src="../img/tag.png" alt="html_image">
                    <p id="primeiro">Preciso de ajuda com esse HTML!!</p>
            </a>
            <a href="inside_threads/thread_two.php">
                <img id="dois" src="../img/fechando-codigos.jpeg" alt="html_image">
                    <p id="segundo">Alguém sabe como resolver???</p>
            </a>
            <a href="inside_threads/thread_three.php">
                <img id="tres" src="../img/tag.png" alt="html_image">
                    <p id="terceiro">Estou com problemas.</p>
            </a>
        </div>
    </div>

    <br class="clear-bug">

    <div id="copyright"> 
        <footer>
            <a href="about.php">About</a> Copyright © 2022 Kiwi Code community support LLC. All rights reserved.
        </footer>
    </div>
</body>
</html>
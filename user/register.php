<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preload" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preload" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>CecyHaQ - Login</title>
</head>

<body>
    <header class="header__nosotros">
        <a href="../index.php">
            <img class="nosotros__img" src="../img/cecyhacklogo.png" alt="">
        </a>
    </header>
    <main class="main__login">
        <div class="login__contenido">
            <form class="login__form" action="../php/register.php" method="post">
                <div class="login__field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="login__field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <input type="submit" value="Registrarme" class="btn">
            </form>
        </div>
        <p class="centrado">ya tienes una cuenta? <a href="login.php">entra</a></p>
    </main>
    <footer class="centrado">
        @ CECYHAQ 2024 - All rights reserved
    </footer>


</body>

</html>
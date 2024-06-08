<?php include '../../php/auth.php';

?>

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
    <link rel="preload" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="preload" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>CecyHaQ</title>
</head>

<body class="adminbody">
    <header class="header__nosotros">
        <a href="../../index.php">
            <img class="nosotros__img" src="../../img/cecyhacklogo.png" alt="">
        </a>
        <nav class="nosotros__nav">
            <a href="../../web/nosotros.php">Nosotros</a>
            <a href="../../web/recompensas.php">Sistema de recompensas</a>
        </nav>
    </header>
    <main class="informacion__nosotros">
        <div class="nostros__explicacion">
            <h1 class="titulo centrado">Bienvenido al panel de administrador</h1>
            <h2 class="subtitulo centrado">Aqui podras administrar tus dispositivos, calcular tus gastos y muchas otras funciones mas!</h2>

        </div>
    </main>
    <div class="container">
        <aside class="aside__navegacion">
            <div class="navegacion__informacion">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M316-232h53.33v-85.33h85.34v-53.34h-85.34V-456H316v85.33h-85.33v53.34H316V-232Zm210-33.33h200.67V-318H526v52.67ZM526-370h200.67v-53.33H526V-370Zm39.33-159.33 59.34-59.34L684-529.33l38-38-59.33-60L722-686.67l-38-38-59.33 59.34-59.34-59.34-38 38 59.34 59.34-59.34 60 38 38ZM244-600.67h197.33V-654H244v53.33ZM186.67-120q-27 0-46.84-19.83Q120-159.67 120-186.67v-586.66q0-27 19.83-46.84Q159.67-840 186.67-840h586.66q27 0 46.84 19.83Q840-800.33 840-773.33v586.66q0 27-19.83 46.84Q800.33-120 773.33-120H186.67Zm0-66.67h586.66v-586.66H186.67v586.66Zm0-586.66v586.66-586.66Z" />
                </svg>

                <a href="calculadora.php">calcular gasto</a>

            </div>
            <div class="navegacion__informacion">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M306.67-40q-27.5 0-47.09-19.58Q240-79.17 240-106.67v-746.66q0-27.5 19.58-47.09Q279.17-920 306.67-920h346.66q27.5 0 47.09 19.58Q720-880.83 720-853.33v746.66q0 27.5-19.58 47.09Q680.83-40 653.33-40H306.67Zm0-66.67h346.66v-746.66H306.67v746.66Zm173.41-460q47.25 0 80.25-33.08 33-33.07 33-80.33 0-47.25-33.08-80.25-33.07-33-80.33-33-47.25 0-80.25 33.08-33 33.07-33 80.33 0 47.25 33.08 80.25 33.07 33 80.33 33Zm.04-66.66q-19.79 0-33.29-13.39-13.5-13.38-13.5-33.16 0-19.79 13.39-33.29 13.38-13.5 33.16-13.5 19.79 0 33.29 13.39 13.5 13.38 13.5 33.16 0 19.79-13.39 33.29-13.38 13.5-33.16 13.5Zm-80 226.66q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm160 0q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm-160 120q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm160 0q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm-160 120q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm160 0q14.21 0 23.71-9.61 9.5-9.62 9.5-23.84 0-14.21-9.61-23.71-9.62-9.5-23.84-9.5-14.21 0-23.71 9.61-9.5 9.62-9.5 23.84 0 14.21 9.61 23.71 9.62 9.5 23.84 9.5Zm-253.45 60v-746.66 746.66Z" />
                </svg>
                <a href="control.php">control inteligente</a>


            </div>
            <div class="navegacion__informacion">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M292-120v-66.67h154.67v-140q-52.34-11-93.17-44.83T296-456q-74.33-8.33-125.17-61.83Q120-571.33 120-645.33V-688q0-27.67 19.5-47.17t47.17-19.5h96V-840h394.66v85.33h96q27.67 0 47.17 19.5T840-688v42.67q0 74-50.83 127.5Q738.33-464.33 664-456q-16.67 50.67-57.5 84.5t-93.17 44.83v140H668V-120H292Zm-9.33-406.67V-688h-96v42.67q0 42.66 27 75.16t69 43.5ZM480-390q54.67 0 92.67-38.33 38-38.34 38-93v-252H349.33v252q0 54.66 38 93Q425.33-390 480-390Zm197.33-136.67q42-11 69-43.5t27-75.16V-688h-96v161.33ZM480-582Z" />
                </svg>
                <a href="premios.php">premios</a>


            </div>
            <div class="navegacion__informacion">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M0-240v-56.33q0-40.05 42.33-65.19 42.34-25.15 111.25-25.15 12.45 0 23.93.5 11.49.5 22.49 2.27-10 18.57-15 38.11-5 19.55-5 40.79v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-21.91-4.5-41.29t-14.17-37.56q11-1.82 22.28-2.32 11.29-.5 23.06-.5 69 0 111.16 24.68Q960-337.31 960-296.33V-240H780Zm-471.67-66.67H652v-4q-3.33-31.33-52.17-52Q551-383.33 480-383.33t-119.83 20.66Q311.33-342 308.33-310v3.33ZM153.04-420q-30.04 0-51.54-21.54T80-493.33q0-30.67 21.54-52 21.54-21.34 51.79-21.34 30.67 0 52 21.34 21.34 21.33 21.34 52.29 0 30.04-21.34 51.54Q184-420 153.04-420Zm653.34 0q-30.05 0-51.55-21.54-21.5-21.54-21.5-51.79 0-30.67 21.55-52 21.54-21.34 51.79-21.34 30.66 0 52 21.34Q880-524 880-493.04q0 30.04-21.33 51.54-21.34 21.5-52.29 21.5ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.23-66.67q22.77 0 37.94-15.4 15.16-15.4 15.16-38.16 0-22.77-15.26-37.94-15.27-15.16-37.84-15.16-22.56 0-38.06 15.26-15.5 15.27-15.5 37.84 0 22.56 15.4 38.06 15.4 15.5 38.16 15.5Zm.1 240ZM480-600Z" />
                </svg>
                <a href="usuarios.php">usuarios</a>


            </div>


        </aside>
        <div class="contenido">
            <h1 class="titulo">Usuarios</h1>
            <h2 class="subtitulo">Agrega usuarios y grupos de familia, empresa o escuela </h2>
            <button class="button__agregar">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M446.67-446.67H200v-66.66h246.67V-760h66.66v246.67H760v66.66H513.33V-200h-66.66v-246.67Z" />
                </svg>
                Agregar un grupo
            </button>
            <form action="agregar_usuario.php" method="post">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="grupo">Grupo:</label><br>
                <input type="text" id="grupo" name="grupo"><br>
                <input type="submit" value="Agregar Usuario">
            </form>



        </div>
    </div>
    <footer class="centrado">
        @ CECYHAQ 2024 - All rights reserved
    </footer>


</body>

</html>
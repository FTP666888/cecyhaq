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


        </aside>
        <div class="contenido">
            <h1 class="titulo">Premios!</h1>
            <h2 class="subtitulo">Obten premios a traves de distintas acciones</h2>
            <?php require_once '../../php/conn.php';

            // Crear conexión
            $conn = connectDB();

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Supongamos que el ID del usuario está almacenado en $_SESSION['usuarioID']
            $usuarioID = $_SESSION['usuario'];

            // Obtener los puntos del usuario
            // Obtener los puntos del usuario
            $sql = "SELECT PuntosAcumulados FROM Usuarios WHERE email = '$usuarioID'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $puntosUsuario = $row['PuntosAcumulados'];
            } else {
                // Handle the case when there are no results
                $puntosUsuario = 0;
            }

            echo "<h2>Tienes $puntosUsuario puntos.</h2>";

            // Obtener y imprimir retos
            $sql = "SELECT ID, Descripcion, PuntosNecesarios, Categoria FROM Retos";
            $result = $conn->query($sql);

            echo "<h2>Retos:</h2>";
            echo "<table border='1'><tr><th>ID</th><th>Descripción</th><th>Puntos Necesarios</th><th>Categoría</th><th></th></tr>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Descripcion"] . "</td><td>" . $row["PuntosNecesarios"] . "</td><td>" . $row["Categoria"] . "</td>";
                    echo "<td><button onclick=\"completarReto(" . $row["ID"] . ", " . $row["PuntosNecesarios"] . ")\">Completar</button></td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay retos disponibles.</td></tr>";
            }
            echo "</table>";

            // Obtener e imprimir recompensas
            $sql = "SELECT ID, Descripcion, Descuento, PuntosNecesarios FROM Recompensas";
            $result = $conn->query($sql);

            echo "<h2>Recompensas:</h2>";
            echo "<table border='1'><tr><th>ID</th><th>Descripción</th><th>Descuento</th><th>Puntos Necesarios</th><th></th></tr>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Descripcion"] . "</td><td>" . $row["Descuento"] . "%</td><td>" . $row["PuntosNecesarios"] . "</td>";
                    if ($puntosUsuario >= $row["PuntosNecesarios"]) {
                        echo "<td><button onclick=\"reclamarRecompensa(" . $row["ID"] . ", " . $row["PuntosNecesarios"] . ")\">Reclamar</button></td></tr>";
                    } else {
                        echo "<td><button disabled>Reclamar</button></td></tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='5'>No hay recompensas disponibles.</td></tr>";
            }
            echo "</table>";

            $conn->close();
            ?>



        </div>
    </div>
    <footer class="centrado">
        @ CECYHAQ 2024 - All rights reserved
    </footer>


</body>

</html>
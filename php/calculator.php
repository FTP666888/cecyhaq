<?php
// Definir las tarifas y los límites de consumo correspondientes
$tarifas = array(
    "1" => 250,
    "1A" => 300,
    "1B" => 400,
    "1C" => 850,
    "1D" => 1000,
    "1E" => 2000,
    "1F" => 2500
);

// Ordenar las tarifas de mayor a menor
arsort($tarifas);

// Verificar si se ha enviado el formulario
if (isset($_POST['kwh'])) {
    // Recuperar el consumo en kWh del formulario
    $kwh = $_POST['kwh'];

    // Inicializar la tarifa del usuario
    $tarifa_usuario = "1";

    // Recorrer las tarifas para encontrar la correspondiente al consumo del usuario
    foreach ($tarifas as $tarifa => $limite) {
        if ($kwh > $limite) {
            $tarifa_usuario = $tarifa;
            break;
        }
    }

    // Verificar si el usuario tiene un alto consumo
    if ($kwh > $tarifas[$tarifa_usuario]) {
        // Si el usuario tiene un alto consumo, aplicar la tarifa de alto consumo
        $tarifa = 2.5; // en pesos mexicanos por kWh
    } else {
        // Si no, aplicar la tarifa normal
        $tarifa = 1.5; // en pesos mexicanos por kWh
    }

    // Calcular los costos
    $costo_por_dia = $kwh * $tarifa;
    $costo_por_semana = $costo_por_dia * 7;
    $costo_por_mes = $costo_por_dia * 30;
    $costo_por_anio = $costo_por_dia * 365;

    // Preparar datos para la gráfica
    $costos = array(
        "costo_por_dia" => $costo_por_dia,
        "costo_por_semana" => $costo_por_semana,
        "costo_por_mes" => $costo_por_mes,
        "costo_por_anio" => $costo_por_anio
    );

    // Codificar los datos en formato JSON
    $json_data = json_encode($costos);

    // Enviar respuesta JSON
    echo $json_data;
} else {
    // Si no se ha enviado el formulario, mostrar un mensaje de error
    echo "Por favor, ingresa tu consumo en kWh.";
}

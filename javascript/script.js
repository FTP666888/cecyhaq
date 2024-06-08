$(document).ready(function () {
  // Crear la instancia del gráfico una vez
  var ctx1 = $("#barChart1")[0].getContext("2d");
  var myChart1 = new Chart(ctx1, {
    type: "bar",
    data: {
      labels: ["Día", "Semana", "Mes", "Año"],
      datasets: [
        {
          label: "Costo en pesos mexicanos ($)",
          data: [],
          backgroundColor: ["#28a745", "#ffc107", "#dc3545", "#6c757d"],
          borderColor: ["#28a745", "#ffc107", "#dc3545", "#6c757d"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          // Cambia 'yAxes' por 'y'
          type: "logarithmic",
          min: 1,
        },
      },
    },
  });

  var ctx2 = $("#barChart2")[0].getContext("2d");
  var myChart2 = new Chart(ctx2, {
    type: "bar",
    data: {
      labels: ["Día", "Semana", "Mes", "Año"],
      datasets: [
        {
          label: "Ahorro con hidrógeno ($)",
          data: [],
          backgroundColor: ["#007bff", "#6610f2", "#6f42c1", "#e83e8c"],
          borderColor: ["#007bff", "#6610f2", "#6f42c1", "#e83e8c"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          // Cambia 'yAxes' por 'y'
          type: "logarithmic",
          min: 1,
        },
      },
    },
  });

  // Función para actualizar las gráficas
  function updateCharts() {
    $.ajax({
      url: "../../php/calculator.php",
      type: "post",
      data: $("#kwhForm").serialize(),
      success: function (response) {
        try {
          // Intenta analizar la respuesta
          var data = JSON.parse(response);

          console.log(data);

          // Si la respuesta es un objeto JSON válido, actualiza las gráficas
          var costs = [
            data.costo_por_dia,
            data.costo_por_semana,
            data.costo_por_mes,
            data.costo_por_anio,
          ];

          // Calcular el ahorro con hidrógeno
          var savings = costs.map(function (cost) {
            return cost * 0.65; // Ahorro del 35%
          });

          myChart1.data.datasets[0].data = costs;
          myChart1.update();

          myChart2.data.datasets[0].data = savings;
          myChart2.update();

          // Verificar si el consumo es mayor al permitido
          var consumoPermitido = 250; // Cambia este valor por el límite permitido por la CFE
          if (data.consumo > consumoPermitido) {
            // Mostrar un mensaje de advertencia
            $("#warningMessage")
              .html(
                '<i class="fas fa-exclamation-triangle"></i> Advertencia: Su consumo de electricidad es mayor al permitido por la CFE.'
              )
              .css("color", "red");
          } else {
            // Limpiar el mensaje de advertencia
            $("#warningMessage").html("");
          }
        } catch (error) {
          // Si la respuesta no es un objeto JSON válido, muestra un mensaje de error
          console.error(
            "La respuesta del servidor no es un objeto JSON válido: ",
            response
          );
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // Handle any errors here
        console.error("Error: " + textStatus, errorThrown);
      },
    });
  }

  // Actualizar las gráficas cuando se cambia el valor del campo de entrada
  $("#kwhForm input").on("change", updateCharts);

  // Actualizar las gráficas cuando se envía el formulario
  $("#kwhForm").on("submit", function (e) {
    e.preventDefault();
    updateCharts();
  });
});

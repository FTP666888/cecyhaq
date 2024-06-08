$(document).ready(function () {
  // Crear la instancia del gráfico una vez
  var ctx = $("#barChart")[0].getContext("2d");
  var myChart = new Chart(ctx, {
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

  // Función para actualizar la gráfica
  function updateChart() {
    $.ajax({
      url: "../../php/calculator.php",
      type: "post",
      data: $("#kwhForm").serialize(),
      success: function (response) {
        try {
          // Intenta analizar la respuesta
          var data = JSON.parse(response);

          console.log(data);

          // Si la respuesta es un objeto JSON válido, actualiza la gráfica
          var costs = [
            data.costo_por_dia,
            data.costo_por_semana,
            data.costo_por_mes,
            data.costo_por_anio,
          ];

          myChart.data.datasets[0].data = costs;
          myChart.update();
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

  // Actualizar la gráfica cuando se cambia el valor del campo de entrada
  $("#kwhForm input").on("change", updateChart);

  // Actualizar la gráfica cuando se envía el formulario
  $("#kwhForm").on("submit", function (e) {
    e.preventDefault();
    updateChart();
  });
});

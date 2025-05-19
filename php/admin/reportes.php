<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reportes | Admin Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/admin.css" />
  <script defer>
    let reservas = [
      {
        cedula: "1600662041",
        nombre: "Ana Paredes",
        fecha: "2025-05-15",
        hora: "19:30",
        personas: 4
      },
      {
        cedula: "1100456789",
        nombre: "Carlos Pérez",
        fecha: "2025-05-18",
        hora: "20:00",
        personas: 2
      },
      {
        cedula: "1600891234",
        nombre: "Luis Rodríguez",
        fecha: "2025-05-20",
        hora: "21:00",
        personas: 6
      }
    ];

    function cargarReporte() {
      const tabla = document.getElementById("tabla-reportes");
      tabla.innerHTML = "";

      reservas.forEach((reserva, index) => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td><input value="${reserva.cedula}" disabled /></td>
          <td><input value="${reserva.nombre}" /></td>
          <td><input type="date" value="${reserva.fecha}" /></td>
          <td><input type="time" value="${reserva.hora}" /></td>
          <td><input type="number" value="${reserva.personas}" min="1" /></td>
          <td>
            <button onclick="guardarEdicion(${index}, this)">💾</button>
            <button onclick="eliminarReserva(${index})">🗑️</button>
          </td>
        `;
        tabla.appendChild(fila);
      });
    }

    function guardarEdicion(index, btn) {
      const fila = btn.closest("tr");
      const inputs = fila.querySelectorAll("input");

      reservas[index].nombre = inputs[1].value.trim();
      reservas[index].fecha = inputs[2].value;
      reservas[index].hora = inputs[3].value;
      reservas[index].personas = parseInt(inputs[4].value);

      alert("Reserva actualizada exitosamente.");
    }

    function eliminarReserva(index) {
      if (confirm("¿Estás seguro de eliminar esta reserva?")) {
        reservas.splice(index, 1);
        cargarReporte();
      }
    }

    document.addEventListener("DOMContentLoaded", cargarReporte);
  </script>
</head>
<body>
  <header>
    <h1>Panel de Administración - Reportes</h1>
    <nav>
      <a href="dashboard.html">Dashboard</a>
      <a href="reservas-listado.html">Reservas</a>
      <a href="reportes.html" class="active">Reportes</a>
      <a href="login.html">Cerrar Sesión</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Reporte General de Reservas</h2>
      <table>
        <thead>
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Personas</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="tabla-reportes">
          <!-- Se carga por JavaScript -->
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

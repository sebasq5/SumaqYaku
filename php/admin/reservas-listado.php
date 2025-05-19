<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Listado de Reservas | Admin Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/admin.css" />
  <script defer>
    const reservas = [
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
      }
    ];

    function cargarReservas() {
      const tabla = document.getElementById("tabla-reservas");
      tabla.innerHTML = "";

      reservas.forEach((reserva, index) => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${reserva.cedula}</td>
          <td>${reserva.nombre}</td>
          <td>${reserva.fecha}</td>
          <td>${reserva.hora}</td>
          <td>${reserva.personas}</td>
          <td><button onclick="eliminarReserva(${index})">Eliminar</button></td>
        `;
        tabla.appendChild(fila);
      });
    }

    function eliminarReserva(index) {
      if (confirm("¿Estás seguro de eliminar esta reserva?")) {
        reservas.splice(index, 1);
        cargarReservas();
      }
    }

    document.addEventListener("DOMContentLoaded", cargarReservas);
  </script>
</head>
<body>
  <header>
    <h1>Panel de Administración - Reservas</h1>
    <nav>
      <a href="dashboard.html">Dashboard</a>
      <a href="reservas-listado.html" class="active">Reservas</a>
      <a href="reportes.html">Reportes</a>
      <a href="login.html">Cerrar Sesión</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Listado de Reservas</h2>
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
        <tbody id="tabla-reservas">
          <!-- Cargado por JS -->
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

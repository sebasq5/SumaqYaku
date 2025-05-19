<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | Admin Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/admin.css" />
  <script defer>
    document.addEventListener("DOMContentLoaded", () => {
      // Datos simulados
      const totalReservas = 18;
      const totalClientes = 14;
      const reportesGenerados = 4;

      document.getElementById("reservas-count").textContent = totalReservas;
      document.getElementById("clientes-count").textContent = totalClientes;
      document.getElementById("reportes-count").textContent = reportesGenerados;
    });
  </script>
</head>
<body>
  <header>
    <h1>Panel de Administración - Dashboard</h1>
    <nav>
      <a href="dashboard.html" class="active">Dashboard</a>
      <a href="reservas-listado.html">Reservas</a>
      <a href="reportes.html">Reportes</a>
      <a href="login.html">Cerrar Sesión</a>
    </nav>
  </header>

  <main>
    <section class="dashboard">
      <div class="card">
        <h3>Reservas Totales</h3>
        <p id="reservas-count">0</p>
      </div>
      <div class="card">
        <h3>Clientes Registrados</h3>
        <p id="clientes-count">0</p>
      </div>
      <div class="card">
        <h3>Reportes Generados</h3>
        <p id="reportes-count">0</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

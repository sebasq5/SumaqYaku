<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Consultar Reserva | Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/styles.css" />
  <script defer>
    function buscarReserva(event) {
      event.preventDefault();
      const cedula = document.getElementById("cedula").value.trim();
      const resultado = document.getElementById("resultado");

      if (cedula === "1600662041") {
        resultado.innerHTML = `
          <h3>✅ Reserva encontrada:</h3>
          <ul>
            <li><strong>Nombre:</strong> Ana Paredes</li>
            <li><strong>Fecha:</strong> 2025-05-15</li>
            <li><strong>Hora:</strong> 19:30</li>
            <li><strong>Personas:</strong> 4</li>
            <li><strong>Mesa:</strong> Mesa #7</li>
          </ul>
        `;
      } else {
        resultado.innerHTML = `
          <p style="color: crimson;">❌ No se encontró ninguna reserva con esa cédula.</p>
        `;
      }
    }
  </script>
</head>
<body>
  <header>
    <h1>Sumaq Yaku</h1>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="reservar-mesa.php">Reservas</a>
      <a href="consultar-reserva.php">Consultar</a>
      <a href="login.php">Iniciar Sesión</a>
    </nav>
  </header>

  <main>
    <section class="formulario">
      <h2>Consulta tu Reserva</h2>
      <form onsubmit="buscarReserva(event)">
        <input
          type="text"
          id="cedula"
          name="cedula"
          placeholder="Ingresa tu cédula"
          required
          pattern="\d{10}"
          title="Debe tener 10 dígitos"
        />
        <button type="submit" class="btn-reservar">Consultar</button>
      </form>

      <div id="resultado" class="resultado-consulta">
        <p>🔍 Por favor ingresa tu cédula para buscar tu reserva.</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

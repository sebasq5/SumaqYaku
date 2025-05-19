<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservar Mesa | Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
  <header>
    <h1>Sumaq Yaku</h1>
    <nav>
      <a href="index.html">Inicio</a>
      <a href="reservar-mesa.html">Reservas</a>
      <a href="consultar-reserva.html">Consultar</a>
      <a href="login.html">Iniciar Sesión</a>
    </nav>
  </header>

  <section class="formulario">
    <h2>Reserva tu Mesa</h2>
    <form action="#" method="POST">
      <input type="text" name="nombre" placeholder="Nombre Completo" required />
      <input type="email" name="email" placeholder="Correo Electrónico" required />
      <input type="tel" name="telefono" placeholder="Teléfono" required />
      <input type="date" name="fecha" required />
      <input type="time" name="hora" required />
      <input type="number" name="personas" placeholder="Número de Personas" required min="1" />

      <!-- Nueva sección: selección de mesa -->
      <select name="mesa" required>
        <option value="" disabled selected>Selecciona una mesa</option>
        <option value="Mesa 1">Mesa 1 - Interior</option>
        <option value="Mesa 2">Mesa 2 - Interior</option>
        <option value="Mesa 3">Mesa 3 - Ventana</option>
        <option value="Mesa 4">Mesa 4 - Terraza</option>
        <option value="Mesa 5">Mesa 5 - Terraza</option>
      </select>

      <textarea name="comentarios" placeholder="Comentarios adicionales (opcional)" rows="3"></textarea>
      <button type="submit" class="btn-reservar">Reservar</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

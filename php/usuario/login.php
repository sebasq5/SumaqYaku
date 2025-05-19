<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar Sesión | Sumaq Yaku</title>
  <link rel="stylesheet" href="../../css/styles.css">
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

  <section class="formulario">
    <h2>Iniciar Sesión</h2>
    <form action="#" method="POST">
      <input type="text" name="usuario" placeholder="Usuario" required />
      <input type="password" name="contrasena" placeholder="Contraseña" required />
      <button type="submit" class="btn-reservar">Entrar</button>
      <p style="text-align: center; margin-top: 1rem;">
        ¿No tienes cuenta? <a href="register.html">Regístrate aquí</a>
      </p>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

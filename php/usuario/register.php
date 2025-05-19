<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro | Sumaq Yaku</title>
  <link rel="stylesheet" href="css/styles.css" />
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
    <h2>Crear Cuenta</h2>
    <form action="#" method="POST">
      <input type="text" name="nombre" placeholder="Nombre Completo" required />
      <input type="email" name="correo" placeholder="Correo Electrónico" required />
      <input type="text" name="cedula" placeholder="Cédula" required pattern="\d{10}" title="Debe tener 10 dígitos" />
      <input type="text" name="usuario" placeholder="Nombre de Usuario" required />
      <input type="password" name="contrasena" placeholder="Contraseña" required />
      <button type="submit" class="btn-reservar">Registrar</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sumaq Yaku. Todos los derechos reservados.</p>
  </footer>
</body>
</html>

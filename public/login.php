<?php 
include '../includes/header.php'; 
?>
<section id="access">
    <!-- Botones para cambiar entre login y registro -->
    <div class="form-toggle">
        <button id="loginBtn">Iniciar sesión</button>
        <button id="registerBtn">Registrar cuenta</button>
    </div>

    <!-- Inicio de sesión -->
    <div class="form-login">
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

    <!-- Registro de sesión -->
    <div class="form-register" style="display:none;">
        <h2>Registrar cuenta</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Nombres" required>
            <input type="text" name="username" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="tel" name="telefono" placeholder=" Numero telefonico" required>
            <button type="submit">Registrar</button>
        </form>
    </div>
</section>
</body>
</html>

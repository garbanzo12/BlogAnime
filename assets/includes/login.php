<div id="login" class="bloque">
    <h3>Inicia Sesión</h3>
    <div class="alerta alerta-error">
        {Usuario no existe}
    </div>

    <form action="..login-register/login.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" />

        <label for="password">Contraseña</label>
        <input type="password" name="password" />

        <input type="submit" value="Entrar" />
    </form>
</div>
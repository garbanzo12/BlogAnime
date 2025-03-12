<?php include 'assets/includes/navbar.php';?>
<?php include 'assets/includes/menu.php';?>
        
       
                
                <div id="login" class="bloque">
                    <h3>Inicia Sesión</h3>
                    <div class="alerta alerta-error">
                        {Usuario no existe}
                    </div>
                    
                    <form action="login.php" method="POST"> 
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />
                        
                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                
                <div id="register" class="bloque">
                    <h3>Registrarse</h3>
                    
                    <!-- Mostrar errores -->
                    <div class="alerta alerta-exito">
                        {Se registro correctamente}
                    </div>
                    <div class="alerta alerta-error">
                        {Error en algun dato}
                    </div>
                    
                    <form action="registro.php" method="POST"> 
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" />
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" />
                        
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />
                        
                        <input type="submit" name="submit" value="Registrar" />
                    </form>
                </div>
            </aside>
        <!-- Main -->
        <?php include 'assets/includes/main.php';?>
        <!-- PIE DE PÁGINA -->
        <footer id="pie">
            <p>Desarrollado por {Nombre Aprendiz} &copy; {Año actual}</p>
        </footer>
        
    </body>
</html>

<?php

?>
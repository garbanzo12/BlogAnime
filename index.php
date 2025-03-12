<?php include 'assets/includes/navbar.php';?>
<?php include 'assets/includes/login.php';?>
<?php include 'assets/includes/registro.php';?>
        
        <div id="contenedor">
            <!-- BARRA LATERAL -->
            <aside id="sidebar">
                <div id="buscador" class="bloque">
                    <h3>Buscar</h3>
                    <form action="buscar.php" method="POST"> 
                        <input type="text" name="busqueda" />
                        <input type="submit" value="Buscar" />
                    </form>
                </div>
                
                <div id="usuario-logueado" class="bloque">
                    <h3>Bienvenido, {Nombre Usuario}</h3>
                    <!--botones-->
                    <a href="crear-entradas.php" class="boton boton-verde">{Crear entradas}</a>
                    <a href="crear-categoria.php" class="boton">{Crear categoria}</a>
                    <a href="mis-datos.php" class="boton boton-naranja">{Mis datos}</a>
                    <a href="cerrar.php" class="boton boton-rojo">{Cerrar sesión}</a>
                </div>


                
                <!-- Aqui hiba el login -->
                
                <div id="register" class="bloque">
                    <h3>Registrarse</h3>
                    
                    <!-- Mostrar errores -->
                    <div class="alerta alerta-exito">
                        {Se registro correctamente}
                    </div>
                    <div class="alerta alerta-error">
                        {Error en algun dato}
                    </div>
                    
                    <!-- Aqui hiba el register -->

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
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
            
            <!-- CAJA PRINCIPAL -->
            <div id="principal">
                <h1>Últimas entradas</h1>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2>{Titulo Entrada}</h2>
                        <span class="fecha">{Categoria} | {Fecha de publicación}</span>
                        <p>
                            {Descripcion de entrada}
                        </p>
                    </a>
                </article>
                
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2>{Titulo Entrada}</h2>
                        <span class="fecha">{Categoria} | {Fecha de publicación}</span>
                        <p>
                            {Descripcion de entrada}
                        </p>
                    </a>
                </article>
                
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2>{Titulo Entrada}</h2>
                        <span class="fecha">{Categoria} | {Fecha de publicación}</span>
                        <p>
                            {Descripcion de entrada}
                        </p>
                    </a>
                </article>
                
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2>{Titulo Entrada}</h2>
                        <span class="fecha">{Categoria} | {Fecha de publicación}</span>
                        <p>
                            {Descripcion de entrada}
                        </p>
                    </a>
                </article>
                
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2>{Titulo Entrada}</h2>
                        <span class="fecha">{Categoria} | {Fecha de publicación}</span>
                        <p>
                            {Descripcion de entrada}
                        </p>
                    </a>
                </article>
                
                <div id="ver-todas">
                    <a href="entradas.php">Ver todas las entradas</a>
                </div>
            </div> <!--fin principal-->
            
        </div> <!-- fin contenedor -->
        
        <!-- PIE DE PÁGINA -->
        <footer id="pie">
            <p>Desarrollado por {Nombre Aprendiz} &copy; {Año actual}</p>
        </footer>
        
    </body>
</html>

<?php

?>
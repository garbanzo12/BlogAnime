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
             </aside>
</div>
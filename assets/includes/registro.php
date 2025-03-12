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
        <!-- Ventana modal del login -->
        <form id="frmLogin" class="modal" action="login" method="post">
            <div class="flex" id="flex">
                <div class="contenido-modal">
                    <div class="modal-header flex">
                        <h2>Iniciar sesión</h2>
                        <span class="close" id="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <!-- Usuario -->
                            <label for="username">Usuario:</label>
                            <input type="email" name="data[]" placeholder="Ingrese usuario" required>
                        </div>
                        <div class="form-group">
                            <!-- Contraseña -->
                            <label for="password">Contraseña:</label>
                            <input type="password" name="data[]" placeholder="Ingrese contraseña" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Boton ingresar -->
                        <input type="submit" value="Ingresar">
                    </div>
                </div>
            </div>
        </form>
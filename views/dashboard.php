    <div class="encuesta-dashboard">
        <h3>¿Como te ha parecido tu experiencia en mi pagina?</h3>
        <div class="caja-pregunta">
            <div id="res-excelente" class="confirma-encuesta"></div>
            <p>Excelente</p>
        </div>
        <div class="caja-pregunta">
            <div id="res-pesima" class="confirma-encuesta"></div>
            <p>Pesima</p>
        </div>
        <div class="respuestas">
            <div id="respuesta-excelente" class="respuesta-excelente">
                <h3>Esooooo, eres uno de nuestros clientes preferidos!</h3>
            </div>
            <div id="respuesta-pesima" class="respuesta-pesima">
                <h3>Ah, valorese, vaya compre mangos ome solangel.</h3>
            </div>
        </div>
    </div>
    <div class="btn-cerrar-sesion">
        <a href="salir">Cerrar Sesion</a>
    </div>
    <script>
        // ***************************************************************************************
        // Encuesta de dashboard
        let resExcelente = document.getElementById('res-excelente');
        let resPesima = document.getElementById('res-pesima');
        let msnExcelente = document.getElementById('respuesta-excelente');
        let msnPesima = document.getElementById('respuesta-pesima');

        resExcelente.addEventListener('click', function(){
            resExcelente.style.background = '#000';
            resPesima.style.background = '#a0a0a0';
            msnExcelente.style.display = 'block';
            msnPesima.style.display = 'none';
        });
        resPesima.addEventListener('click', function(){
            resExcelente.style.background = '#a0a0a0';
            resPesima.style.background = '#000';
            msnExcelente.style.display = 'none';
            msnPesima.style.display = 'block';
        });
    </script>
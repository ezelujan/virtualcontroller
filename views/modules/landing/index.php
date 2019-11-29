            <!-- Titulos y subtitulos del header -->
            <div class="textos">
                <h1 class="titulo" id="titulo">Virtual Controller</h1>
                <h3 class="subtitulo">"Luz que apagas, luz que no pagas"</h3>
                <a href="#" id="abrir" class="boton">Iniciar sesion</a>
            </div>

            <!-- Efecto del triangulo en header -->
            <div class="sesgoabajo"></div>
        </header>

        <?php require_once ('views/modules/users/login.php');?>

        <main>
            <section class="acerca-de">
                <div class="contenedor-sobre-nosotros">
                    <h2 class="sobre-nosotros" id="sobre-nosotros">Sobre nosotros</h2>
                    <h3 class="slogan" id="slogan">Historia</h3>
                    <p class="parrafo" id="parrafo1">Todo comenzó a inicios del 2019 con la preparación en desarrollo de software. A finales de marzo del presente año surgió unas lluvias de ideas, un poco desorganizadas, se fue seleccionando poco a poco hasta obtener la que nos dio más sentido, lo que hizo que empezáramos a trabajar en ella desde hace 6 meses, logrando crear una aplicación con ayuda de un de software y asesorías de las personas indicadas. Nos propusimos a la investigación sobre el tema, los pros y contras de este, como además todos sus componentes que se necesitaban para logar la meta que se tenía.</p>
                    <a href="#contactanos" class="boton" id="botoncontactanos">Contactanos</a>
                </div>
            </section>

            <section class="galeria">
                <!-- Efecto del triangulo de arriba de galeria -->
                <div class="sesgoarriba" id=sesgoarribagaleria></div>
                <div class="imagenes none" id="imagen1">
                    <img src="views/assets/img/1.jpg" alt="">
                </div>
                <div class="imagenes" id="imagen2">
                    <img src="views/assets/img/3.jpg" alt="">
                </div>
                <div class="imagenes" id="imagen3">
                    <img src="views/assets/img/2.jpg" alt="">
                    <div class="encima">
                        <h2>Virtual Controller</h2>
                        <div></div>
                    </div>
                </div>
                <div class="imagenes" id="imagen4">
                    <img src="views/assets/img/4.jpeg" alt="">
                </div>
                <div class="imagenes none" id="imagen5">
                    <img src="views/assets/img/5.jpeg" alt="">
                </div>
                <!-- Efecto del triangulo de abajo de galeria -->
                <div class="sesgoabajo" id=sesgoabajogaleria></div>
            </section>

            <section class="informacion-objetivos">
                <div class="contenedor-objetivos">
                    <h2 class="sobre-nosotros">Nuestros objetivos</h2>
                    <h3 class="slogan">Conoce algunos de nuestros objetivos</h3>
                    <div class="objetivos">
                        <div class="objetivo">
                            <p> <b>General:</b> Crear con nuestra aplicación una mejora en las diferentes áreas de seguridad y ahorro energético en la vivienda, colegio, empresa o establecimiento sin la necesidad de su presencia.<br><br><b>Específicos:</b> Disminuir el ahorro energético en la automatización domótica a través de la experimentación en un colegio con exigencias energéticas.<br><br><b>-</b> Brindar una aplicación con control en el área de ventilación, sonido y diferentes aparatos electrónicos que se soliciten en un futuro.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="miembros">
                <div class="sesgoarriba"></div>
                <div class="contenedor-equipo">
                    <h2 class="titulo-equipo">Nuestro equipo</h2>
                    <h3 class="subtitulo-equipo">Conoce a nuestro equipo de trabajo</h3>
                    <div class="cards">
                        <div class="card" id="card1">
                            <img src="views/assets/img/eze.jpg" alt="">
                            <h4>Ezequiel Luján</h4>
                            <p>Backend</p>
                        </div>
                        <div class="card" id="card2">
                            <img src="views/assets/img/samuel.jpg" alt="">
                            <h4>Samuel Yepes</h4>
                            <p>Frontend</p>
                        </div>
                    </div>
                </div>
                <div class="sesgoabajo-unico"></div>
            </section>
        </main>
    </body>
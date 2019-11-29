$(document).ready(function(){
    // ***************************************************************************************
    // Abrir menu animado
    let boton = document.getElementById("iconomenu");
    let enlaces = document.getElementById("enlaces");
    let fondomenu = document.getElementById("fondomenu");
    let sw = 0;
    boton.addEventListener("click", function(){
        if(sw==0){
            enlaces.className = ("enlaces dos");
            sw = 1;
            fondomenu.style.height = ('100%');
        }else{
            enlaces.classList.remove("dos");
            enlaces.className = ("enlaces uno");
            sw = 0;
            fondomenu.style.height = ('0');
        }
        window.addEventListener('click', function(e){
            if( e.target == fondomenu){
                fondomenu.style.height = ('0');
                enlaces.classList.remove("dos");
                enlaces.className = ("enlaces uno");
                sw = 0;
            }
        });
    })
    
    // ***************************************************************************************
    //Movimiento mediante al scroll
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('imagen1');
        let posicionObj1 = animacion.getBoundingClientRect().top;
        // console.log(animacion.getBoundingClientRect().top)
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj1 < TamañoDePantalla){
            animacion.style.animation = 'HaciaDerecha-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('imagen2');
        let posicionObj2 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj2 < TamañoDePantalla){
            animacion.style.animation = 'HaciaArriba-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('imagen3');
        let posicionObj3 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj3 < TamañoDePantalla){
            animacion.style.animation = 'HaciaAbajo-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('imagen4');
        let posicionObj4 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj4 < TamañoDePantalla){
            animacion.style.animation = 'HaciaArriba-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('imagen5');
        let posicionObj5 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj5 < TamañoDePantalla){
            animacion.style.animation = 'HaciaIzquierda-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('card1');
        let posicionObj6 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj6 < TamañoDePantalla){
            animacion.style.animation = 'HaciaDerecha-Scroll 2s ease-out';
        }
    })
    // ***************************************************************************************
    window.addEventListener("scroll", function(){
        let animacion = document.getElementById('card2');
        let posicionObj7 = animacion.getBoundingClientRect().top;
        let TamañoDePantalla = window.innerHeight;

        if(posicionObj7 < TamañoDePantalla){
            animacion.style.animation = 'HaciaIzquierda-Scroll 2s ease-out';
        }
    })

    // ***************************************************************************************
    // Boton ir arriba
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 1000);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
        }else{
            $('.ir-arriba').slideUp(300);
        };
    });

    // ***************************************************************************************
    // Boton ir a contactanos
    $('a[href^="#contactanos"]').click(function() {
        var destino = $(this.hash); //this.hash lee el atributo href de este
        $('html, body').animate({ scrollTop: destino.offset().top }, 1000); //Llega a su destino con el tiempo deseado
        return false;
    });
    
    // ***************************************************************************************
    // Abrir ventana modal de login
    let modal = document.getElementById('frmLogin');
    let flex = document.getElementById('flex');
    let abrir = document.getElementById('abrir');
    let abrirdesdemenu = document.getElementById('abrirdesdemenu');
    let cerrar = document.getElementById('close');

    abrir.addEventListener('click', function(){
        modal.style.display = 'block';
        enlaces.classList.remove("dos");
        enlaces.className = ("enlaces uno");
        sw = 0;
    });

    abrirdesdemenu.addEventListener('click', function(){
        modal.style.display = 'block';
        enlaces.classList.remove("dos");
        enlaces.className = ("enlaces uno");
        sw = 0;
        fondomenu.style.height = ('0');
    });
    
    cerrar.addEventListener('click', function(){
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(e){
        if( e.target == flex){
            modal.style.display = 'none';
        }
    });
});
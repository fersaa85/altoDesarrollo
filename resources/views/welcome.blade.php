<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fraccionamiento VALLE TINTO 11 - Corregidora Queretaro</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- bootstrap --> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/app.css?v=0.0.3">
    </head>
    <body class="antialiased">
        
    <nav class="navbar navbar-expand-lg navbar-light container bg-nav">
        
                <a class="navbar-brand" href="#">
                    <img src="./images/AD-dorado_logo.png" width="150px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#house">CASA</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#valley">VALLE TINTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#progress">AVANCES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#map">UBICACIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACTO</a>
                        </li>
                    </ul>
                </div>

    </nav>
  
    @if($errors->any())
        <div class="alert alert-danger text-center" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
     @endif

    <!--
    MODAL PROMOTIONS
    -->
    @if($promotional_modal)
        <div id="promotionModal" class="modal">
            <span class="close promotionModal-close">&times;</span>
            <img class="modal-content"  src="{!! $promotional_modal !!}" >
        </div>
    @endif
  
    <!--
    WHATSAPP
    -->
    <div class="position-fixed whatsapp d-none d-md-block">
        <div class="text-center p-4 m4">
            <a href="https://api.whatsapp.com/send?phone=524422260869&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n." target="_blank">
                <img src="./images/whatsapp.png" />
                <p class="color-white">Contactanos</p>
            </a>
        </div>   
    </div>

    <div class="position-fixed whatsapp-moviel d-sm-block d-md-none">
        <a href="#" class="">
            <img src="./images/whatsapp.png" width="50px"/>
        </a>
    </div>


    <!--
     HOME
     -->
     <div class="container-fluid bg-home-web d-none d-md-block" id="home" >
        <div class="row ">
            <div class="col-md-12 text-center pl-0 pr-0">
                
                    <div>
                        <div class="p-4"> 
                            <div class="w-50 mr-auto ml-auto text-center" >
                                <p class="m-2">
                                    <img src="./images/AD-blanco_logo.png"/>
                                </p>
                                <h1 class="m-4">
                                    TU HOGAR IDEAL<br >

                                    SE CONVIERTE EN REALIDAD
                                </h1>
                                <p class="m-4">
                                Descubre nuestros proyectos residenciales que combinan diseño, calidad y una ubicación

privilegiada en las mejores zonas de Querétaro.
                                </p>
                                <p class="m-4">
                                    <a href="" class="color-white bg-brown text-decoration-none btn">CONTÁCTA CON UN ASESOR</a>
                                </p>
                            </div>
                        </div>
                    </div>
                
             </div>
        </div>
    </div>
    <div class="container-fluid d-sm-block d-md-none" id="home" >
        <div class="row ">
            <div class="col-md-12 text-center pl-0 pr-0">
                <img src="./images/portada-inicio-03.png" width="100%" />
            </div>
        </div>
    </div>

    <!--   
    NOSOTROS 
    -->
    <div class="container-fluid" id="house">
        <div class="row p-1">
            <div class="col-md-4 d-flex align-items-center">
                <span class="border-black"></span>
            </div>
            <div class="col-md-4">
                <h2 class="color-brown text-uppercase text-center">Nosotros</h2>
            </div> 
            <div class="col-md-4 d-flex align-items-center">
                <span class="border-black"></span>
            </div> 
        </div>     

        <div class="container pt-4 pb-4 color-black">
            <div class="row border-section-us p-4">
                <div class="col-md-6 ">
                    <div>
                        <h3 class="color-brown">MISIÓN</h3>
                        <p class="font-size-12">En Alto Desarrollos, transformamos espacios en hogares diseñados para mejorar la
calidad de vida de las familias, ofreciendo viviendas de calidad, funcionales y
duraderas que brinden calidez y comodidad. Para nuestros inversionistas,
garantizamos transparencia, profesionalismo y rentabilidad, protegiendo su inversión
con integridad y excelencia en cada proyecto.</p>
                    </div>
                    
                    <div>
                    <h3 class="color-brown">VISIÓN</h3>
                        <p class="font-size-12">Ser reconocidos como una de las desarrolladoras inmobiliarias más confiables y
destacadas en México, liderando el sector con proyectos de calidad, diseño
atemporal y un enfoque en la transparencia, tanto para los compradores finales
como para nuestros inversionistas. Aspiramos a construir un legado de confianza,
profesionalismo y valor en cada desarrollo.</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="./images/web/mision.jpg" width="100%" />
                </div>
            </div>
            <div class="row border-section-us p-4 mt-3">
                <div class="col-md-6">
                    <img src="./images/web/valores.jpg" width="100%" />
                </div>
                <div class="col-md-6">
                    <div>
                        <h3 class="color-brown">VALORES</h3>
                        <div class="font-size-12">
                            <p><b>1. Transparencia:</b></br >
                            Actuamos con claridad y honestidad, manteniendo a nuestros clientes
                            e inversionistas informados y confiados en cada etapa del proceso.</p>
                            <p><b>2. Calidad:</b></br >
                            Nos comprometemos a ofrecer viviendas y remodelaciones con
                            materiales duraderos, diseño atemporal y atención al detalle.</p>
                            <p><b>3. Compromiso:</b></br >
                            Trabajamos con dedicación para superar las expectativas de nuestros
                            clientes y proteger las inversiones de nuestros socios.</p>
                            <p><b>4. Profesionalismo:</b></br >
                            Priorizamos la excelencia en la ejecución de cada proyecto, desde la
                            planeación hasta la entrega.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!--
     GALLERY PROYECTOS
     -->
     <div class="container-fluid" id="house">
            <div class="row p-1">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="border-black"></span>
                </div>
                <div class="col-md-4">
                    <h2 class="color-brown text-uppercase text-center">Proyectos</h2>
                </div> 
                <div class="col-md-4 d-flex align-items-center">
                    <span class="border-black"></span>
                </div> 
            </div>     
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-6" >
                    <div id="carouselWebIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselWebIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselWebIndicators" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <img src="./images/gallery/casa2.jpeg" class="d-block w-100" alt="...">
                                </div>
                             </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa3.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa4.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa5.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa6.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselWebIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselWebIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 bg-brown gallery-text">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>FRACCIONAMIENTO VALLE TINTO 11</h3>
                            <p>Municipio de Corregidora, Querétaro.</p>
                            <h1 class="color-black price">$ 5,499,999.99MXN</h1>

                        </div>
                        <div class="col-md-8"> 
                            <ul>
                                <li><img src="./images/icons/mesa-del-comedor.png" class="icons" /> Recibidor / Sala / Comedor Cocina + Alacena</li>
                                <li><img src="./images/icons/estufa-de-cocina.png" class="icons" /> Cocina + Alacena</li>
                                <li><img src="./images/icons/cama.png" class="icons" /> 3 recamaras (una 4° posible) /
                                <li><img src="./images/icons/inodoro.png" class="icons" /> Baño completo</li>
                                <li><img src="./images/icons/terraza.png" class="icons" /> Jardín y Roof Garden</li>
                                <li><img src="./images/icons/lavadora.png" class="icons" /> Cuarto de lavado</li>
                                <li><img src="./images/icons/sofa.png" class="icons" /> Family Room</li>
                                <li><img src="./images/icons/coche.png" class="icons" /> 2 cajones de estacionamientos</li>
                            </ul>
                        </div>
                         <div class="col-md-4 text-center div-container">
                            <div class="div-center">
                                <img src="./images/icons/medida.png" width="100%"/>
                                <p><b>244 m2</b></p> 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-center">
                                <a href="" class="color-white bg-black text-decoration-none btn">Agendar visita</a>
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
     GALLERY PASADOS
     -->
     <div class="container-fluid"> 
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-6" >
                    <div id="carouselExampleIndicatorsOld" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicatorsOld" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <img src="./images/gallery/casa2.jpeg" class="d-block w-100" alt="...">
                                </div>
                             </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa3.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa4.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa5.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gallery/casa6.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicatorsOld" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicatorsOld" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 color-brown">
                            <h3>Proyectos pasados </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
    OPROTUNIDADES
    -->
    <div class="container-fluid bg-oportunity pt-4 pb-4"> 
        <div class="row p-1">
            <div class="col-md-4 d-flex align-items-center">
                <span class="border-black"></span>
            </div>
            <div class="col-md-4">
                <h2 class="color-brown text-uppercase text-center">Oportunidades</h2>
            </div> 
            <div class="col-md-4 d-flex align-items-center">
                <span class="border-black"></span>
            </div> 
        </div>  
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-row-reverse align-items-center m-4">
                        <img src="./images/web/terreno.png">    
                        <h3 class="color-brown text-uppercase text-center">Terrenos</h3>
                    </div>  
                </div>  
            </div> 
            <div class="row">
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12" >
                    <div class="d-flex flex-row-reverse align-items-center m-4">
                        <img src="./images/web/departamento.png">    
                        <h3 class="color-brown text-uppercase text-center">Departamentos</h3>
                    </div>  
                </div>  
            </div> 
            <div class="row">
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12" >
                    <div class="d-flex flex-row-reverse align-items-center m-4">
                        <img src="./images/web/hogar.png">    
                        <h3 class="color-brown text-uppercase text-center">CASAS</h3>
                    </div>  
                </div>  
            </div> 
            <div class="row mb-2">
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
                <div class="col-md-3" >
                    <img src="./images/gallery/casa2.jpeg" width="100%">
                </div>
            </div>
        </div>
    </div>


     <!--
     FORM
     -->
     <div class="container-fluid bg-form-contact-web pt-4 pb-4" id="contact">
        <div class="container pt-2 pb-2">
            <div class="row">
                <div class="col-md-6" >
                    <form action="{{ route('contact') }}" method="POST" enctype='multipart/form-data' class="form-contact bg-white">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                        <p class="text-center color-brown"> ¡Solicita más información y asegura una visita en esta hermosa propiedad!</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" name="name">
                         </div>
                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                         </div>
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Teléfono" name="phone">
                         </div>
                         <div class="form-group">
                            <textarea class="form-control" placeholder="Mensaje" name="message"></textarea>
                         </div>
                         <div class="text-center">
                                <button type="submit" class="btn bg-brown color-white btn-form-horizontal">ENVIAR</button>
                         </div>
                    </form>
                </div>
                <div class="col-md-6" >
                    <h1 class="text-center">¿LISTO PARA</br >
                    CONSEGUIR
                    TU NUEVO HOGAR?</br >
                    </h1>
                </div>
            </div>
        </div>
    </div>



    <!--
     FOOTER
     -->
     <div class="container-fluid bg-brown">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-4 pt-3 pb-3" >
                    <p>Derechos reservados <br />Alto Desarrollos® 2024</p>
                </div>
                <div class="col-md-4 text-center" >
                    <img src="./images/AD-blanco_logo.png"/>
                </div>
                <div class="col-md-4">
                    <div class="pt-2 pb-2">
                        <a href="https://www.facebook.com/GrupoAltoDesarrollos">
                            <img src="./images/facebook.png" width="30px"  target="_blank"/>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=524422260869&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n." target="_blank" class="color-white">
                            <img src="./images/llamar.png"  width="30px" />442 226 0869
                        </a>
                    </div>
                    <div class="pt-2 pb-2">
                        <a href="https://www.instagram.com/alto_desarrollos/" target="_blank">
                            <img src="./images/instagram.png" width="30px"  />
                        </a>
                        <a href="mailto:info@altodesarrollo.com?Subject=Informes"  target="_blank" class="color-white">
                            <img src="./images/correo-electronico.png"  width="30px" /> info@altodesarrollo.com
                        </a>
                    </div>
                </div>
            </div>
         </div>
     </div>


        <!-- bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script>
        $(document).ready(function() {
            $('#promotionModal').fadeIn(); 

            $('.promotionModal-close').on('click', function() {
                $('#promotionModal').fadeOut();
            });

            let $scrollContainer = $(".gallery");
            let $backBtn = $("#backBtn");
            let $nextBtn = $("#nextBtn");

            $scrollContainer.on("wheel", function(evt) {
                evt.preventDefault();
                this.scrollLeft += evt.originalEvent.deltaY;
                $(this).css("scroll-behavior", "auto");
            });

            $nextBtn.on("click", function() {
                $scrollContainer.css("scroll-behavior", "smooth");
                $scrollContainer[0].scrollLeft += 900;
            });

            $backBtn.on("click", function() {
                $scrollContainer.css("scroll-behavior", "smooth");
                $scrollContainer[0].scrollLeft -= 900;
                console.log("back");
            });

            $('.gallery-img').on('click', function() {
                var src = $(this).attr('src');
                $('#modalImage').attr('src', src);
                $('#imageModal').fadeIn();
            });

            $('.close').on('click', function() {
                $('#imageModal').fadeOut();
            });

            // Cerrar modal al hacer clic fuera de la imagen
            $(window).on('click', function(event) {
                if ($(event.target).is('#imageModal')) {
                    $('#imageModal').fadeOut();
                }

                if ($(event.target).is('#promotionModal')) {
                    $('#promotionModal').fadeOut();
                }
            });
        });

       

    </script>
        <script src="https://hammerjs.github.io/dist/hammer.js"></script>
        <script>
            /*
        $(document).ready(function(){
            $(".nav-item").click(function(){
                $(".nav-item").removeClass("active");
                $(this).addClass("active");
            });

            function next() {
                if ($(".hide").length) {
                    $(".hide").remove();
                }

                /* Step *
                if ($(".prev").length) {
                    $(".prev").addClass("hide").removeClass("prev");
                }

                $(".act").addClass("prev").removeClass("act");
                $(".next").addClass("act").removeClass("next");

                /* New Next *
                $(".new-next").removeClass("new-next").addClass("next");

                const addedEl = $("<li></li>");
                $(".list").append(addedEl);
                addedEl.addClass("new-next");
                
            }

            function prev() {
                $(".new-next").remove();

                /* Step *
                $(".next").addClass("new-next");

                $(".act").addClass("next").removeClass("act");
                $(".prev").addClass("act").removeClass("prev");

                /* New Prev *
                $(".hide").addClass("prev").removeClass("hide");

                const addedEl = $("<li></li>");
                $(".list").prepend(addedEl);
                addedEl.addClass("hide");
            }

            const slide = (element) => {
                /* Next slide *
                if ($(element).hasClass('next')) {
                next();

                /* Previous slide *
                } else if ($(element).hasClass('prev')) {
                prev();
                }
            };

            const slider = $(".list");
            const swipe = new Hammer($(".swipe")[0]);

            slider.on("click", function (event) {
                slide(event.target);
            });

            swipe.on("swipeleft", function (ev) {
                next();
            });

            swipe.on("swiperight", function (ev) {
                prev();
            });

        });
        */
        </script>
    
    </body>
</html>

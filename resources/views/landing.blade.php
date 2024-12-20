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
     <div class="container-fluid bg-home d-none d-md-block" id="home" >
        <div class="row ">
            <div class="col-md-12 text-center pl-0 pr-0">
                
                    <div style="padding-top: 50%" >
                        <div class="bg-home-opacity p-4"> 
                            <div class="w-50 mr-auto ml-auto">
                                <p class=" m-0">Asegura tu futuro con una propiedad exclusiva en el mejor fraccionamiento campestre entre viñedos del noroeste de México.</p>
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
     GALLERY
     -->
     
     <div class="container-fluid" id="house">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-6" >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
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
                            <!--
                            <div class="carousel-item ">
                                <img src="./images/gallery/casa1.jpeg" class="d-block w-100" alt="...">
                             </div>
                            -->
                            <!--
                            <div class="carousel-item">
                                <img src="./images/gallery/casa7.jpeg" class="d-block w-100" alt="...">
                            </div>
                            -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
     FORM HORIZONTAL
     -->
     <div class="container-fluid bg-black">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="text-align-center" > 

                        <h4 class="color-brown font-weight-bold">¡SOLICITA MÁS INFORMACIÓN!</h4>
                        <p>Rellena el siguiente formulario y nos pondremos en contacto contigo lo antes posible.</p>     
                    </div>

                    <form action="{{ route('contact') }}" method="POST" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Nombre" name="name">
                            </div>
                            <div class="col-md-3">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Teléfono" name="phone">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Mensaje"  name="message">
                            </div>
                        </div>
                        <div class="form-row pt-3 pb-3">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn bg-brown color-white btn-form-horizontal">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--
     VIDEO
     -->
     <div class="container pt-4 pb-4" id="valley">
            <div class="row">
                <div class="col-md-4 text-center" >
                    <img src="./images/texto-valletinto-02.png"  class="img-video"/>
                    <p class="color-black">Tu nuevo Hogar</p>
                </div>
                <div class="col-md-8" >
                    <!--
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                    -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./images/video/ACCESO TERRAZA VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/ALBERCA-TERRAZA CLUB VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/ALBERCA 2 VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/ALBERCA VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/CANCHAS MULTI USO VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/JUEGOS INFANTILES 2 VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/JUEGOS INFANTILES VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/TERRAZA CLUB 1 VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/VISTA ALBERCA VT.jpg" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/video/ZONA ASADORES VT.jpg" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
    </div>



     <!--
     CARRUCEL
     -->
     <div class="container" id="progress">
        <div class="gallery-wrap " d-none d-md-block>

            <div id="carrucel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="./images/render/const_1casa.jpg" class="gallery-img img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item  text-center ">    
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="./images/render/const_2cocina.jpg" class="gallery-img img-fluid rounded">
                                    </div>
                                </div>
                            </div> 
                            <div class="carousel-item  text-center">    
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="./images/render/const_3sala.jpg" class="gallery-img img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item  text-center"> 
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="./images/render/const_4cuarto.jpg" class="gallery-img img-fluid rounded">
                                    </div>
                                </div> 
                            </div>
                            <div class="carousel-item  text-center"> 
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="./images/render/const_5roofgarden.jpg" class="gallery-img img-fluid rounded">
                                    </div>
                                </div> 
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev color-black" href="#carrucel" role="button" data-slide="prev" >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next color-black" href="#carrucel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
       
     </div>
     
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
        

     <!--
     MAP
     -->
     <div class="container-fluid" id="map">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12 text-center bg-map"  >
                    <h3>UBICACIÓN</h3>
                    <p>Cerca de Todo lo que Necesitas<br />
                    Ubicado en C. Circuito del Bosque, Fraccionamiento Valle Tinto, estás a minutos de centros comerciales, hospitales y escuelas de primer nivel.</p>
                    
                </div>
                <div class="col-md-12 text-center">
                    <div class="row position-height">
                        <div class="col-md-3 color-black ">
                            <div class="position-relative ">
                                <div class="position-absolute div-top div-shadow position-height bg-white" >
                                    <h4>8 MINUTOS </h4>
                                    <p>de Centro comercial con tiendas, restaurantes y servicios variados.</p>
                                </div>    
                            </div>
                        </div>

                        <div class="col-md-3 color-black ">
                            <div class="position-relative ">
                                <div class="position-absolute div-top div-shadow position-height bg-white" >
                                    <h4>25 MINUTOS </h4>
                                    <p>de Zona turística
                                    con arquitectura colonial, museos y plazas.</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-3 color-black ">
                            <div class="position-relative ">
                                <div class="position-absolute div-top div-shadow position-height  bg-white" >
                                    <h4> 15 MINUTOS</h4>
                                    <p>de Hospital privadoz
                                    de alta calidad.</p>
                                </div>
                            </div>
                        </div>
                       

                        <div class="col-md-3 color-black ">
                            <div class="position-relative ">
                                <div class="position-absolute div-top div-shadow position-height bg-white" >
                                    <h4>10 MINUTOS </h4>
                                    <p>de Área natural
                                    perfecta para paseos y actividades al aire libre.</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" >
        <div class="container pt-4 pb-4"">
            <div class="row">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.6542198769603!2d-100.4170927249636!3d20.520396405045314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34521063f15cd%3A0xb021cdd4cb9aae00!2sVALLE%20TINTO%20RESIDENCIAL!5e0!3m2!1ses-419!2smx!4v1730940471532!5m2!1ses-419!2smx" 
                    width="100%"   
                    height="450"     
                    style="border:0;"  
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>



     <!--
     FORM
     -->
     <div class="container-fluid bg-form-contact pt-4 pb-4" id="contact">
        <div class="container">
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
                    <img src="./images/texto-valletinto-02.png"  class="img-video"/>
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

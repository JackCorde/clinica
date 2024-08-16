<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles.css') }}">
    <title>JackCord Tarjets</title>
  </head>
  <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/Jack Devs.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            <!-- Aquí puedes agregar más campos si es necesario -->
                        </form>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>
    
    <div class="row">
        <div class="col-3 bg-dark" style=" color:white; padding: 1%;"  >
            <h5>Diseño</h5>
            <div class="row">
                <div class="col-2">
                    <button onclick="cambiarImagenFondo1()"><img class="imagen1" src="{{asset('assets/img/tarjetas/1.png')}}" alt=""></button>
                </div>
                <div class="col-2">
                    <button onclick="cambiarImagenFondo2()"><img class="imagen1" src="{{asset('assets/img/tarjetas/3.png')}}" alt=""></button>
                </div>
                <div class="col-2">
                    <button onclick="cambiarImagenFondo3()"><img class="imagen1" src="{{asset('assets/img/tarjetas/5.png')}}" alt=""></button>
                </div>
                <div class="col-2">
                    <button onclick="cambiarImagenFondo4()"><img class="imagen1" src="{{asset('assets/img/tarjetas/7.png')}}" alt=""></button>
                </div>
                <div class="col-2">
                    <button onclick="cambiarImagenFondo5()"><img class="imagen1" src="{{asset('assets/img/tarjetas/9.png')}}" alt=""></button>
                </div>
            </div>
            <br>
            <h5>Contenido</h5>
            <br>
            <div class="mb-3">
                <label for="input-nombre" class="form-label">Escribe tu nombre</label>
                <input type="text" class="form-control" id="input-nombre" placeholder="Juan Perez Perez">
            </div>
            <div class="mb-3">
            <label for="input-profesion" class="form-label">Escribe tu profesión o cargo</label>
            <input type="text" class="form-control" id="input-profesion" placeholder="Doctor">
            </div>
            <div class="mb-3">
                <label for="input-telefono" class="form-label">Escribe tu número telefónico</label>
                <input type="tel" class="form-control" id="input-telefono" placeholder="22-22-22-22-22">
            </div>
            <div class="mb-3">
                <label for="input-correo" class="form-label">Escribe tu correo eléctronico</label>
                <input type="email" class="form-control" id="input-correo" placeholder="ejemploCorreo@gmail.com">
            </div>
            <div class="mb-3">
                <label for="input-pagina" class="form-label">Escribe tu página web</label>
                <input type="text" class="form-control" id="input-pagina" placeholder="ejemploMiPagina.com.mx">
            </div>
            <div class="mb-3">
                <label for="input-ubicacion" class="form-label">Escribe tu ubicación</label>
                <input type="text" class="form-control" id="input-ubicacion" placeholder="Un Lugar">
            </div>
            <br>
                <div class="mb-3">
                    <input type="hidden" name="contenedor" value="card">
                    <label for="url" class="form-label">Pega el link de tu imagen de fondo:</label>
                    <input type="text" class="form-control" id="url" placeholder="Link de tu imagen">
                    <br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success" onclick="cargarImagenDeFondo()" >Cargar</button>
                    </div>
                </div>
        </div>
        <div class="col-9" id="contenedor-carta">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <br><br><br>
                    <div class="card shadow" id="card">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center">
                                <img class="imagen1-tarjeta" src="{{asset('assets/img/tarjetas/1.png')}}" alt="">
                            </div>
                            <div class="col-6">
                                <br><br><br>
                                <h2 id="nombre">Juan Perez Perez</h2>
                                <h3 id="profesion">Doctor</h3>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-2">
                                        <p style="margin: 2px; font-size:1.2em"><i class="fa-solid fa-phone"></i></p>
                                        <p style="margin: 2px; font-size:1.2em"><i class="fa-solid fa-envelope"></i></p>
                                        <p style="margin: 2px; font-size:1.2em"><i class="fa-brands fa-chrome"></i></p>
                                        <p style="margin: 2px; font-size:1.2em"><i class="fa-solid fa-location-dot"></i></p>
                                    </div>
                                    <div class="col-10">
                                        <p id="telefono" style="margin: 2px; font-size:1.2em">22-22-22-22-22</p>
                                        <p id="correo" style="margin: 2px; font-size:1.2em">ejemploCorreo@gmail.com</p>
                                        <p id="pagina" style="margin: 2px; font-size:1.2em">www.ejemploSitio.com</p>
                                        <p id="ubicacion" style="margin: 2px; font-size:1.2em">Un Lugar</p>
                                    </div>
                                </div>
                                
                                <br><br>
                            </div>
                            <div class="col-4 imagen2 fondo1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>

            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<script>
const imagen1 = document.querySelector('.imagen1-tarjeta');
const divImagen2 = document.querySelector('.imagen2');
const inputs = document.querySelectorAll('input');


function cambiarImagenFondo1() {
    // Cambia la imagen y el fondo
    imagen1.src = "{{ asset('assets/img/tarjetas/1.png') }}";
    divImagen2.className = 'col-4 imagen2 fondo1';
}

function cambiarImagenFondo2() {
    // Cambia la imagen y el fondo
    imagen1.src = "{{ asset('assets/img/tarjetas/3.png') }} ";
    divImagen2.className = 'col-4 imagen2 fondo2';
}

function cambiarImagenFondo3() {
    // Cambia la imagen y el fondo
    imagen1.src = "{{asset('assets/img/tarjetas/5.png')}}";
    divImagen2.className = 'col-4 imagen2 fondo3';
}

function cambiarImagenFondo4() {
    // Cambia la imagen y el fondo
    imagen1.src = "{{asset('assets/img/tarjetas/7.png')}}";
    divImagen2.className = 'col-4 imagen2 fondo4';
}

function cambiarImagenFondo5() {
    // Cambia la imagen y el fondo
    imagen1.src = "{{asset('assets/img/tarjetas/9.png')}}";
    divImagen2.className = 'col-4 imagen2 fondo5';
}

inputs.forEach(input => {
        input.addEventListener('input', function() {
            // Obtener el id del input y actualizar el contenido del h1 correspondiente
            const h1Id = input.id.split('-')[1];
            const h1Element = document.getElementById(h1Id);
            h1Element.textContent = input.value;
        });
    });

async function cargarImagenDeFondo() {
    const url = document.getElementById('url');
    const contenedor = document.getElementById('card');
    try {
        const response = await fetch(url.value);
        const blob = await response.blob();
        const imagenUrl = URL.createObjectURL(blob);
        
        // Agregar la imagen al contenedor
        contenedor.style.backgroundImage = `url('${imagenUrl}')`;
        contenedor.style.backgroundSize = 'cover';  // Corrección de backgroundSize
    
        console.log('Imagen cargada exitosamente');
    } catch (error) {
        alert('¡Error al cargar la imagen!');
        console.error('Error al cargar la imagen:', error);
    }
}
</script>
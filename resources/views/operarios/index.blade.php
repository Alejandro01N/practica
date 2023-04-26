@extends('layout/temple')

@section('title','operarios')

@section('contenido')
    
<main>
    <a href="../layout/estilos.css"></a>
    <div class="container py-4 ">
        <h2>Lista de operarios</h2>
        <a href="{{ url('operarios/create') }}" class="btn btn-primary btn-sm" >Nuevo Registro</a>
    </div>


    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="#sobre-mi">
                    <img src="./img/logo.svg" alt="Logo de la pagina web" width="40">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                <li class="nav-item informacion">
                    <a class="nav-link active" aria-current="page" href="#sobre-mi">Nosotros</a>
                </li>
                <li class="nav-item informacion">
                    <a class="nav-link" href="./colegio.html">Registrar colegios</a>
                </li>
                 <li class="nav-item informacion">
                    <a class="nav-link" href="{{ url('operarios/create') }}">Registrar operario</a>
                </li>
                <li class="nav-item informacion">
                    <a class="nav-link" href="#">Registrar canecas</a>
                </li>
               
                </ul>
            </div>
        </div>
    </nav>


    <section id="sobre-mi" class="sobre-mi ">
        <div class="contenedor text-center">
            <h2 class="seccion-titulo">Nosotros</h2>
            <p class="seccion-texto">Uno de los retos del planeta es concienciar a las futuras
                                     generaciones sobre el cuidado del medio ambiente y las prácticas
                                     a seguir para su conservación, como el reciclaje. ¿Y por qué no hacerlo
                                     en los centros educativos? Los colegios son uno de los espacios donde más
                                     residuos se generan durante el día a día de los niños y donde fácilmente 
                                     se pueden enseñar técnicas de reciclaje y educación ambiental. En el post
                                     de esta semana hablamos del reciclaje de envases, papel y cartón en los 
                                     colegios. ¡Sigue leyendo!

                                    ¿Qué tipo de residuos se generan en los colegios?
                                    Primero de todo, debemos saber qué tipo de residuos son los que más
                                    abundan en los centros educativos. Principalmente, en los colegios se
                                    generan tres tipos de residuos: orgánico, envases y papel y cartón. </p>
        </div>
    </section>

    

    <section id="contactos" class="contacto seccion-oscura">
        <div class="container">
            <div class="container text-center d-flex justify-content-evenly retangulo">
                <div class="row">
                    <div class="col-12 col-md-4 seccion-titulo">
                        Contactar
                    </div>
                    <div class="col-12 col-md-4 descripcion">
                        Quieres contactarte 
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="mailto:diegoyur20012015@gmail.com">
                            <button type="button">
                                Contactos
                                <i class="bi bi-envelope-at-fill"></i>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center">
        <img class="footer-logo" src="./img/logo.svg" alt="Logo del Portafolio">
        <p class="footer-texto text-center">Reciclemos para un mundo mejor. <br>Creamos un mejor futuro</p>
        <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
            <a href="https://twitter.com/diegonavarro162?t=uBavCPDvU-wrzL7wj2jC5A&s=08" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-twitter"></i>
              </a>
              <a href="https://github.com/Alejandro01N?tab=overview&from=2023-02-01&to=2023-02-28" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github"></i>
              </a>
              <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="https://www.instagram.com/freecodecamp/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="mailto:diegoyur20012015@gmail.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-envelope"></i>
              </a>
        </div>
        <div class="derecho-de-autor">Creado por Diego Alejandro Navarro Quintero (2023) &#169;</div>
    </footer>


    
    
    


</main>
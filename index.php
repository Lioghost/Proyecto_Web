<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:  rgba(0,0,0, 0.7);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Inicio</a>
                        </li>
                        <!--Esta parte es opcional, es nada más por si surge alguna situación en la que lo necesitemos-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Algun enlace xd</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item">Enalce 1</a></li>
                                <li><a class="dropdown-item">Enlace 2</a></li>
                                <li><a class="dropdown-item">Enlace 3</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item">Otro enlace</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Más sobre la empresa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/c_1.jpg" class="d-block w-100" alt="" height="500px" >
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0, 0.9);">
                        <p class="fs-4" style="color: white">Todos nuetros esfuerzos se centran en seguir siendo el agente de cambio en la región ofreciendo nuevos productos y servicios que contribuirán a transformar positivamente la vida de nuestros clientes en los próximos años</p>
                        <a class="btn btn-info btn-lg" role="button" aria-disabled="true" href="#">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/c_2.jpg" class="d-block w-100" alt="" height="500px">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0, 0.9);">
                        <p class="fs-4" style="color: white">Refrendamos nuestro compromiso con nuestros colaboradores, socios comerciales, accionistas y comunidades en las que operamos.</p>
                        <a class="btn btn-info btn-lg" role="button" aria-disabled="true" href="#">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/c_3.jpg" class="d-block w-100" alt="" height="500px">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0, 0.9);">
                        <p class="fs-4" style="color: white">Contamos con la red satelital más amplia de América Latina al cubrir a México, Estados Unidos, Centroamérica y Sudamérica.</p>
                        <a class="btn btn-info btn-lg" role="button" aria-disabled="true" href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>America móvil</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
    <header>
        <nav class="light-blue darken-4 nav-extended">
            <div class="nav-wrapper container nav">
                <a href="#" class="brand-logo">
                    <img src="img/logo.png" alt="">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="flow-text" href="../index.php">Inicio</a></li>
                    <li><a class="dropdown-button flow-text" data-activates="Nosotros-d" href="#">Nosotros</a></li>
                    <li><a class="btn white black-text waves-effect waves-grey" href="#">Contacto</a></li>
                </ul>

                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="../img/sid-1.jpg">
                            </div>
                            <a><img class="circle" src="../img/logo-1.png"></a>
                            <a><span class="white-text name">BIENVENIDO</span></a>
                        </div>
                    </li>
                    <li><a class="flow-text" href="index.php">Inicio</a></li>
                    <li><a class="dropdown-button flow-text" data-activates="Nosotros-d1" href="#">Nosotros <i
                                class="material-icons">arrow_drop_down</i></a></li>
                    <li><a class="btn btn-large white black-text waves-effect waves-grey" href="#">Contacto</a></li>
                </ul>

                <ul class="dropdown-content" id="Nosotros-d">
                    <li><a href="php/presencia.php"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="#"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                </ul>
                <ul class="dropdown-content" id="Nosotros-d1">
                    <li><a href="php/presencia.php"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="#"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Este es un carrusel automático, pero materialize tiene más y con diferentes opciones-->
        <section class="slider">
            <ul class="slides">
                <li>
                    <img src="img/agency-1.jpg">
                    <div class="caption center-align">
                        <h1>Insertar titulo</h3>
                            <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Facilis suscipit odio, explicabo sapiente totam nesciunt.</h5>
                            <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/agency-2.jpg">
                    <div class="caption left-align">
                        <h3>Insertar título</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/agency-3.jpg">
                    <div class="caption right-align">
                        <h3>Insertar título</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/c_1.jpg">
                    <div class="caption center-align">
                        <h1>Insertar titulo</h3>
                            <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Facilis suscipit odio, explicabo sapiente totam nesciunt.</h5>
                            <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/c_2.jpg">
                    <div class="caption left-align">
                        <h3>Insertar título</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/c_3.jpg">
                    <div class="caption right-align">
                        <h3>Insertar título</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
            </ul>
        </section>
    </header>
    <main>

    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        //Aqui se inicializan cada uno de los componentes que tendrá el sitio
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown({
            inDuration: 400,
            outDuration: 500,
            constrainWidth: true,
            hover: false,
            gutter: 5,
            belowOrigin: true,
            aligment: 'center',
            stopPropagation: true
        });
        $(document).ready(function () {
            $('.slider').slider();
        });
        //Este de aqui sirve para que se vaya mostrando el contenido poco a poco como el usuario se vaya desplazando
        var options = [{
                selector: '.class',
                offset: 200,
                callback: customCallbackFunc
            },
            {
                selector: '.other-class',
                offset: 200,
                callback: function () {
                    customCallbackFunc();
                }
            },
        ];
        Materialize.scrollFire(options);
    </script>
</body>

</html>
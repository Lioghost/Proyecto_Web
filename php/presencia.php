<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Presencia - America móvil</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>

  <header>
    <nav class="light-blue darken-4 nav-extended">
      <div class="nav-wrapper container nav">
        <a href="#" class="brand-logo">
          <img src="../img/logo.png" alt="">
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
          <li><a class="flow-text" href="../index.php">Inicio</a></li>
          <li><a class="dropdown-button flow-text" data-activates="Nosotros-d1" href="#">Nosotros <i class="material-icons">arrow_drop_down</i></a></li>
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
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col s10 l6 push-s1">
          <div class="card large">
            <div class="card-image">
              <img src="../img/claro1.png" width="342" height="342">
            </div>
            <div class="card-content">
              <h5>América Latina</h5>
              <p>Paises de America latina como Argentina, Brasil, Chile, Colombia, Costa Rica, Perú y muchos otros
                cuentan con servicios de nuestra compañia <i> CLARO</i>.</p>
            </div>
            <div class="card-action">
              <a href="https://www.claro.com/">CLARO</a>
            </div>
          </div>
        </div>
        <div class="col s10 l6 push-s1">
          <div class="card large">
            <div class="card-image">
              <img src="../img/Telmex1.jpg" width="342">
            </div>
            <div class="card-content">
              <h5>Norteamérica</h5>
              <p>En los países de México y Estados Unidos estamos presentes con nuestras compañías <i>Telcel</i> y
                <i>TracFone Wireless</i>.
              </p>
            </div>
            <div class="card-action">
              <a href="https://www.telcel.com/">TELCEL</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s10 l6 push-s1">
          <div class="card large">
            <div class="card-image">
              <img src="../img/a1telekom.jpg" width="342">
            </div>
            <div class="card-content">
              <h5>Europa</h5>
              <p>Nuestros servicios pueden ser encontrados en paises europeos por medio de nuestra compañía <i>A1
                  TELEKOM AUSTRIA GROUP</i>.</p>
              <p></p>
            </div>
            <div class="card-action">
              <a href="https://www.a1.group/">A1 TELEKOM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    $(document).ready(function() {
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
        callback: function() {
          customCallbackFunc();
        }
      },
    ];
    Materialize.scrollFire(options);
  </script>
</body>

</html>
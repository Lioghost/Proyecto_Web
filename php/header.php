<?php
    echo "
        <nav class='light-blue darken-4 nav-extended'>
            <divclass='nav-wrapper container nav'>
                <a href='#' class='brand-logo'>
                    <img src='../img/logo.png'>
                </a>
                <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
                <ul id='nav-mobile' class='right hide-on-med-and-down'>
                    <li><a class='flow-text' href='index.html'>Inicio</a></li>
                    <li><a class='dropdown-button flow-text' data-activates='Nosotros-d' href='#'>Nosotros</a></li>
                    <li><a class='btn white black-text waves-effect waves-grey' href='#'>Contacto</a></li>
                </ul>
                <ul class='side-nav' id='mobile-demo'>
                    <li><a class='flow-text' href='index.html'>Inicio</a></li>
                    <li><a class='dropdown-button flow-text' data-activates='Nosotros-d1' href='#'>Nosotros <i class='material-icons'>arrow_drop_down</i></a></li>
                    <li><a class='btn btn-large white black-text waves-effect waves-grey' href='#'>Contacto</a></li>
                </ul>

                <ul class='dropdown-content' id='Nosotros-d'>
                    <li><a href='presencia.html'><span class='grey-text text-darken-4'>Presencia</span></a></li>
                    <li><a href='#'><span class='grey-text text-darken-4'>Nuestra empresa</span></a></li>
                </ul>
                <ul class='dropdown-content' id='Nosotros-d1'>
                    <li><a href='presencia.html'><span class='grey-text text-darken-4'>Presencia</span></a></li>
                    <li><a href='#'><span class='grey-text text-darken-4'>Nuestra empresa</span></a></li>
                </ul>
            </div>
        </nav>
    ";
?>
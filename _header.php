<?php session_start(); ?>

<header>
    <!-- Encabezado (color + logo) -->
    <div class="py-2" style="background: #FFFFFF;">
        <div class="container">
            <center><a href="empleos_publico.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
        </div>
    </div>

    <!--------------------------------------------------- Barra de navegación -------------------------------------------------->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <div class="container">
            <span><a href="empleos_publico.php"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid" style="width: 150px; height: 65px;"></a></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse texto" id="main_nav">
                <ul class="navbar-nav mr-auto">
                    <!--Buscador-->
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search" style="border-radius: 50px;">
                            <button class="btn text-white btn-lg my-2 my-sm-0" type="submit" style="background: #95140A;  border-radius: 50px;">Buscar</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="register_user.php">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
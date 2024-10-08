<?php
        include 'db.php';

        
        $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 10";
        $result = $conn->query($sql);

?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../media/Aromas.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Aromas</title>
    <link rel="stylesheet" href="../css/lightslider.css?v=<?php echo time(); ?>">
    <!-- <script src="../js/jquery.js?v=<?php echo time(); ?>"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../js/lightslider.js?v=<?php echo time(); ?>"></script>
    
</head>
<body>
    


    <header>
        <div class="logo-y-menu">
        <a href="#" class="logo"><img src="../media/Aromas_sf.png" alt="" width="175px"></a>
        <i onclick="toggleMenu()" id="menu" class="ri-menu-line menu-icon"></i>
        <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">

                        <a href="#" class="sub-menu-link">
                            <i class="ri-user-3-line"></i>
                            <p>Cuenta</p>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-shopping-bag-4-line"></i>
                            <p>Carrito</p>
                            
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-heart-3-line"></i>
                            <p>Favoritos</p>
                            
                        </a>

                    </div>
                </div> 

        </div>

        <form class="search-bar" action="busqueda.php" method="GET"> 
            <div class="dropdown">
                <div id="drop-text" class="dropdown-text">
                    <span id="span">Categorias</span>
                    <i id="icon" class="ri-arrow-down-s-line"></i>
                </div>
                <ul id="list" class="dropdown-list">
                    <li class="dropdown-list-item">Todo</li>
                    <li class="dropdown-list-item">Fragancias</li>
                    <li class="dropdown-list-item">Maquillajes</li>
                    <li class="dropdown-list-item">Faciales</li>
                    <li class="dropdown-list-item">Capilares</li>
                    <li class="dropdown-list-item">Personales</li>
                    <li class="dropdown-list-item">Regalería</li>
                    <li class="dropdown-list-item">Hogar</li>
                    <li class="dropdown-list-item">Accesorios</li>
                </ul>
            </div>

            <div class="search-box">
                <input type="text" id="search-input" name="search" placeholder="Buscar">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
        </form>


        <nav>
            <ul>
                <li><i onclick="toggleMenu1()" class="ri-heart-3-line"></i></li>
                    

                <li><i onclick="toggleMenu2()" class="ri-shopping-bag-4-line"></i></li>
                

                <li><i onclick="toggleMenu3()" class="ri-user-3-line"></i></li>
                <!-- <div class="sub-menu-wrap" id="subMenu3">
                    <div class="sub-menu">
                        <div class="user-info">
                            <h3>Rodrigo Vera</h3>
                        </div>
                        <hr>

                        <a href="#" class="sub-menu-link">
                            <i class="ri-edit-line"></i>
                            <p>Editar perfil</p>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-settings-5-line"></i>
                            <p>Ajustes</p>
                            
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-question-line"></i>
                            <p>Ayuda</p>
                            
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="ri-logout-box-line"></i>
                            <p>Salir</p>
                            
                        </a>

                    </div>
                </div> -->

                
                
            </ul>
        </nav>
        
    </header>


    <main>

        
    <section class="ads">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item"><img src="../media/chanel_3_1920x480_1.jpg" alt="Image 1"></div>
                <div class="carousel-item"><img src="../media/notas.jpg" alt="Image 2"></div>
                <div class="carousel-item"><img src="../media/vita_hero-parfum-cps-solo_1200x300.webp" alt="Image 3"></div>
            </div>
        </div>
    </section>
        
    
    
    <section class="categorias">

        <h2>Nuestras categorias</h2>

        <div class="categorias-container">
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/perfume.png"
                        alt="logo Fragancias">
                    </div>
                 </a>
                <p>Fragancias</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/maquillaje.png"
                        alt="logo maquillajes">
                    </div>
                 </a>
                <p>Maquillajes</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/tratamiento-facial.png"
                        alt="logo faciales">
                    </div>
                 </a>
                <p>Faciales</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/tratamiento-capilar.png"
                        alt="logo capilares">
                    </div>
                 </a>
                <p>Capilares</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/articulos-de-aseo.png"
                        alt="logo personales">
                    </div>
                 </a>
                <p>Personales</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/regalos.png"
                        alt="logo regaleria">
                    </div>
                 </a>
                <p>Regalería</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/bateria-de-cocina.png"
                        alt="logo hogar">
                    </div>
                 </a>
                <p>Hogar</p>
            </div>
            <div class="categoria-separada">
                <a href="">
                    <div class="categoria-foto">
                        <img src="../media/accesorios.png"
                        alt="logo accesorios">
                    </div>
                 </a>
                <p>Accesorios</p>
            </div>


        </div>


    </section>



    <section class="productos">
        <h2>Algunos productos</h2>
        <ul id="autoWidth" class="cs-hidden">
            <?php
                while($row = $result->fetch_assoc()) {
                    $name = $row['nombre'];
                    $brand = $row['autor'];
                    $price = $row['precio'];
                    $image = $row['imagen'];
            ?>
            <li class="item">
                <a href="item.php?id=<?php echo $row['id']; ?>">
                <div class="box">

                    <div class="slide-img">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                    </div>

                    <div class="detail-box">
                        <h3><?php echo $name; ?></h3>
                        <h4><?php echo $brand; ?></h4>
                        <p>$<?php echo number_format($price, 0); ?></p>
                        
                    </div>
                </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </section>

    
    <section class="prestaciones">

        <div class="prestaciones-container">

            <div class="prestacion-separada" id="envio">
                <div class="prestacion-foto">
                    <img src="../media/enviado.png"
                    alt="logo envio">
                </div>
                <div class="prestacion-texto">
                <h3>Envio gratis</h3>
                <p>En compras superiores a $10.000</p>
                </div>
            </div>

            <div class="prestacion-separada" id="reembolso">
                <div class="prestacion-foto">
                    <img src="../media/reembolso2.png"
                    alt="logo reembolso">
                </div>
                <div class="prestacion-texto">
                <h3>14 dias de garantia</h3>
                <p>Por fallo de fabricacion</p>
                </div>
            </div>

            <div class="prestacion-separada" id="seguro">
                <div class="prestacion-foto">
                    <img src="../media/pago-seguro2+.png"
                    alt="logo seguro">
                </div>
                <div class="prestacion-texto">
                <h3>Pago seguro</h3>
                <p>Pagos 100% seguros</p>
                </div>
            </div>

            <div class="prestacion-separada" id="soporte">
                <div class="prestacion-foto">
                    <img src="../media/centro-de-llamadas.png"
                    alt="logo soporte">
                </div>
                <div class="prestacion-texto">
                <h3>Soporte 24/7</h3>
                <p>Soporte personalizado</p>
                </div>
            </div>

        </div>


    </section>







   


    </main>



    <footer>

        



    </footer>



    <script src="../js/index.js?v=<?php echo time(); ?>"></script>
    
</body>
</html>
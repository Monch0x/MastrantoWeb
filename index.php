<?php 

include "tienda/controlador/conexion.php";

$query_img_banner= mysqli_query($conection,"SELECT * from imagen_carrusel where carrusel='Banner_principal' order by posicion asc");
        
$result_img_banner= mysqli_num_rows($query_img_banner);

$query_img_banner_instagram= mysqli_query($conection,"SELECT * from imagen_carrusel where carrusel='banner_instagram' order by posicion asc");
        
$result_img_banner_instagram= mysqli_num_rows($query_img_banner_instagram);

?>

<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/ICON-mast.ico">
  <title>El Mastranto M&M</title>
  <!-- estilo menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style_menu.css">
  <!-- estilo carousel-->
  <link rel="stylesheet" href="css/style_carousel_franja.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- carrusel nuevo -->
  <link rel='stylesheet' href='css/slider-1.css'>
  <!--Estilo chatbot-->
<link rel="stylesheet" href="css/style-chatbot.css">
  <!--Cookies-->
<link rel='stylesheet' href='css/cookies.css'>
<!--Otros estilos-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- estilos slider aliados -->
<link rel="stylesheet" href="css/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="scroll scroll4">
  <div id="preloader">
    <div id="status"></div>
  </div>
<div id="inicio">.
</div> 
<header>
          <nav id="navigation">
              <!--div class="carrito flashy" style="left: 20px; width: 80px">

              <a href="#"><img  src="img/mini_mini_LOGO_EXPO_2024.webp"/></a>
            </div-->												
            <div class="logoimagen2">
              <img src="img/LOGO-MSDTRSNTO-PARA-WEB.webp"/>
              <!--img src="img/LOGO-ANIVERSARIO2.png"/-->
            </div>
            <div class="social_media">
              <a href="https://wa.me/584127010956" onClick="window.open(this.href); return false;"><img src="img/WHATS-ICON.png"/></a><a href="https://www.facebook.com/profile.php?id=100027942321467" onClick="window.open(this.href); return false;"><img src="img/FACE-ICON.png"/></a><a href="https://www.instagram.com/elmastrantomm/" onClick="window.open(this.href); return false;"><img src="img/IG-ICON.png"/></a>
            </div>
            <div class="icon_buscar" style="display: none;">
            <a><img src="img/BUSQUEDA-ICON.png"/></a>
            </div>
            <a aria-label="mobile menu" class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
              
            </a>
              <ul class="menu-left">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#quienes_somos_original">¿Quiénes Somos?</a></li>
                <li><a href="#conocenos">Conócenos</a></li>
                
                <div class="logoimagen1"> 
                    <img src="img/LOGO-MSDTRSNTO-PARA-WEB.webp"/>
                    <!--img src="img/LOGO-ANIVERSARIO2.png"/-->
                </div>
                  <li><a href="#aliados">Aliados</a></li>
                  <li><a href="#registrate">Regístrate</a></li>
                  <li class="li_contactanos_pc"><a href="#contactanos">Contáctanos</a></li>
                  <li class="li_contactanos_tlf"><a href="#contactanos_mobile">Contáctanos</a></li></br>
                  <li class="li_contactanos_tlf"><a href="tienda/"><img src="img/carrito-de-compras.png" height="100px" width="auto" style="background-color:white;border-radius: 50%;" /></a></li>
                  
              </ul>
            <div class="carrito flashy">
              <a href="tienda/"><img  src="img/carrito-de-compras.png"/></a>
            </div>  
            <div class="franja">
              <input class="azul" disabled><input class="verde" disabled><input class="naranja" disabled><input class="fuxia" disabled><input class="morado" disabled><input class="azul_oscuro" disabled>
            </div>
          </nav>
</header>

<input type="hidden">
<div id="victor" class="victor">
  <img src="img/victor2.png"/>
</div>
<div id="peekobot-container" class="ocultar-chatbot">
  <div id="peekobot-inner">
    <div id="peekobot"></div>
  </div>
  <button id="cerrar" class="cerrar">X</button>
</div>
<div id="cookie">
  <input type="checkbox" id="accept" />
  <span></span>
  <div id="btncookie" class="btn btn-success"><label for="accept">Entendido</label></div>
</div>
<!-----------------carrito logo mobil----------------------->
<div id="carritoM" style="position: fixed; top: 75px; right: 15px; z-index: 100001;">
  <a href="tienda/"><img src="img/carrito-de-compras.png" height="150px" width="auto" /></a>
</div>


<!--------------------------- modal trivia ------------------------------->

<div class="modal fade show" id="Promo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" aria-modal="true">
  <div id="modal-Promo" class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px !important; max-height: 500px !important;">
    <div class="modal-content" style="background-image: url(https://drogueriaelmastrantomm.com/img/INV_EXPO_POST_PARA_WEB.webp); background-size: contain; background-repeat: no-repeat; max-height: 500px !important;">
      <div class="modal-header" style="border-bottom: none !important;">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body modalaviso modalPromo" style="max-height: 500px; display: flex; justify-content: center;">
        <a href="https://experienciadrogueriamastranto.exposaludplus.com/" style="align-content: flex-end; padding-bottom: 20px;"><img src="https://drogueriaelmastrantomm.com/img/BOTON_EXPO_MASTRANTO_2024.webp" alt="" width="170"></a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  setTimeout(() => {  $("#Promo").modal("show");}, 5500);
</script>

<div style="width: calc(100vw-1px); margin-top: 100px;">
  <div><a href="https://experienciadrogueriamastranto.exposaludplus.com/"><img src="https://drogueriaelmastrantomm.com/img/BANNER_WEB-EXPO_MASTRANTO_2024.webp" alt="EXPOMASTRANTO" width="100%" height="100%"></a></div>
</div>

<section id="about" class="section-1era">

    <!------------------------------------------------  Carousel 2 (instagram)  --------------------------------------------------->


    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          
        <?php while($data_img_banner_instagram= mysqli_fetch_array($query_img_banner_instagram)){ ?>  

        <div class="carousel-item <?php if($data_img_banner_instagram['posicion']==0){?> active <?php } ?>">
          <img src="img/<?php echo $data_img_banner_instagram['ruta_img']; ?>" alt="" width="100" height="500">
          <div class="carousel-caption">
          <!--	<h3>Carousel 2</h3>  -->
          </div>
        </div>
        
        <?php } ?>
        
      </div>
      <!--Controles de indicadores-->
      <ol class="carousel-indicators">
          
        <?php for($i=0; $i<$result_img_banner_instagram;$i++){ ?>
          
        <li id="circulo-<?php echo $i;?>" data-target="#carousel1" data-slide-to="<?php echo $i;?>" <?php if($i==0){ ?>class="active" <?php } ?> ></li>
        

        <?php } ?>

      </ol> 
    </div>
  <div class="container">   
    <div class="container_carousel">
        
<!------------------------------------------------  Carousel 1 horizontal viejo  ------------------------------------------------

    --->
      <div class="swiper-container">
        <div class="swiper-wrapper" id="myWrapper">
            
        <?php while($data_img_banner= mysqli_fetch_array($query_img_banner)){ ?>
            
            <div class="swiper-slide">
              <img src="img/<?php echo $data_img_banner['ruta_img']; ?>" alt="">
            </div>
            
        <?php } ?>
            

            
      </div>
      <!-- Add Pagination -->
      <div class="cuadro_invisible"></div>
        <div class="swiper-pagination"></div>
    </div>      
    </div>
  </div> 
</section>
<!------------------------------------------------  Nosotros  --------------------------------------------------->
<div class="modal fade" id="historia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div id="modal-Historia" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Historia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modalaviso modalHistoria">
        <p>El Mastranto M&M nace en el año 2014 en el Estado Miranda, con la visión de formar parte de la cadena de comercialización con diferentes productos. En el año 2015, nuestra empresa da sus primeros pasos en el área de la salud, con la compra y venta de material médico quirúrgico, siendo proveedores de clínicas en los Altos Mirandinos y Caracas.</p>
        <p>En el año 2017 formaliza su constitución como droguería y comienza su andar en el camino de la distribución de productos farmacéuticos, en un contexto de país muy difícil pero convencidos de crecer en medio de la adversidad. Bajo esta premisa formamos un equipo de trabajo que con mucho compromiso y resiliencia, fue rompiendo paradigmas y evolucionando de un proyecto local a una empresa de distribución de productos farmacéuticos con alcance en todo el territorio nacional.</p>
        <p>Tuvimos un crecimiento continuo y para el año 2019, después de un trabajo incansable por parte del equipo de trabajo, iniciamos nuestra expansión en la zona sur occidente del país, llegando así a todos los rincones de este territorio, logrando abrir una nueva sede en el estado Barinas para cubrir la distribución de productos a todo el centro occidente del país.</p>
        <p>La empresa potenció su desarrollo con trabajo y esfuerzo de equipo y, para finales del año 2019, trasladamos nuestra sede principal a un espacio con mayor capacidad para ofrecer a nuestros clientes una mejor experiencia. Así, para el 2020 en nuestro afán de expansión comercial, obtuvimos el primer almacén físico.</p>
        <p>Hoy, 6 años después, en 2023, podemos decir con orgullo que Droguería El Mastranto M&M C.A. es una referencia en el mercado farmacéutico nacional, por ser uno de los principales distribuidores de medicamentos del país avalados por IMS, con más de 600 clientes a nivel nacional y un portafolio que supera los 1300 sku, con más de 110 aliados estratégicos entre los cuales están los Laboratorios Nacionales más importantes del país, Casas de Representación, fabricantes e importadores de material médico y de productos para el cuidado personal.</p>
        <p>Nuestro mayor orgullo es poder decir que lo que comenzó como un sueño, gracias a la visión, trabajo en equipo, constancia y a pesar de las adversidades, hoy es pilar de sostenibilidad y crecimiento para más de 200 personas entre empleos directos e indirectos. Nuestro compromiso sigue más fuerte que nunca, apostando por nuestro país, por su gente y porque sabemos que los años por venir serán testigos de cómo este grupo de soñadores siguen dando lo mejor para brindar, como dice nuestro lema: " Riqueza en Salud".</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<section id="quienes_somos_original">
  <div data-aos="zoom-out" class="titulo_quienes_somos">
    <h1 style="text-align: center;">¿Quiénes</h1>
    <h1 style="text-align: center;">Somos?</h1>
  </div>

  <div data-aos="zoom-out" class="titulo_quienes_somos_tlf">
    <h1 style="text-align: center;">¿Quiénes Somos?</h1>
  </div>

  <div id="conten">

      <div id="content-right">
        <div class="contain">
          <div class="item">
            <div id="historia" class="name">HISTORIA</div>
            <div class="quote">
              <p id="historia-p" class="historia_p">El Mastranto M&M nace en el año 2014 en el Estado Miranda con la visión de formar parte de la cadena de comercialización con diferentes productos. En el año 2015 nuestra empresa empieza a dar sus primeros pasos en el área de la salud, con la compra y venta de material médico quirúrgico, siendo proveedores de clínicas en los Altos Mirandinos y Caracas.</p>  
              <a data-toggle="modal" data-target="#historia" style="cursor: pointer;" class="vermas">Ver más</a>.
            </div>
          </div>
          <div class="item">
            <div class="name">MISIÓN</div>
            <div class="quote">
              <p class="mision_vision">Alcanzar altos sitiales de liderazgo en atención y servicio, con base en la satisfacción y experiencia de nuestros clientes, ofreciendo un portafolio con una gran variedad de medicamentos e insumos médicos de excelente calidad; contando con el mejor recurso humano centrado en ofrecer productos y servicios a nuestros aliados comerciales a través de estrategias ajustadas a sus necesidades, con trato personalizado y cumpliendo las mejores prácticas y normativas vigentes.</p>
            </div>
          </div>
          <div class="item">
            <div class="name">VISIÓN</div>
            <div class="quote">
              <p class="mision_vision">Consolidarnos como empresa líder en la comercialización y distribución de medicamentos e insumos médicos dentro del mercado farmacéutico nacional, ofreciendo productos de excelente calidad, comprometidos con el cliente para brindarles soluciones integrales e innovadoras con eficiencia y responsabilidad; siendo reconocidos dentro del ámbito farmacéutico por el cumplimiento de estrictos estándares y buenas prácticas de calidad.</p>
            </div>
          </div>
          <div class="item">
            <div class="name">VALORES</div>
            <div class="quote">
              <p class="mision_vision" style="text-indent:0px;">Integridad<br>Excelencia<br>Compromiso<br>Responsabilidad<br>Valentía<br>Innovación<br>Trabajo en equipo<br>Pasión</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</section>




<!------------------------------------------------  Conocenos  --------------------------------------------------->


<section id="conocenos" class="uk-height-large uk-background-cover uk-light encabezado" uk-parallax="bgy: -140" style="background-image: url(img/fondo-parallax.jpg);">
 
  <div class="texto-6años"><h3 class="texto-negro">Somos una empresa con <span class="texto-azul">7 años</span><br>de experiencia en la industria farmacéutica</h3></div>
  <div id="conocenos-container" class="container" data-module="countup">
    <div class="cuadro">
    <div class="cuadros">
      <div data-aos="flip-left">

      <span>Damos lo mejor de cada uno, para lograr nuestros objetivos y superar las <strong>expectativas.</strong></span>
    </div>
    </div>
    <div class="cuadros">
      <div data-aos="flip-left">
        <span>Contamos con <strong>despacho a nivel nacional.</strong></span></div>
    </div>
    <div class="cuadros">
      <div data-aos="flip-left">
        <span>Posicionados dentro de las droguerías mas importantes <strong>según IMS.</strong></span></div>
    </div>
    <div class="cuadros">
      <div data-aos="flip-up">
      <span><strong>+ de <span  data-countup-number="1100">1100</span> clientes <br>activos </strong> a nivel nacional.</span>
    </div></div>
    <div class="cuadros">
      <div data-aos="flip-up">
      <span><strong>+ de <span  data-countup-number="1300">1300</span> productos</strong><br>disponible en nuestro portafolio.</span>
    </div></div>
    <div class="cuadros">
      <div data-aos="flip-up">
      <span>Con + de <strong><span  data-countup-number="110">110</span> aliados comerciales</strong></span></div>
    </div>
  </div>
  </div>
</section>
<!------------------------------------------------  publicidad  --------------------------------------------------->
<div style="height: 30px;"></div><!--separador-->

<div style="width: 98vw; height: fit-content; overflow: hidden;">
  <div style="margin-left: 11%; width: 80%; border-radius: 20px; overflow: hidden; border-style: solid; border-color: #022d7c; background-color: black;">
  <video width="100%" height="100%" controls preload="metadata">
    <source src="./img/video/Shia_Farmacia_Horizontal_2.mp4" type="video/mp4">
  </video>
  </div>
  <!--iframe width="80%" height="100%" src="https://www.youtube.com/embed/HZT1TOYIveU?si=fRy1cew95VPSv8IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe-->
</div>

<section id="publicidad">
  <div class="container">
      
  <h1></h1>
    <div class="publicidades">
      <div class="publicidadizq">
        <a href="https://www.alfafarmaceuticacr.com/" style="display:block;height:32vh;">
        </a>
      </div>
      <div class="publicidadder">
        
      </div>
    </div>
  </div>
</section>


<!------------------------------------------------  Aliados  --------------------------------------------------->
<section id="aliados">
  <div data-aos="zoom-out">
    <h1 style="text-align: center; margin-bottom: 60px;">Nuestros Aliados</h1></div>
    <div class="main">
      <div class="slider slider-for">
        <div><h3>1</h3></div>
        <div><h3>2</h3></div>
        <div><h3>3</h3></div>
        <div><h3>4</h3></div>
        <div><h3>5</h3></div>
        <div><h3>6</h3></div>
        <div><h3>7</h3></div>
        <div><h3>9</h3></div>
        <div><h3>10</h3></div>
        <div><h3>11</h3></div>
        <div><h3>12</h3></div>
        <div><h3>13</h3></div>
        <div><h3>14</h3></div>
        <div><h3>15</h3></div>
        <div><h3>16</h3></div>
        <div><h3>17</h3></div>
        <div><h3>18</h3></div>
        <div><h3>19</h3></div>
        <div><h3>20</h3></div>
        <div><h3>21</h3></div>
        <div><h3>22</h3></div>
        <div><h3>23</h3></div>
        <div><h3>24</h3></div>
        <div><h3>25</h3></div>
        <div><h3>26</h3></div>
        <div><h3>27</h3></div>
        <div><h3>28</h3></div>
        <div><h3>29</h3></div>
        <div><h3>30</h3></div>
        <div><h3>31</h3></div>
        <div><h3>32</h3></div>
        <div><h3>33</h3></div>
        <div><h3>34</h3></div>
        <div><h3>35</h3></div>
        <div><h3>36</h3></div>
        <div><h3>37</h3></div>

      </div>
      <div class="slider slider-nav">
      
        <div><button type="button" class="" data-toggle="modal" data-target="#lab1"><img src="./img/Laboratorios/56.png" alt=""></button></div><!--ALFA MEDICAL-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab2"><img src="./img/Laboratorios/58.png" alt=""></button></div><!--ARTE - MEDICO-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab3"><img src="./img/Laboratorios/bacc.png" alt="BACC"></button></div><!--BACC-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab4"><img src="./img/Laboratorios/beherens.png" alt=""></button></div><!--BEHRENS-------->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab5"><img src="./img/Laboratorios/62.png" alt=""></button></div><!--BRIXMEDIC-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab6"><img src="./img/Laboratorios/brupharm.png" alt=""></button></div><!--BRUPHARM-------->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab7"><img src="./img/Laboratorios/63.png" alt=""></button></div><!--CALOX-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab9"><img src="./img/Laboratorios/64.png" alt=""></button></div><!--CCM-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab10"><img src="./img/Laboratorios/2.png" alt=""></button></div><!--COFASA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab11"><img src="./img/Laboratorios/68.png" alt=""></button></div><!--DISTRILAB-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab12"><img src="./img/Laboratorios/69.png" alt=""></button></div><!--DOLLDER-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab13"><img src="./img/Laboratorios/43.png" alt=""></button></div><!--FAHD-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab14"><img src="./img/Laboratorios/42.png" alt=""></button></div><!--FARMA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab15"><img src="./img/Laboratorios/40.png" alt=""></button></div><!--FC PHARMA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab16"><img src="./img/Laboratorios/6.png" alt=""></button></div><!--HB HUMAN-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab17"><img src="./img/Laboratorios/megalabs.png" alt="MEGALABS"></button></div><!--KLINOS------------->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab18"><img src="./img/Laboratorios/pharmatique.png" alt="PHARMETIQUE"></button></div><!--LA SANTE O PHARMETIQUE-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab19"><img src="./img/Laboratorios/26.png" alt=""></button></div><!--LETI-GENVEN-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab20"><img src="./img/Laboratorios/lubrix.png" alt="LUBRIX"></button></div><!--LUBRIX---------->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab21"><img src="./img/Laboratorios/13.png" alt=""></button></div><!--MEYER-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab22"><img src="./img/Laboratorios/12.png" alt=""></button></div><!--MULTILENTE-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab23"><img src="./img/Laboratorios/11.png" alt=""></button></div><!--NOW-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab24"><img src="./img/Laboratorios/oftalmi.png" alt=""></button></div><!--OFTALMI------------->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab25"><img src="./img/Laboratorios/5.png" alt=""></button></div><!--P&G-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab27"><img src="./img/Laboratorios/pharsana.png" alt="PHARSANA"></button></div><!--PHARSANA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab28"><img src="./img/Laboratorios/9.png" alt=""></button></div><!--PLUS ANDES-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab29"><img src="./img/Laboratorios/logos.png" alt=""></button></div><!--PONCE & BENZO-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab30"><img src="./img/Laboratorios/8.png" alt=""></button></div><!--PORTUGAL-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab31"><img src="./img/Laboratorios/4.png" alt=""></button></div><!--ROLDA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab32"><img src="./img/Laboratorios/500.png" alt=""></button></div><!--RONAVA-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab33"><img src="./img/Laboratorios/300.png" alt=""></button></div><!--SANOZ-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab34"><img src="./img/Laboratorios/200.png" alt=""></button></div><!--VALMOR-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab35"><img src="./img/Laboratorios/48.png" alt=""></button></div><!--VARGAS-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab36"><img src="./img/Laboratorios/49.png" alt=""></button></div><!--VINCENTI-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab37"><img src="./img/Laboratorios/50.png" alt=""></button></div><!--VIVAX-->
        <div><button type="button" class="" data-toggle="modal" data-target="#lab38"><img src="./img/Laboratorios/LYA.png" alt=""></button></div><!--LYA-->
      </div>  
    </div>
<div class="descargar_listado">

  <a href="https://drive.google.com/drive/folders/1vY31J6lKLMGURF9O2HjR3-PffcFeYac9?usp=sharing" onclick="window.open(this.href); return false;" class="btn_descargar"><img src="img/BOTON-DESCARGA.png" alt=""></a>
</div>  
</section>

<!--------------------- Modales -------------------------->


    <!--MODAL 1 ALFA MEDICAL-->
    <div class="modal fade" id="lab1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/56.png" alt="">
                </div>           
                <ul>

                  <li>ACETATO DE DEXAMENTASONA & CLOTRIMAZOL 1% X20G</li>
                  <li>BUDESONIDA SUSP INH 0,5% FRASCO 2ML</li>
                  <li>METILPREDNISOLONA 500 MG  IM/IV AMP</li>
                  <li>OXCARBAZEPINA 300 MG X 30 TAB</li>
                  <li>OXCARBAZEPINA 600 MG X 30 TAB</li>
                  <li>SALMETEROL + FLUTICASONA 25 MG /250 MG X 120 DOSIS </li>
                  <li>SULTAMICILINA 375MG X 10TAB</li>
                  <li>SULTAMICILINA 750MG X 10TAB</li>
                  <li>TETRACICLINA 500 MG X 30 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!--MODAL 2 ARTE - MEDICO-->
    <div class="modal fade" id="lab2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/58.png" alt="">
                </div>           
                <ul>

                  <li>AMLODIPINA 10 MG X10 TAB</li>
                  <li>AMLODIPINA 5 MG X30 TAB</li>
                  <li>AMOXICILINA 500 MG X 10 CAP</li>
                  <li>AMOXICILINA 875MG/ACIDO CLAVULANICO 125 MG X 10 COMP </li>
                  <li>ATENOLOL 50 MG X 10 TAB</li>
                  <li>ATENOLOL 50 MG X 20 TAB</li>
                  <li>ATENOLOL 50 MG X 30 TAB</li>
                  <li>ATORVASTATINA 20 MG X 10 TAB</li>
                  <li>AZITROMICINA 500 mg X 5 COMP</li>
                  <li>BETAHISTINA 16MG X 10 TAB</li>
                  <li>BETAMETASONA + CLOTRIMAZOL + NEOMICINA CREMA 15 GR</li>
                  <li>BISACODYL 5 MG X 10 TAB</li>
                  <li>BREMOL NAPROXENO / PARACETAMOL 275MG/300MG X 15 CAP</li>
                  <li>CARBAMAZEPINA 200 MG X10 TAB</li>
                  <li>CASPHARMA SENOSIDOS A-B 8,6 MG X 20  COMP</li>
                  <li>CIPROFLOXACINA 500 MG X 10 TAB</li>
                  <li>CLOBETASOL 0,05% + NEOMICINA 0,5% + MICONAZOL 2% CREMA</li>
                  <li>CLOBETASOL CREMA 25GR</li>
                  <li>CLOPIDROGREL 75 MG X 10 TAB</li>
                  <li>CLOTRIMAZOL 1% CREMA VAGINAL X 30G </li>
                  <li>DICLOFENAC POT 50 MG + ACETAMINOFEN 500 MG X 10 TAB</li>
                  <li>DICLOFENAC POTASICO 50 MG X 10 TAB</li>
                  <li>DICLOFENAC POTASICO 50 MG X 20 TBL</li>
                  <li>DIOSMINA 600 MG X 10 COMP</li>
                  <li>DIOSMINA 600 MG X 15 TAB</li>
                  <li>ELECTRO C ZINC X 6 SOBRES 5,6G SUERO HIDRATANTE</li>
                  <li>ELECTROLITE CAJA X 10 SOBRES 21 G</li>
                  <li>ENALAPRIL 10 MG X 10 TAB </li>
                  <li>ENALAPRIL 10 MG X 30 TAB </li>
                  <li>ENALAPRIL 20 MG X 10 TAB </li>
                  <li>ENALAPRIL 20 MG X 30 TAB </li>
                  <li>ESLISTICA BROMURO DE PINAVERIO 100 MG X 14 TAB</li>
                  <li>ESOMEPRAZOL 40 MG X 10  TAB</li>
                  <li>FEXOFENADINA 120 MG X 10 TAB</li>
                  <li>FLUCONAZOL 150 MG X 2 CAP</li>
                  <li>HIERRO DEXTRANO 100MG/2 ML </li>
                  <li>IBUPROFENO 400 MG X 10 TAB</li>
                  <li>IBUPROFENO 400 MG X 20 TAB</li>
                  <li>ITRACONAZOL 100 MG X 10 CAP</li>
                  <li>KETOROLAC 10 MG X 10 TAB</li>
                  <li>LEBELLA (DROSPIRENONA 3mg+ ETINILESTRADIOL 0.03mg) X 21 COMP   </li>
                  <li>LEVOFLOXACINA 500MG X 10 TAB</li>
                  <li>LORATADINA 10 MG X 10 TAB</li>
                  <li>MELOXICAM 15 MG X 20 TAB</li>
                  <li>METRONIDAZOL 500MG RISTRA DE 10 OVULOS VAGINAL</li>
                  <li>MOXIFLOXACINA 400 MG X 10 TAB</li>
                  <li>NIFEDEPINA L.P 30 mg X 30 TBL</li>
                  <li>NIMESULIDE 100 MG  + PARACETAMOL 500 MG x 10 TAB</li>
                  <li>NIMESULIDE 100 MG X 15 TAB</li>
                  <li>NOVALI CLORHIDRATO DE LECARDIPINO 10 MG X 30 TAB</li>
                  <li>OMEPRAZOL 20 MG X 15 CAP</li>
                  <li>PREDNISONA 15 MG 5ML SOL ORAL X 100 ML</li>
                  <li>PROGESTEL (PROGESTERONA) 200MG  X 30 TAB</li>
                  <li>REMICITAL CITALOPRAM 20 MG X 15 TAB</li>
                  <li>SERTRALINA 50 MG X 10 TAB</li>
                  <li>SILDENAFIL 50 MG X 4TAB</li>
                  <li>TAMSULOSINA 0,4MG X 10 TAB</li>
                  <li>TOBRAMICINA 0.3%+DEXAMETASONA 0.1% X 5 ML </li>
                  <li>TYPIREC ANTIGRIPAL 4 EN 1 X 10 TAB </li>
                  <li>ULTRA ANTIFLAT FRESAX 20 COMP</li>
                  <li>VIDAMIL VITAMINA A, C, D FRASCO X 15 ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 3 BACC-->
    <div class="modal fade" id="lab3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/bacc.png" alt="">
                </div>           
                <ul>

                  <li>CREMA DEPILATORIA CORPORAL PIEL SENSIBLE X 150 ML </li>
                  <li>EXFOLIANTE SAL DEL HIMALAYA X 300ML</li>
                  <li>GEL CORPORAL EXTRACTO DE COCO Y ACEITE DE ARGAN X 400 ML</li>
                  <li>LOCION PARA CARA Y CUERPO ALE VERA + VIT C X 320ML</li>
                  <li>MASCARA FACIAL ANTIEDAD POLVO DE ORO Y COLAGENO X UNIDAD</li>
                  <li>MASCARA FACIAL CITRICA RADIANTE X 1 UNIDAD</li>
                  <li>MASCARA FACIAL NEGRA HIDROGEL X 35 ML</li>
                  <li>MASCARA NUTRITIVA ACIDO HYALURONICO X UNIDAD</li>
                  <li>MASCARILLA CAPILAR DE OLIVA Y AGUACATE X 550GR</li>
                  <li>MASCARILLA FACIAL ALOE VERA </li>
                  <li>MASCARILLA FACIAL COCO Y ACEITE DE ARGAN X UNIDAD</li>
                  <li>MASCARILLA FACIAL FRESA Y YOGURT X UNIDAD</li>
                  <li>MASCARILLA FACIAL NEGRA BURBUJA O2 X UNIDAD</li>
                  <li>MASCARILLA FACIAL PEPINO X UNIDAD</li>
                  <li>MASCARILLA NUTRITIVA CENTELLA ASIATICA Y MANZANILLA</li>
                  <li>PEEL - OFF MASCARA FACIAL ORO Y BIO COLAGENO X 100 ML</li>
                  <li>PEEL - OFF MASCARA NEGRA FACIAL CARBON X 100 ML</li>
                  <li>SERUM REPARADOR X 30 ML </li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 4 BEHRENS-->
    <div class="modal fade" id="lab4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/beherens.png" alt="">
                </div>           
                <ul>

                  <li>BACTRIZOL 500MG/100ML </li>
                  <li>CIFARCAINA 1% SOL X 100ML</li>
                  <li>CIPROQUIN 200MG/100ML FRASCO</li>
                  <li>CIPROQUIN 400MG/200ML FRASCO*</li>
                  <li>EDEMID (FUROSEMIDA) 10mg/ml  2ml  X 5 AMP</li>
                  <li>GLUCONATO DE CALCIO 10% SOL FRASCO X 100ML</li>
                  <li>LEVOTEC  750 MG / 150 ML (LEVOFLOXACINA)</li>
                  <li>NUTRAMIN 8,5% SOL FV 500ML </li>
                  <li>POLIAMIN 10% FRASCO X 500ML</li>
                  <li>REDUGRAS  500 MG  X 30 CAPS </li>
                  <li>REHIDROSOL  ZINC  MANZANA  X 600 ML </li>
                  <li>REHIDROSOL  ZINC UVA   X 600ML</li>
                  <li>REHIDROSOL FRAMBUESA X 600ML</li>
                  <li>REHIDROSOL FRESA X 600ML</li>
                  <li>REHIDROSOL MANZANA X 600ML</li>
                  <li>REHIDROSOL UVA X 600ML</li>
                  <li>SOLUCION CLORURO DE SODIO 20% FRASCO X 100ML</li>
                  <li>SOLUCION N° 49 AGUA DESTILADA FR X 500ML</li>
                  <li>SOLUCION N°29 DEXTRO-SAL 0,45% SOL FB 500 ML </li>
                  <li>SOLUCION N°38 MANITOL AL 18% SOL FB 500 ML</li>
                  <li>SOLUCION N°4 DEXTROSA 5%  SOL FISIOLOGICA FRASCO X 500ML*</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 5 BRIXMEDIC-->
    <div class="modal fade" id="lab5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/62.png" alt="">
                </div>           
                <ul>

                  <li>ACETAMINOFEN + CLORFENAMINA 500MG /4 MG  X 10 TAB BLISTER </li>
                  <li>ACICLOVIR 400 MG X  10 TAB (BLISTER)</li>
                  <li>AMIKACINA 500 ,G / 2ML  IM. IV AMP</li>
                  <li>AMINOFILINA 250MG/10ML AMP</li>
                  <li>AMLODIPINA 10 MG BLISTER X 10 TAB</li>
                  <li>AMLODIPINA 5 MG BLISTER X 10 TAB</li>
                  <li>ATENOLOL 100MG X14 TAB (BLISTER)</li>
                  <li>ATENOLOL 50MG X10 TAB (BLISTER)</li>
                  <li>ATORVASTATINA 20 MG BLISTER X 10 TAB</li>
                  <li>ATORVASTATINA 40 MG BLISTER X 10 TAB</li>
                  <li>AZITROMICINA 500 MG X 3 TAB</li>
                  <li>BRIXFLU (ACETAMINOFEN/CLORFENIRAMINA) X 120 ml JRB</li>
                  <li>BURETA DE  INFUSION 150 ML </li>
                  <li>CARVEDILOL 12,5MG BLISTER X 10 TAB</li>
                  <li>CETIRIZINA 10 MG X 10 TAB BLISTER</li>
                  <li>CITICOLINA 500 mg X 10 TAB</li>
                  <li>COLISTIMETATO SODICO BP 1,000,000 UI / 1 MIU POLVO </li>
                  <li>CREMA PARA HEMORROIDES CON APLICADOR </li>
                  <li>DICLOFENAC POTASICO 100 MG X 10 TAB BLISTER</li>
                  <li>DICLOFENAC POTASICO 50 MG X 10 TAB BLISTER</li>
                  <li>DICLOFENAC SODICO 75 MG/3 ML AMP</li>
                  <li>DIGOXINA 0,25 MG X 10 TAB BLISTER</li>
                  <li>DOLOBRIX (ACTAMNINOFEN +CAFEINA +ERGO BLISTER</li>
                  <li>DOXICICLINA 100MG X 10 CAP  (BLISTER)</li>
                  <li>ERBRIX - 50 SILDENAFIL 50 MG 4 TAB</li>
                  <li>FUROSEMIDA 40 MG X 10 TAB BLISTER </li>
                  <li>GASA X ROLLO 100 YARDAS</li>
                  <li>GLIMEPIRIDA 2 MG X 10 TAB BLISTER </li>
                  <li>GLIMEPIRIDA 4 MG X 10 TAB BLISTER </li>
                  <li>GUANTES DE EXAMEN DE NITRILO TALLA L</li>
                  <li>GUANTES DE EXAMEN DE NITRILO TALLA M</li>
                  <li>HIDROCLOROTIAZIDA 25 MG BLISTER X 10 TAB</li>
                  <li>IRBESARTAN 150 MG X 10 TAB BLISTER</li>
                  <li>IRBESARTAN 300 MG X 10 TAB BLISTER</li>
                  <li>LIDOCAINA  5 % TUBO X 30 GR</li>
                  <li>LIDOCAINA CLORIDRATO INYECCION USP 200MG / 10 ML 2,0% </li>
                  <li>LIDOCAINA CLORIDRATO INYECCION USP 400MG / 20 ML 2,0% </li>
                  <li>LIDOCAINA CLORIDRATO INYECCION USP 40MG/2ML 2,0% </li>
                  <li>LISINOPRIL 10 MG X 10 TAB BLISTER</li>
                  <li>LOSARTAN POTASICO 100 MG X 10 TAB</li>
                  <li>LOSARTAN POTASICO 50 MG X 10 TAB</li>
                  <li>MEBENDAZOL SUSPENSIÓN ORAL 100MG /5 ML </li>
                  <li>MELATONINA 3 MG + VIT B6 10 MG X 60 CAP</li>
                  <li>MONTELUKAST 10 MG X10 TAB BLISTER </li>
                  <li>PORTOVAC CON RESORTE 1/8</li>
                  <li>ROSUVASTATINA 10 MG X 10 TAB BLISTER</li>
                  <li>ROSUVASTATINA 20 MG X 10 TAB BLISTER</li>
                  <li>SALES DE REHIDRATACION ORAL SOBRE X 20,5 GR</li>
                  <li>SIMVASTATINA USP 40 MG C10 TAB BLISTER </li>
                  <li>SULFADIAZINA DE PLATA 1% 500 GR</li>
                  <li>SUTURA NYLON 3,0 CAJA X 12</li>
                  <li>SUTURA VICRYL 3,0 CAJA X 12</li>
                  <li>TENSIOMETRO AUTOMATICO DIGITAL </li>
                  <li>VITAMINA B  IV 10 ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 6 BRUPHARM-->
    <div class="modal fade" id="lab6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/brupharm.png" alt="">
                </div>           
                <ul>

                  <li>BRUCEN ADULTCARE BODY LOTION X 250ML</li>
                  <li>BRUCEN ADULTCARE BODY LOTION X 400ML</li>
                  <li>BRUCEN ADULTCARE CREMA DERMOPROTECTORA PARA ADULTOS X 100GR</li>
                  <li>BRUCEN ADULTCARE CREMA DERMORESTAURADORA CENTELLA ASIATICA X 30GR</li>
                  <li>BRUCEN ANTI- ACNE GEL HIDRATANTE PIELES GRASAS 120 ML</li>
                  <li>BRUCEN CREMA DE MANOS SPF COLAGENO  50 GR</li>
                  <li>BRUCEN CREMA DE MANOS SPF VITAMINA E 50 GR</li>
                  <li>BRUCEN CREMA NUTRITIVA RESTAURADORA X 80GR</li>
                  <li>BRUCEN ENJUAGUE BUCAL COOL MINT X 250ML</li>
                  <li>BRUCEN ENJUAGUE BUCAL HIERBABUENA X 250ML</li>
                  <li>BRUCEN ENJUAGUE BUCAL MENTA X 250ML</li>
                  <li>BRUCEN GEL CREMA ACTIANE 20 GR</li>
                  <li>BRUCEN GEL HIDRATANTE PARA PIELES GRASAS HYDRO 120 ML</li>
                  <li>BRUCEN HYDRO BODY LOTION 250 ML </li>
                  <li>BRUCEN HYDRO BODY LOTION 400ML</li>
                  <li>BRUCEN PANTALLA SOLAR CUERPO X 100GR</li>
                  <li>BRUCEN PANTALLA SOLAR PARA ROSTRO Y CUELLO X 50GR</li>
                  <li>BRUCEN PSO SKIN GEL LIMPIADOR CORPORAL X 250 ml</li>
                  <li>BRUCEN PSO SKIN SYNDET UREA 12% GEL LIMPIADOR CAPILAR X 400ML</li>
                  <li>BRUCEN PSO SKIN UREA 12% CREMA CORPORAL EMOLIENTE 250ML</li>
                  <li>BRUCEN SYNDET LOCION LIMP. FACIAL ANTI ACNE 120ML</li>
                  <li>BRUCENTIN PANTALLA SOLAR PARA EL CUERPO X 80GR</li>
                  <li>BRUCETIN BODY LOTION X 200ML</li>
                  <li>BRUCETIN CREMA DERMOPROTCTORA PARA NIÑOS X 50GR</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 7 CALOX-->
    <div class="modal fade" id="lab7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/63.png" alt="">
                </div>           
                <ul>

                  <li>ALBENDAZOL 200MG X 2 TAB MAST SABOR TUTTI FRUTI</li>
                  <li>AMLODIPINA 10MG X 10 COMP</li>
                  <li>AMLODIPINA 5MG X 10 COMP</li>
                  <li>ATAMEL FORTE  650MG X 10 TAB</li>
                  <li>AZITROMICINA 500MG X 3 TAB</li>
                  <li>BLOKXA (RIVAROXABAN) 10 MG X 14 TAB</li>
                  <li>BLOKXA (RIVAROXABAN) 20 MG X 14 TAB</li>
                  <li>CALOXPIRINA 81MG X 30 TAB</li>
                  <li>CAPTOPRIL 25 MG X 30 CAP</li>
                  <li>CAPTOPRIL 50MG X 10 TAB</li>
                  <li>CAPTOPRIL 50MG X 30 TAB</li>
                  <li>CARVEDILOL 25MG X 14 TAB </li>
                  <li>CEFADROXILO 500MG X 12 CAP</li>
                  <li>DEFLAZACORT 30MG X 10 TAB</li>
                  <li>DEFLAZACORT 6MG X 10 TAB</li>
                  <li>DESLORATADINA 5MG X 10 TAB</li>
                  <li>DICLOFENAC POTASICO 50MG X 20 TAB</li>
                  <li>DICLOFENAC SODICO 50MG X 30 TAB</li>
                  <li>DOL 450MG DISPENSADOR 20 BLISTER X 4 TAB</li>
                  <li>DOL 450MG-40MG-1MG X 10 TAB</li>
                  <li>DOL 450MG-40MG-1MG X 20 TAB</li>
                  <li>DOL GRIP D x 10 TAB</li>
                  <li>DOL KIDS 160mg x 20TAB. MAST</li>
                  <li>DOL PLUS DISPENSADOR 20 BLISTER X 4 TAB</li>
                  <li>DOL PLUS X 10 TAB</li>
                  <li>DOLGRIP X 10 TAB</li>
                  <li>DOMPERIDONA 10MG X 15 TAB</li>
                  <li>DOSPROL 10MG X 30 TAB</li>
                  <li>FESTAL DISPENSADOR 25 BLISTER X 4 GRAGEAS</li>
                  <li>FEXOFENADINA 120MG X 10 TAB</li>
                  <li>FINASTERIDE 5MG X 10 TAB</li>
                  <li>GABAPENTINA 300MG X 20 TAB</li>
                  <li>HEXOMEDINE COLUTORIO AEROSOL 30GR</li>
                  <li>IBUCAF 200-30MG X 10 TAB</li>
                  <li>IBUPROFENO + TIOCOLCHICOSIDO 400/4MG X 10 TAB</li>
                  <li>IRBESARTAN 150MG X 7 TAB</li>
                  <li>KETOPROFENO 100MG X 10 CAP</li>
                  <li>LANSOPRAZOL 30MG X 14 TAB</li>
                  <li>LANSOPRAZOL 30MG X 28 TAB</li>
                  <li>LEVOCETIRIZINA 5MG X 10 TAB</li>
                  <li>LEVOFLOXACINO 750MG X 5 TAB</li>
                  <li>LORATADINA 10MG X 10 TAB</li>
                  <li>PINAVERIUM BROMURO  50MG  X 20 TAB</li>
                  <li>PREDNISONA 50MG X 10 TAB</li>
                  <li>PREDNISONA 5MG X 10 TAB</li>
                  <li>SECNIDAZOL 1GR X 2 COMP</li>
                  <li>SERTRALINA 50MG X 10 TAB</li>
                  <li>SIMVASTATINA 40MG X 10 TAB</li>
                  <li>TADALAFIL 20MG X 1 TAB</li>
                  <li>TADALAFIL 20MG X 2 TAB</li>
                  <li>VALSARTAN + HCT 80MG/12,5MG X 14 TAB</li>
                  <li>VIAJESAN 50MG X 10 TAB*</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 8 CAPLIN POINT-->
    <div class="modal fade" id="lab8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/44.png" alt="">
                </div>           
                <ul>

                  <li>ACIDO ACETILSALICILICO 100 MG X 10 TAB (BLISTER)</li>
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 9 CCM-->
    <div class="modal fade" id="lab9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/64.png" alt="">
                </div>           
                <ul>

                  <li>ALOPURINOL 300 MG X 20 TAB</li>
                  <li>ANASTROZOL 1 MG X 28 TAB</li>
                  <li>ATOMOXETINA 25 MG X 14 CAP</li>
                  <li>ATOMOXETINA 40 MG X 14 CAP</li>
                  <li>BELARA ACETATO DE CLORMADINONA ETINILESTRADIOL 21 TAB COMP</li>
                  <li>CIALIS 5MG X 14 TAB COMPRIMIDA</li>
                  <li>CLIMABEL 2,5MG X 30 COMP</li>
                  <li>CYCLOFEM JERINGA PRELLENADA I.M. MEDROXIPROGESTERONA 25 MG CIPIONATO DE ESTRADIOL 5 MG </li>
                  <li>DEXAMETASONA 8 MG / 2ML X 1 AMP SOL INY</li>
                  <li>DICLOFENACO SOLUNCION INYECTABKE 75 MG/ 3 ML X 2 AMP</li>
                  <li>DIVINALT 21 COMP</li>
                  <li>DROSPERA 28 COMP</li>
                  <li>FENITOINA SODICA 100 MG X 50 TAB</li>
                  <li>GYNOTRAN CREMA VAGINAL 40 G</li>
                  <li>GYNOTRAN X 7 OVULOS </li>
                  <li>KETOROLACO 10 G X 10 TAB</li>
                  <li>LAMOTRIGINA 100 MG X 28 CAP</li>
                  <li>LANTUS VIAL 100UI/ ML 10 ML</li>
                  <li>LEVODOPA - CARBIDOPA PF 250 MG / 25 MG X 10 TAB</li>
                  <li>LEVODOPA - CARBIDOPA PF 250 MG / 25 MG X 30 TAB</li>
                  <li>LEVOFLOXACINO 500 MG X 7 TAB </li>
                  <li>LOSARTAN 50 MG X 30 TAB</li>
                  <li>LOSIL C 888G / 20 G</li>
                  <li>LOSIL S 888G / 30 ML</li>
                  <li>METFORMINA 850 X 30 COM</li>
                  <li>METRONIDAZOL 250 MG / 5 ML SUSP.X 120 ML </li>
                  <li>METRONIDAZOL 500MG X 30 TAB</li>
                  <li>OBBIAT DIENOGEST 2 MG / ETINILESTRADIOL 0,03MG X 21 COM</li>
                  <li>OLANZAPINA 5 MG X 14 TAB</li>
                  <li>PENTOXIFILINA 400MG X 30 TAB</li>
                  <li>PLANIFERT 2MG / 0,03MG COMP REC X 21 TAB</li>
                  <li>PREDNISONA 5 MG X 20 TAB</li>
                  <li>RISPERIDONA 2MG X 20 TAB</li>
                  <li>SLINDA 4 MG X 28 COMP</li>
                  <li>STRATTERA 25 MG X 14 CAP ATOMOXETINA</li>
                  <li>STRATTERA 40 MG X 14 CAP ATOMOXETINA</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 10 COFASA-->
    <div class="modal fade" id="lab10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/2.png" alt="">
                </div>           
                <ul>

                  <li>ACETAMINOFEN 120MG/5ML X 120ML JARABE</li>
                  <li>AEROFLAT 125 MG X 30 CAP</li>
                  <li>AEROFLAT 80MG/ML SUSP ORAL GOTAS X 20ML</li>
                  <li>AIRFEN 0,025% SOL PEDIATRICA X 15ML</li>
                  <li>AIRFEN 0,05% SOL ADULTO X 15ML</li>
                  <li>BENCIDAMINA CLORHIDRATO 0.15% SOLUCION TOPICA BUCAL</li>
                  <li>BREXIN 100MG / ML SOL ORAL GOTAS X 15 ML</li>
                  <li>BREXIN 180 MG / 5ML FRASCO X 120 ML</li>
                  <li>BREXIN FORTE 650MG X 10 TAB</li>
                  <li>CELAY 10MG X 10 TAB</li>
                  <li>CELAY 10MG/15ML SOLUCION ORAL X 15ML</li>
                  <li>CELAY 5MG/5ML SOLUCION ORAL X 100ML</li>
                  <li>CLORACE 125-0,5MG/5ML JARABE X 120ML</li>
                  <li>CLORACE 500-4MG X 10 TAB</li>
                  <li>CLORACE 500-4MG X 20 TAB</li>
                  <li>CLORACE 80MG-0,5MG/ML SOL GOTAS X 30ML</li>
                  <li>COFADOR X5ml SOLUC</li>
                  <li>COFADOR-T  X5ml SOLUC DORZOLAMIDA 2% + TIMOLOL 0.5%</li>
                  <li>COMPLEJO B CON LIDOCAINA SOL INY</li>
                  <li>EUSILEN 4 MG / 2 ML SOL INY KIT X 1 </li>
                  <li>EUSILEN 4 MG / 2 ML SOL INY KIT X 2 </li>
                  <li>EUSILEN 4MG X 8 TAB</li>
                  <li>EUSILEN DUAL X 10 TAB</li>
                  <li>IPALAT 1% CREMA X 20GR</li>
                  <li>IPALAT 10MG/20ML SOLUCION TOPICA X 20ML</li>
                  <li>KATIVIL 1GR/10ML SOL ORAL X 120ML</li>
                  <li>KATIVIL 1GR/10ML SOL ORAL X 90ML</li>
                  <li>KETOPROFENO 100MG X 10 CAP</li>
                  <li>MAVERAL 500 MG  X 10 TAB REC</li>
                  <li>MAVERAL 850 MG  X 10 TAB REC</li>
                  <li>MIOVIT COMPOSITUM SOL INY CAJA X 1 AMPOLLA</li>
                  <li>MIOVIT JARABE X 180 ML </li>
                  <li>MIOVIT JARABE X 90ML</li>
                  <li>MIOVIT SOL ORAL GOTAS X 20ML</li>
                  <li>MIOVIT X 10 GRAGEAS </li>
                  <li>MIOVIT X 30 GRAGEAS </li>
                  <li>MIOVIT X 60 GRAGEAS </li>
                  <li>MUCOBROL 4 MG / 5ML JBE X 120 ML </li>
                  <li>PINVEX 5G-1G/100ML  SOL X10ML </li>
                  <li>REDUBEN 100MG X 10 TAB</li>
                  <li>VERALEN (DICLOFENAC DIETILAMONIO)1.16% X 20g</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 11 DISTRILAB-->
    <div class="modal fade" id="lab11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/68.png" alt="">
                </div>           
                <ul>

                  <li>ACIDO FOLICO 10MG/2ML AMP</li>
                  <li>BROMURO DE IPATROPIO AEROSOL PARA INHALACION 20MCG/200 DOSIS</li>
                  <li>BUDESONIDA INHALADOR 200MCG X 200 DOSIS</li>
                  <li>CARVEDILOL 12,5 MG X 30 TAB</li>
                  <li>CEFADROXILO SUSP 250 MG / 5ML /100ML</li>
                  <li>CEFIXIMA 100MG/5ML SUSP FRASCO X 60ML</li>
                  <li>DEFALOX CEFIXIMA 400 MG X 10 TAB</li>
                  <li>DETFORGLIN/METFORMINA + SITAGLIPTINA X 30 TAB REC </li>
                  <li>DIALPROM ACIDO VALPROICO SOL 250 MG / 5 ML / 120ML</li>
                  <li>DIAMIB (SECNIDAZOL) 500MG / 5ML POLVO PARA SUSP</li>
                  <li>DIANIDIP 10 MG X 10 TAB</li>
                  <li>DIANIDIP 20 MG X 10 TAB</li>
                  <li>DICLOFENAC POTASICO 100MG X 10 TABLETAS (BLISTER)</li>
                  <li>DICLOFENAC POTASICO 75MG/3MLDISFENAC</li>
                  <li>DICLOPRAM 5MG / 5 ML JARABE (METOCLOPRAMIDA) X 100 ML</li>
                  <li>DICLORFAM 4mg X20 TBLS</li>
                  <li>DIISFLOR SACCHAROMYCES BOULARDII 1,3 X 1 SOBRE </li>
                  <li>DIPROXIN (CIPROFLOXACINA) 250MG/5ML X 60ML SUSP PED</li>
                  <li>DISCAPINA KIDS BUTILBROMURO DE HIOSCINA SOL 5 MG/ML 20 ML</li>
                  <li>DISCETAM (LEVETIRACETAM) 1000mg X 30 TBL</li>
                  <li>DISCETAM 100 MG / ML X 150 ML (LEVETIRACETAM) </li>
                  <li>DISCRALFAT SUCRALFATO 1G X 20 TAB </li>
                  <li>DISTIAZEM 60 MG X 30 TAB</li>
                  <li>DISTRILAX FRASCO 120GR POLVO SOLUCION ORAL</li>
                  <li>DIZONIDE NITAZOXANIDA POLVI PARA SUSP. ORAL 60 ML</li>
                  <li>DLORACE 500 MG + 4 MG X 20 TABLETAS </li>
                  <li>FENITOINA SODICA 100 MG X 30 TAB</li>
                  <li>HIDROCLOROTIAZIDA 12,5 MG X 30 TAB</li>
                  <li>LEVOFLOXACINA 500MG/100ML AMP</li>
                  <li>METRONIDAZOL 250MG / 5 ML 100 ML SUSP</li>
                  <li>PREDNISOLONA  ACETATO  SUSP  1% X 5 ML </li>
                  <li>PREDNISONA 5 MG X 10 TAB</li>
                  <li>REMDESIVIR 100MG PVO INYECTABLE</li>
                  <li>RIVAROXABAN 20 MG X  30 TAB</li>
                  <li>SULTAMICILINA 750MG X 10 TAB</li>
                  <li>SULTAMICILINA SUS 250 ML / 5 ML X 100</li>
                  <li>TIMOLOL MALEATO 0,5% 10 ML SOL OFTALMICA</li>
                  <li>TRIMEBUTINA MALEATO 200MG X 20 TAB DIMETIN</li>
                  <li>VITAMINA C ACIDO ASCORBICO 500 MG / 5 ML </li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 12 DOLLDER-->
    <div class="modal fade" id="lab12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/69.png" alt="">
                </div>           
                <ul>

                  <li>ALGIOL (BISOPROLOL FUMARATO) 5MG X 30 COMP</li>
                  <li>CINAREN 25MG X 50 COMP</li>
                  <li>CINAREN 75MG X 20 COMP</li>
                  <li>CLOFEN 50MG X 10 COMP</li>
                  <li>CYNT 20MG X 20 COMP</li>
                  <li>CYNT 40MG X 10 COMP</li>
                  <li>DALCITRIN 2% UNGÜENTO X 30 G </li>
                  <li>DIFENAC FORTE 100MG X 10 COMP</li>
                  <li>DIFENAC GEL 1% TUBO X 30GR</li>
                  <li>DILOTEX 5 MG X 20 COMP</li>
                  <li>DOLAK 10MG X 10 COMP SUBLINGUALES</li>
                  <li>DOLAK 10MG X 20 COMP</li>
                  <li>DOLAK 20MG X 10 COMP</li>
                  <li>DOLAK 30MG X 4 COMP SUBLINGUALES</li>
                  <li>DOLNIX 75 MG X 20 COMP</li>
                  <li>DOMPESIN 10MG X 30 COMP</li>
                  <li>DROPIL 200 MG COMPRIMIDOS X 40 TAB</li>
                  <li>FAZOL 500 MG X 15 ML SUSP ORAL </li>
                  <li>FUNGOSIN 100MG X 14 CAP </li>
                  <li>FUNGOSIN 100MG X 28 CAP </li>
                  <li>FUNGOSIN 100mg X 6 CAPS</li>
                  <li>HEPROX 0,4MG X 30 CAP</li>
                  <li>IDOXEN 150MG X 10 CAP</li>
                  <li>IDOXEN 75MG X 10 CAP</li>
                  <li>INIBIL 20MG X 14 COMP</li>
                  <li>INIBIL 40MG X 14 COMP</li>
                  <li>LOREX SOLUCION JARABE 1mg/ml X60ml</li>
                  <li>MUCLAR 30MG-5MG X 10 COMP</li>
                  <li>MUCLAR 30MG-5MG/5ML JARABE X 60ML</li>
                  <li>NEMODINE 40MG X 20 COMP</li>
                  <li>NEMODINE 90 MG X 10 COMP</li>
                  <li>NOPUCID LOCION X 100ML</li>
                  <li>NOPUCID SHAMPOO 0,02% X 100ML</li>
                  <li>NOVARONA 200 MG X 10 COM</li>
                  <li>TALERC 10MG X 10 COMP</li>
                  <li>TALERC 10MG/ML SOL GOTAS X 15 ML</li>
                  <li>VIZERUL 150MG X 10 TAB</li>
                  <li>VIZERUL 75MG X 10 TAB</li>
                  <li>VIZERUL 75MG X 20 TAB</li>
                  <li>ZOST 50 MG X 1 COMP</li>
                  <li>ZOST 50 MG X 2 COMP</li>
                  <li>ZOST 50 MG X 4 COMP</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 13 FAHD-->
    <div class="modal fade" id="lab13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/43.png" alt="">
                </div>           
                <ul>

                  <li>ACEITE RELAJANTE DE MASAJE PARA BEBE</li>
                  <li>ACICLOVIR 400 MG X  10 TAB (BLISTER)</li>
                  <li>AGAROL LIQ VAINILLA X 180 ML </li>
                  <li>AIMYN X 28 TAB</li>
                  <li>ALOEVIT - E LOCION HUMECTANTE DE ALOE VERA Y VITAMINA E </li>
                  <li>AMLODIPINA 5 MG X 10 TAB ( BLISTER)</li>
                  <li>AMOXICILINA 500 MG X 10 TAB (BLISTER)</li>
                  <li>ARBELLA35 X 21 TAB</li>
                  <li>BECLOMETASONA 200MCG/200D INHALADOR </li>
                  <li>BROMURO DE IPATROPIO 20 MCG/200D INHALADOR </li>
                  <li>CERO AKNE LOCION 60 ML </li>
                  <li>CRIX X 21 TAB</li>
                  <li>DIABUTIL GLIMEPIRIDA 2 MG X 30 COMP </li>
                  <li>DOMPERIDONA 10 MG X 10 TAB (BLISTER)</li>
                  <li>ENEMAX - A FRASCO 133ML</li>
                  <li>ENEMAX - P 16% FRASCO X66,6 ML</li>
                  <li>FLEVOMAX 90/10 500 MG 2 BLISTER X 30 TAB</li>
                  <li>ITRACONAZOL 100MG X 4 TAB (BLISTER)</li>
                  <li>LEVOFLOXACINA 500MG X 5 TAB (BLISTER)</li>
                  <li>MABIVIT COMPLEJO COMPLEJO MULTIVITAMINICO </li>
                  <li>METOCLOPRAMIDA 10 MG X 10 TAB BLISTER </li>
                  <li>MILEVA 35 MG  X 21 COMP </li>
                  <li>MUPIROCIN 2 % UNGÜENTO  15 G</li>
                  <li>NEUMOTEX SUSP. PARA NEBULIZAR X 2,5 ML</li>
                  <li>NEUMOTIDE 250 MCG SALMETEROL 25 MCG AEROSOL PARA INHALAR</li>
                  <li>OMEPRAZOL 40 MG POLVO LIOFILIZADO SOL INY  IV </li>
                  <li>OVUMIX X 6 OVULOS </li>
                  <li>PENICILINA 1,200,000 POLVO PARA SUSP</li>
                  <li>PENICILINA 2.400.000 POLVO PARA SUSP</li>
                  <li>ROSUVASTATINA 20MG 10 TAB (BLISTER)</li>
                  <li>SILDENAFIL 100 MG 1 BLISTER X 4 TAB</li>
                  <li>TRIMETOPIM+SULFAMETOXAZOL 160/800 MG  X 10 TAB  (BLISTER)</li>
                  <li>VITAMINA C (ACIDO ASCORBICO) 500 MG / 5 ML SOL INY</li>
                  <li>VITAMINA C DE 500 MG X 10 TAB MASTICABLES (TIRAS)</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 14 FARMA-->
    <div class="modal fade" id="lab14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/42.png" alt="">
                </div>           
                <ul>

                  <li>ANTILAX 2MG X 10 TAB</li>
                  <li>CALCIBON C/VIT D 315MG/200UI X 30 TAB MASTICABLES</li>
                  <li>CALCIBON NATAL FORTE X 30 TAB</li>
                  <li>CLIMASOY 100 MG CAP X 30</li>
                  <li>COLYPAN 200MG X 10 TAB</li>
                  <li>CORAZEM 120MG X 10 TAB</li>
                  <li>FITEX 20MG X 1 TAB REC </li>
                  <li>FITEX 5MG X 10 TAB RECUBIERTAS </li>
                  <li>KALMAX COMPOSITUM TAB MASTICABLES X 10 TAB </li>
                  <li>NINAZO GOTAS NASALES X 15ML</li>
                  <li>NOTOLAC 20MG X 10 TAB</li>
                  <li>RINARIS 5MG-60MG X 10 TAB</li>
                  <li>TERAGRIP 100 MG - 0,35MG/ML SOL PED X 15 ML</li>
                  <li>TERAGRIP FORTE GRANULADO DIA X 6 SOBRES</li>
                  <li>TERAGRIP FORTE GRANULADO NOCHE X 6 SOBRES</li>
                  <li>VALPRON 200MG/ML SOLUCION X 30ML</li>
                  <li>VALPRON 500MG X 30 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 15 FC PHARMA-->
    <div class="modal fade" id="lab15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/40.png" alt="">
                </div>           
                <ul>

                  <li>ANAPIR 200MG X 10 CAP BLANDAS</li>
                  <li>ANAPIR 200MG X 20 CAP BLANDAS</li>
                  <li>ARNICA FC AEROSOL X 64GR</li>
                  <li>BARROCUTINA GEL FACIAL </li>
                  <li>DARLIDE 1000 MUI X 60 CAP BLANDAS</li>
                  <li>JARABE DE VALERIANA X 120ML</li>
                  <li>JENGIBRE CON MIEL JBE X 120 ML</li>
                  <li>MULTIVINOL X 30 TAB</li>
                  <li>MULTIVINOL X 60 CAP</li>
                  <li>NACIVIT C GEL CORPORAL X 120GR</li>
                  <li>PASSIFLORA JARABE X 120ML</li>
                  <li>PERLAVIS FEMME BAÑO INTIMO  360 ML</li>
                  <li>PERLAVIS FEMME PLUS BAÑO INTIMO  200 ML</li>
                  <li>PERLAVIS FEMME TEENS  BAÑO INTIMO  200ML</li>
                  <li>PERLAVIS HOMBRE  BAÑO INTIMO  200ML</li>
                  <li>SELES  400 UI- 50 MCG X 30 CAP</li>
                  <li>SINUTIL NOCHE X 5 CAP</li>
                  <li>SOLICAN (MELOXICAM) 15 MG X 10 TAB</li>
                  <li>SULIXTRA DUO X 10 CAP</li>
                  <li>SULIXTRA TAMSULOSINA CLORHIDRATO) 0,4 MG X 10 CAP</li>
                  <li>TOPITOL 50MG X 30 TAB</li>
                  <li>VITAMINA C X 30 CAP</li>
                  <li>ZABILA CON MIEL JARABE 120 ML ADULTO</li>
                  <li>ZABILA CON MIEL JARABE PEDIATRICO 120 ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 16 HB HUMAN-->
    <div class="modal fade" id="lab16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/6.png" alt="">
                </div>           
                <ul>

                  <li>ACETAMINOFEN  GOTAS SOL ORAL X 30ML SABOR CEREZA DE LAPROFF</li>
                  <li>ACETAMINOFEN 500MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>ADRENA (ADRENALINA) 1MG/ML SOL INY  DE WELLONA PHARMA</li>
                  <li>AMLODIPINO 5MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>AMPIWELL-S 1,5GR AMP DE WELLONA PHARMA</li>
                  <li>ATORVASTATINA 20MG X 50 TAB DE LAPROFF</li>
                  <li>AZEEWELL-200  200MG/5ML SUSP ORAL X 15ML  DE WELLONA PHARMA</li>
                  <li>BACIWELL 400UI/G CREMA X 15GR DE WELLONA PHARMA</li>
                  <li>BETNOWELL-4  4MG/ML AMP DE WELLONA PHARMA</li>
                  <li>BUDEWELL-200 INHALADOR 200MCG/DOSIS DE WELLONA PHARMA</li>
                  <li>CARBAMAZEPINA 200MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>CETIRIZINA 10 MG X 10 TAB DE WEST-COAST</li>
                  <li>CIPROFLOXACINA 500MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>CLARITROMICINA 250 MG / 5 ML POLVO PARA SUSP DE WEST-COAST</li>
                  <li>CLARITROMICINA 500MG X 10 TAB DE WEST-COAST</li>
                  <li>CLOTRIMAZOL 1% SOLUCION TOPICA X 30ML DE LAPROFF</li>
                  <li>COLCHICINA 0,5MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>COLCIWELL 4MG AMP  DE WELLONA PHARMA</li>
                  <li>COMPLEJO B X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>DEFLAZACORT 6MG X 10 TAB DE LAPROFF</li>
                  <li>DESLORATADINA 0,5MG/ML JBE FRASCO DE 60 ML DE LAPROFF</li>
                  <li>DESLORATADINA 5MG X 10 TAB DE LAPROFF</li>
                  <li>DEXAMETASONA 8MG/1ML AMP DE HB HUMAN</li>
                  <li>DICLOFENAC SODICO 50 MG X 10 TAB (BLISTER) DE HB HUMAN</li>
                  <li>DICLOFENAC SODICO 75 MG/3 ML AMP DE HB HUMAN</li>
                  <li>EMIKIT (LEVONOGESTREL) 0.75MG X 2 TBLS DE WELLONA PHARMA</li>
                  <li>ENOXAWELL 40MG/0,4ML JERINGA PRELLENADA DE WELLONA PHARMA</li>
                  <li>ENOXAWELL 60MG/0,6ML JERINGA PRELLENADA DE WELLONA PHARMA</li>
                  <li>ESPIRONOLACTONA 25MG X 10 TAB  (BLISTER) DE LAPROFF</li>
                  <li>FLUCONAZOL 150 MG X 30 CAP DE WEST-COAST</li>
                  <li>FLUOXETINA 20MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>FLUZIWELL 0,2%  AMP IV X 100ML DE WELLONA PHARMA</li>
                  <li>FUROSEMIDA 40MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>GASA X ROLLO 100 YARDAS DE HB HUMAN</li>
                  <li>GEMFIBROZILO 600MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>GLIBENCLAMIDA 5MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>HIOSCINA BUTILBROMURO X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>IVERWELL 6MG X 4 TAB (BLISTER) DE WELLONA PHARMA</li>
                  <li>JERINGA  DESECHABLE 23GX1 3ml/CC DE HB HUMAN</li>
                  <li>JERINGAS DE 5CC x 21 1/2  DE HB HUMAN</li>
                  <li>KETOPROFENO 100MG AMP IV DE HB HUMAN</li>
                  <li>KORTWELL-40   40MG/ML SOLUCION INTRAARTICULAR DE WELLONA PHARMA</li>
                  <li>LEVOFLOXACINA 500MG X 7 TAB  DE LAPROFF</li>
                  <li>LEXIWELL 500MG X 10 TAB (BLISTER) DE WELLONA PHARMA</li>
                  <li>LORATADINA 10MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>LOSAWELL-100   100MG  X 30 TAB DE WELLONA PHARMA</li>
                  <li>METFORMINA 500 MG X 10  BLISTER DE LAPROFF</li>
                  <li>METOCLOPRAMIDA 10MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>METOTREXATE 2,5 MG X30 TAB DE WEST-COAST</li>
                  <li>METROWELL 500MG/100ML DE WELLONA PHARMA</li>
                  <li>NAPROXENO 250MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>NISTATINA 1.00.00 UI CREMA DE WEST-COAST</li>
                  <li>NITROFURANTOINA 100MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>NORFLOXACINO 400MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>OLMESARTAN 40 MG X 30 TAB DE WEST-COAST</li>
                  <li>OMEPRAZOL 40MG AMP DE HB HUMAN</li>
                  <li>OXACILINA 1,0 GR AMP DE HB HUMAN</li>
                  <li>PANTOPRAZOL 40MG AMP DE HB HUMAN</li>
                  <li>PARACETAMOL 500 MG - CLORFENIRAMINA 4MG  - FENILERFINA 10 MG Y ACIDO ASCORBICO 20 MG DE WEST-COAST</li>
                  <li>PENICILINA BENZATINICA 1,000,000 UI AMP IM DE HB HUMAN</li>
                  <li>PIPERACILINA + TAZOBACTAM 4,5GR AMP DE HB HUMAN</li>
                  <li>PIRIDOXINA (VITAMINA B6) 50MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>PREDNISOLONA 5MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>PROPINATO DE CLOBETASOL 0,05% CREMA  DE WEST-COAST</li>
                  <li>SULFATO FERROSO 125MG GOTAS  DE LAPROFF</li>
                  <li>SULFATO FERROSO 300MG X 10 TAB (BLISTER) DE LAPROFF</li>
                  <li>TAMSUWELL-0,4 0,4MG  X 10 TAB (BLISTER) DE WELLONA PHARMA</li>
                  <li>THYRONA 100MG X 100 TAB DE WELLONA PHARMA</li>
                  <li>THYRONA 50MG X 100 TAB DE WELLONA PHARMA</li>
                  <li>TREXAWELL 500MG/5ML  DE WELLONA PHARMA</li>
                  <li>VANCOMICINA 500 MG AMP DE HB HUMAN</li>
                  <li>WELLCIP 200MG/100ML AMP DE WELLONA PHARMA</li>
                  <li>WELLDOPA-275 250MG-25MG X 10 TAB (BLISTER) DE WELLONA PHARMA</li>
                  <li>WELLSONA 100MG AMP DE WELLONA PHARMA</li>
                  <li>WELLSPRIN-81  81MG X 10 TAB (BLISTER) DE WELLONA PHARMA</li>
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 17 KLINOS-->
    <div class="modal fade" id="lab17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/megalabs.png" alt="MEGALABS">
                </div>           
                <ul>

                  <li>ACIDO FOLICO 10MG X 20 COMP DE KLINOS</li>
                  <li>ACIDO FOLICO 10MG X 30 COMP DE KLINOS</li>
                  <li>ACIDO FOLICO 10MG/ML GOTAS X 15ML DE KLINOS</li>
                  <li>ANASMOL 5MG X 30 COMP DE ROWE</li>
                  <li>ANGRIP DIA X 8 COMP DE KLINOS</li>
                  <li>ANGRIP NOCHE 500-30MG X 4 COMP DE KLINOS</li>
                  <li>BARGONIL UNGÜENTO X 30GR DE ROWE</li>
                  <li>BETARRENTIN 0,025% GEL X 30GR DE MEDIHEALTH</li>
                  <li>BETARRENTIN 0,05% CREMA X 30GR DE MEDIHEALTH</li>
                  <li>BRIMOPRESS 0,2% SOL X 5 ML DE KLINOS</li>
                  <li>CICLOKAN 500MG X 21 COMP DE KLINOS</li>
                  <li>CLENBUNAL 0,020MG X 10 COMP DE ROWE</li>
                  <li>CLENBUNAL 0,020MG X 20 COMP DE ROWE</li>
                  <li>CLENBUNAL GOTAS X 15ML DE ROWE</li>
                  <li>CLENBUNAL JARABE ADULTO X 120ML DE ROWE</li>
                  <li>CLENBUNAL JARABE PEDIATRICO X 120ML DE ROWE</li>
                  <li>CLENBUXOL JARABE ADULTO X 120ML DE ROWE</li>
                  <li>CURPINOL 12,5MG X 30 COM DE ROWE</li>
                  <li>DERMAZOL 0,05% LOCION CAPILAR X 25ML DE MEDIHEALTH</li>
                  <li>DERMAZOL 0,05% UNGÜENTO X 30GR DE MEDIHEALTH</li>
                  <li>DERMOSUPRIL 0,05% CREMA TOPICA X 15GR DE MEDIHEALTH</li>
                  <li>DERMOSUPRIL 0,1% CREMA TOPICA X 15GR DE MEDIHEALTH</li>
                  <li>DERMOSUPRIL EMULSION FRASCO X 120ML DE MEDIHEALTH</li>
                  <li>DIECAPS 120MG X 30 CAP DE ROWE</li>
                  <li>DIECAPS 60MG X 30 CAP DE ROWE</li>
                  <li>FARBICIL 1% CREMA X 15GR DE MEDIHEALTH</li>
                  <li>FARBICIL 1% LOCION X 30ML DE MEDIHEALTH</li>
                  <li>FERGANIC FOLIC 20MG-80MCG/ML SOLUCION GOTAS PED X 30ML  DE ROWE</li>
                  <li>FERGANIC FOLIC JARABE X 120ML DE ROWE</li>
                  <li>FERGANIC GOTAS X 15ML DE ROWE</li>
                  <li>FERGANIC JARABE X 120ML DE ROWE</li>
                  <li>FLEMIBAR 20MG-2500MG/5ML SOL  CAJA X 3 AMPOLLAS DE ROWE</li>
                  <li>FLODONT ENJUAGUE BUCAL X 180ML DE KLINOS</li>
                  <li>GRAUSIN JARABE X 120ML DE KLINOS</li>
                  <li>GULAPER 250MG/5ML X 120ML JARABE ADULTO DE KLINOS</li>
                  <li>HEXANT 30MG/5ML ELIXIR X 120ML DE KLINOS</li>
                  <li>HIDRIBET LOCION HIDRATANTE AL 5% X 125ML DE MEDIHEALTH</li>
                  <li>KELFEN 100MG X 20 COMP DE ROWE</li>
                  <li>KELFEN 50MG X 10 COMP DE ROWE</li>
                  <li>KELFEN GEL 2,5% X 30GR DE ROWE</li>
                  <li>LEPTAZINE 5MG X 30 COMP DE ROWE</li>
                  <li>NAFINA CREMA 1% X 15GR DE KLINOS</li>
                  <li>ONDANSETRON 8MG X 10 COMP  DE KLINOS</li>
                  <li>ONDASETRON 4MG/2ML AMP DE KLINOS</li>
                  <li>ONDASETRON 8MG/2ML AMP DE KLINOS</li>
                  <li>PASIM 10MG/ML SOLUCION GOTAS X 15ML DE KLINOS</li>
                  <li>RIDAL 2MG X 20 COMP DE ROWE</li>
                  <li>RISPERID 2MG X 30 COMP  DE KLINOS</li>
                  <li>RISPERID 3MG X 30 COMP  DE KLINOS</li>
                  <li>ROVARTAL 20MG X 30 COMP DE KLINOS</li>
                  <li>TOLNAFTAN 1% SOL GOTAS 15ML DE KLINOS</li>
                  <li>VIROSUPRIL CREMA 5% X 5G DE MEDIHEALTH</li>
                  <li>ZUDENINA 0,1% CREMA X 30GR DE MEDIHEALTH</li>
                  <li>ZUDENINA 0,1% GEL X 30GR DE MEDIHEALTH</li>
                  <li>ZUDENINA FORTE 0,3% GEL X 30GR DE MEDIHEALTH</li>
                                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 18 LA SANTE-->
    <div class="modal fade" id="lab18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/pharmatique.png" alt="">
                </div>           
                <ul>

                  <li>ACETAMINOFEN 150MG/5ML  X 120ML JARABE </li>
                  <li>ALLUB 1.4 X 15ml</li>
                  <li>ANALPER CAF 500MG-40MG X 10 TAB</li>
                  <li>ATORVASTATINA 40MG X 14 TAB</li>
                  <li>BROXOL 50MG/5ML JARABE PEDIATRICO X 120ML</li>
                  <li>BROXOL FLEM 100MG/5ML X 120ML JARABE PEDIATRICO</li>
                  <li>BROXOL FLEM 750MG/15ML X 120ML JARABE ADULTO</li>
                  <li>BROXOL FLEM GOTAS X 30ML</li>
                  <li>BROXOL GRIP 125MG-1MG X 120ML USO PEDIATRICO</li>
                  <li>BUCOXOLGAR 0,15 - 0,25% MENTA SOL TOPICA ORAL X 120ML*</li>
                  <li>DAKSOL 500MG X 4 TAB</li>
                  <li>DESLER 0,5MG/ML JARABE PEDIATRICO X 60ML</li>
                  <li>DESLER M 5MG-10MG X 10 TAB </li>
                  <li>DESLORATADINA 2,5MG/5ML  JARABE X 60ML</li>
                  <li>DICLOFENAC SODICO 50MG X 20 TAB</li>
                  <li>DIOSMINA + HESPERIDINA 450MG -50 MG X 10 TAB</li>
                  <li>ESOZ 40MG X 14 CAP</li>
                  <li>ESOZ 40MG X 7 CAP</li>
                  <li>FEXOFENADINA HCL 30MG/ 5ML SUSP X 120 ML</li>
                  <li>GLIMERID 4MG X 10 TAB</li>
                  <li>IRBESARTAN 150MG X 10 TAB</li>
                  <li>ITISONA 0,1% CREMA X 30GR</li>
                  <li>KETOPROFENO 100MG X 20 CAP</li>
                  <li>PROCILUS D2 X 10 SOBRES SABOR UVA</li>
                  <li>TRIPUR 80MG-400MG X 20 TAB</li>
                  <li>XEROGRAX 120 MG X 30 CAP</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 19 LETI-GENVEN-->
    <div class="modal fade" id="lab19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/26.png" alt="">
                </div>           
                <ul>

                  <li>ALIVET COMBO DIA/NOCHE X 12 TAB</li>
                  <li>ALIVETNOC FORTE 10GR GRANULADO X 6 SOBRES</li>
                  <li>ATORVASTATINA 40MG X 30 TAB</li>
                  <li>CETIRIZINA 10MG X 10 TAB </li>
                  <li>CLENOSAN 90 MG X 20 COMP</li>
                  <li>DESLORATADINA 0,5MG/ML SOLUCION ORAL X 60ML</li>
                  <li>DICLOFENAC SODICO 50MG X 10 CMP</li>
                  <li>FEMADONNA 40MG X 20 COMP</li>
                  <li>HIDROCLOROTIAZIDA 12,5MG X 30 TAB </li>
                  <li>NEUROMIX ( CIANOCOBALAMINA) X 30 COMP</li>
                  <li>OMEPRAZOL 40MG X 10 CAP</li>
                  <li>ZONTRICON 100MG/5ML X 30ML SUSP</li>
                  <li>ZONTRICON 500MG X 6 CAP</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 20 LUBRIX-->
    <div class="modal fade" id="lab20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/lubrix.png" alt="">
                </div>           
                <ul>

                  <li>ACUAGEL GEL PARA LA TARNSMISION DE UTRASONIDO 250 ML</li>
                  <li>ECGEL GEL PARA TRANSMISION ELECTRICA 250 ML</li>
                  <li>LUBRIX CON ACIDO HIALURONICO SEDA X 60 ML</li>
                  <li>LUBRIX GEL LUBRICANTE CALIDO 70 GR</li>
                  <li>LUBRIX GEL LUBRICANTE CHOCOLATE 60 ML</li>
                  <li>LUBRIX GEL LUBRICANTE ESPERMATICIDA 120 ML</li>
                  <li>LUBRIX GEL LUBRICANTE FRESA  60 ML</li>
                  <li>LUBRIX GEL LUBRICANTE INTIMO DE 120 ML</li>
                  <li>LUBRIX GEL LUBRICANTE INTIMO DE 60 ML</li>
                  <li>LUBRIX GEL LUBRICANTE MENTA  60 ML</li>
                  <li>LUBRIX GEL LUBRICANTE PIÑA COLADA  60 ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 21 MEYER-->
    <div class="modal fade" id="lab21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/13.png" alt="">
                </div>           
                <ul>

                  <li>ACIDO FOLICO 10MG X 20 TAB</li>
                  <li>ACIDO FOLICO 10MG/ML SOL GOTAS X 15ML</li>
                  <li>ACIDO FOLICO 5MG X 10 TAB</li>
                  <li>ACIDO FOLICO 5MG X 30 TAB</li>
                  <li>ADOREM 500 MG TAB X10</li>
                  <li>ALANTAMIDA 0,5% - 0,4% CREMA X 20GR</li>
                  <li>ALSART 160MGS X 10 CAP</li>
                  <li>ALSART 80MGS X 10 CAP</li>
                  <li>APLACAL 750MG X 10 TAB MASTICABLES SABOR BANANA</li>
                  <li>APLACAL 750MG X 10 TAB MASTICABLES SABOR FRAMBUESA</li>
                  <li>APLACAL 750MG X 10 TAB MASTICABLES SABOR MANDARINA</li>
                  <li>APLACAL 750MG X 10 TAB MASTICABLES SABOR MENTA</li>
                  <li>ARBIXIL 15MG-10MCG/5ML JARABE X 120ML </li>
                  <li>ARBIXIL 7,5MG-5MCG/5ML JARABE X 120ML </li>
                  <li>ARBIXIL 7,5MG-5MCG/ML SOL GOTAS X 15ML</li>
                  <li>ASCAFYL PLUS X 10 TAB</li>
                  <li>ASCAFYL X 10TAB</li>
                  <li>BENDAMEN 100MG X 6 TAB</li>
                  <li>BENDAMEN 30ML SUSP</li>
                  <li>BENZODIAZOL 0,25MG-5MG X 16 PASTILLAS SABOR LIMON</li>
                  <li>BENZODIAZOL 0,25MG-5MG X 16 PASTILLAS SABOR MENTA</li>
                  <li>BENZODIAZOL 0,25MG-5MG X 16 PASTILLAS SABOR NARANJA</li>
                  <li>BENZODIAZOL 0,25MG-5MG X 16 PASTILLAS SABOR TUTTI FRUTTI</li>
                  <li>BICOL 160/12,5 MG X 14 TAB</li>
                  <li>BROLAT 5MG/30MG/5ML SOL ORAL X 60ML</li>
                  <li>BROLAT 5MG-30MG X 10 TAB </li>
                  <li>CALMOX 15MG X 10 TAB </li>
                  <li>CALMOX 7,5MG X 10 TAB </li>
                  <li>CAMPAL 1% CREMA X 20GR </li>
                  <li>CAMPAL 1% CREMA X 50GR </li>
                  <li>CAMPAL 50MG X 20 TAB</li>
                  <li>CETRAL 10MG X 10 TAB</li>
                  <li>CETRAL 10MG/ML SOL GOTAS X 10ML </li>
                  <li>CETRAL 5MG/5ML SOL ORAL X 60ML </li>
                  <li>CORBIS 5 MG X 30 COMPRIMIDOS</li>
                  <li>CYPRAL 750MG X 6TAB</li>
                  <li>DESONIDA 0,01% CREMA TOPICA 15 GR</li>
                  <li>DIFEN PLUS X 10 TAB</li>
                  <li>DIFEN PLUS X 20 TAB</li>
                  <li>DIFEN X 10 TAB</li>
                  <li>DOCE-PLEX ELIXIR X 120ML</li>
                  <li>EQUALIV PN 100MG-50MG X 30 TAB</li>
                  <li>ESPIRONOLACTONA 25MG X 20 TAB</li>
                  <li>FERROCE B-12 JARABE X 120ML*</li>
                  <li>FERROCE X 30 TAB</li>
                  <li>FUROSEMIDA 20MG X 12 TAB</li>
                  <li>FUROSEMIDA 40MG X 24 TAB</li>
                  <li>GLYMAR 2MG X 20 TAB</li>
                  <li>GLYMAR 4MG X 20 TAB</li>
                  <li>HEPAFOL B12 X 30 TAB</li>
                  <li>HEPAFOL FORTE JARABE X 120ML</li>
                  <li>HEPAFOL FORTE JARABE X 240ML</li>
                  <li>IBANDROMET 150MG X 1 TAB</li>
                  <li>IBUTAN 200MG X 10 TAB</li>
                  <li>IBUTAN 400MG X 10 TAB</li>
                  <li>IBUTAN 400MG X 20 TAB</li>
                  <li>IBUTANCOL 400MG-4MG X 20 TAB </li>
                  <li>IBUTANFEM 400 MG - 20 MG X 20  TAB REC </li>
                  <li>IBUTANFEM 400MG-20MG X 10 TAB REC</li>
                  <li>IBUTANFEM 400MG-20MG X 30 TAB REC</li>
                  <li>IBUTANMIGRA 400MG-40MG X 10 TAB*</li>
                  <li>IMAZOL 1% CREMA VAGINAL X 50GR</li>
                  <li>IMAZOL 1% SOLUCION X 20ML </li>
                  <li>IMAZOL 1% SPRAY X 25ML </li>
                  <li>IMAZOL 100MG X 6 CAP BLANDAS VAGINALES</li>
                  <li>IMAZOL 500MG X 1 CAP BLANDA VAGINAL</li>
                  <li>IMAZOL TABLETAS VAGINALES X 6 UNIDADES</li>
                  <li>LECART 1G/10ML SOLUCION ORAL X 120ML</li>
                  <li>LIBERDUX 2,5MG / 5 ML JARABE X 60ML </li>
                  <li>LIBERDUX 5 MG  X 10 TAB </li>
                  <li>LOFLOX 400MG X 10 TAB</li>
                  <li>METREN 125MG/5ML SUSPENSION X 120ML</li>
                  <li>METREN 250MG/5ML SUSPENSION X 120ML</li>
                  <li>METREN 500MG X 10 CAPSULAS BLANDAS VAGINALES</li>
                  <li>MULTIVIRAL X 30 CAP</li>
                  <li>MUPROBAN 2% UNGÜENTO X 15GR </li>
                  <li>MUPROBAN 2% UNGÜENTO X 30GR </li>
                  <li>NONAFOL 10 MG X 20 TAB </li>
                  <li>NONAFOL 10MG X 10 TAB</li>
                  <li>NORTRICOL 200 MG CAP CAJA X 20 SIE</li>
                  <li>NOXPIRIN 125MG-0,5MG/5ML 120</li>
                  <li>NOXPIRIN 325MG-1,25MG/5ML 120</li>
                  <li>NOXPIRIN GRIP DISPENSADOR 25 BLISTER X 4 TAB</li>
                  <li>NOXPIRIN GRIP X 12 TAB</li>
                  <li>NOXPIRIN SOL ORAL GOTAS 15ML</li>
                  <li>PERTEN 1% GEL TOPICO X 20GR</li>
                  <li>PERTEN 1% SOLUCION ATOM X 30ML</li>
                  <li>PERTEN 1% SOLUCION GOTAS X 30ML</li>
                  <li>PERTEN 1% X 20gr CREMA TOPICA</li>
                  <li>PERTEN 250MG X 20 TAB</li>
                  <li>PLEXAMIN JARABE X 120ML</li>
                  <li>PLEXAMIN JARABE X 240ML</li>
                  <li>PROLASTAT 0,5MG FARASCO 4 TAB</li>
                  <li>SEDIVAL X 30 TAB REC</li>
                  <li>SIGTIPHIN 200MG X 10 COMP</li>
                  <li>SILDENAFIL 50 MG X 1 TAB</li>
                  <li>TIAZOMETS 10MG-20MG X 14 TAB </li>
                  <li>TILODRIN 30MG/15ML JARABE X 120 ML</li>
                  <li>TILODRIN 4MG/ML SOL ORAL GOTAS X 15ML</li>
                  <li>TIROSTAT 50 MG X 100 TAB</li>
                  <li>TIROXIN 25MCG X 50 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 22 MULTILENTE-->
    <div class="modal fade" id="lab22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/12.png" alt="">
                </div>           
                <ul>

                  <li>20/20 SOL LIMPIA LENTE X 70 ML </li>
                  <li>20/20 SOLUCION  ACONDICIONADORA</li>
                  <li>COMFORT - C SOL LUBRICANTE </li>
                  <li>COMPRESA ALCOHLADA 3CM X 3CM PHARMA SWAB</li>
                  <li>GRECIAN FORMULA 240 ML </li>
                  <li>MULTIPLUS  ULTRA 240 ML SOL UNICA PARA LENTES DE CONTACTO</li>
                  <li>MULTIPLUS SOLUCION UNICA X 240 ml</li>
                  <li>UNIC SOL PARA LENTES RGP 180 ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 23 NOW-->
    <div class="modal fade" id="lab23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/11.png" alt="">
                </div>           
                <ul>

                  <li>ALFALFA 650 MG 250 TAB</li>
                  <li>AMINO COMPLETE 120 CAP</li>
                  <li>APPLE CIDER VINEGAR 450MG 180 CAP</li>
                  <li>BREWER'S YEAST 650 MG X 200 TAB</li>
                  <li>CREATINE 750 MG X 120 CAP</li>
                  <li>L-ARGININE 500 MG X 250 CAP</li>
                  <li>PROSTATE SUPPORT 90 SGEK </li>
                  <li>VITAMINA C 1000 + BIOFLAVONOIDES MG X 100CAP</li>
                  <li>VITAMINA D - 3 400 UI 59 ML FRASCO</li>
                  <li>WHEY PROTEIN CHOCOLATE 907 GRS</li>
                  <li>WHEY PROTEIN VAINILLA 907 GRS</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 24 OFTALMI-->
    <div class="modal fade" id="lab24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/oftalmi.png" alt="">
                </div>           
                <ul>

                  <li>ACETAB 250MG X 20 TAB</li>
                  <li>ACIDO ACETILSALICILICO 81 MG X 24 TAB</li>
                  <li>AFLAMAX 50MG X 10 TAB</li>
                  <li>AIRON 10MG X 10 TAB RECUBIERTAS</li>
                  <li>AIRON 4MG X 10 TAB MASTICABLES</li>
                  <li>AIRON 5MG X 10 TAB MASTICABLES</li>
                  <li>ALERGOT SOLUCION OFTALMICA X 5ML</li>
                  <li>ALFADYN 0,2% SOLUCION OFTALMICA X 5ML</li>
                  <li>APIRET 125MG SUPOSITORIOS X 6 UNIDADES</li>
                  <li>APIRET 180MG/5ML SOL ORAL X 120ML</li>
                  <li>APIRET 180MG/5ML SOL ORAL X 60ML</li>
                  <li>BUDECORT 1MG/ML SUSP AEROSOL PARA INHALAR  X 100 DOCIS</li>
                  <li>BUDECORT 1MG/ML SUSP PARA INHALAR X 10ML</li>
                  <li>BUDENAS 200 DOSIS SUSP. NASAL 100MCG/DOSIS</li>
                  <li>BUDENAS SUSP NASAL GOTAS X 15ML</li>
                  <li>CLARASOL SOL OFTALMICA 0,12MG/15ML</li>
                  <li>CLARIX 0,025% SOLUCION NASAL PEDIATRICA X 15ML</li>
                  <li>CLARIX 0,255% SOLUCION OFTALMICA  X 15ML</li>
                  <li>CLARIX SOLUCION NASAL 0.05% X 15ml SPRAY</li>
                  <li>CORTYNASE 0,05% SUSP NASAL X 140 DOSIS</li>
                  <li>DESLORAT 0,5MG/ML JARABE X 60ML</li>
                  <li>DESLORAT 5 MG X 20 TAB</li>
                  <li>DESLORAT 5MG X 10 TAB</li>
                  <li>DOBET SOLUCION OFTALMICA X 5ML</li>
                  <li>DUOVENT SOLUCION PARA INHALAR X 15ML (BROM DE IPATROPIO + BROM DE FENOTEROL)</li>
                  <li>FISIOLIN SOLUCION NASAL X 15ML  USO PEDIATRICO</li>
                  <li>GAMPRESS SOL OFTALMICA X 3 ML BIMATOPROST / TIMOLOL MEATO</li>
                  <li>GARABET SOLUCION OFTALMICA X 5ML</li>
                  <li>GENTAMICINA SOLUCION OFTALMICA 5ML</li>
                  <li>IPORET 40MG/ML SUSPENSION ORAL X 60ML USO PEDIATRICO</li>
                  <li>KEPRORET SOL ORAL X 120ML</li>
                  <li>LORATADINA 10MG X 10 TAB</li>
                  <li>LORECORT SOL ORAL X 60 ML </li>
                  <li>MARADEX SUSPENSIÓN OFTALMICA X 5 ML</li>
                  <li>MELOXICAM 15 MG X 10 TAB</li>
                  <li>MOVIMEX 7,5MG X 10 TAB</li>
                  <li>NAS 0,1% SOLUCION NASAL GOTAS ADULTO</li>
                  <li>NEVAC SUSP OFTALMICO 0,1% X 5 ML</li>
                  <li>OCUPRED SUSPENSION  OFTALMICA AL 1% X 5ML </li>
                  <li>OFTAINE 0,5% SOLUCION OFTALMICA X 15ML</li>
                  <li>OPAT 0,1%  SOLUCION OFTALMICA FRASCO X 5ML</li>
                  <li>QUINOCORT SUS. OFTALMICA 5 ML</li>
                  <li>QUINOFTAL 0,3% SOLUCION OFTALMICA X 5ML</li>
                  <li>QUINOTIC 0,30% SOLUCION OTICA X 4ML</li>
                  <li>SOLTIN SOLUCION OFTALMICA X 15ML</li>
                  <li>TOBRASOL 0,3% UNGÜENTO OFTALMICO X 7,5GR</li>
                  <li>TODENAC 0,1% SOLUCION OFTALMICA X 5ML</li>
                  <li>TODEX SUS. OFTALMICA 5 ML</li>
                  <li>TODEX UNGUENTO X 7.5G</li>
                  <li>VENTICORT AEROSOL 200 DOSIS</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 25 P&G-->
    <div class="modal fade" id="lab25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/5.png" alt="">
                </div>           
                <ul>

                  <li>ACONDICIONADOR HERBAL ESSENCES BODY ENVY 346ML</li>
                  <li>ACONDICIONADOR HERBAL ESSENCES HELLO HYDRATION 346ML</li>
                  <li>AFEITADORA  MACH3 BASE RAZOR </li>
                  <li>AFEITADORA DESECHABLE GILLETTE DAISY CLASSIC X 2 UNIDADES </li>
                  <li>AFEITADORA DESECHABLE VENUS GILLETTE DISP 3 UNI TROPICAL</li>
                  <li>AFEITADORA MACH3 SENSITIVE -BASE RAZOR </li>
                  <li>AFEITADORA VENUS GILLETTE RAZOR 1 UP</li>
                  <li>CARTUCHO MACH 3 SENSITIVE ALOE VIT E  X 2 UNIDADES </li>
                  <li>CARTUCHO MACH 3 X 2 UNIDADES</li>
                  <li>CEBION MASTICABLE MINI TROPICAL 100 MG SOBRE X 45 TAB</li>
                  <li>CEBION MASTICABLE TROPICAL SOBRE X 12 TAB</li>
                  <li>CEBION VITAMINA C 100MG/ML SABOR FRESA 30 ML</li>
                  <li>CEPILLO DENTAL ORAL B ENCIAS DETOX SENSITIVE PAQ X 3UNI</li>
                  <li>CEPILLO DENTAL ORAL B NIÑO POOH DEO  X 1  UNIDAD</li>
                  <li>CEPILLOS ORAL B ADVANCED CERDAS CRISSCROSS X 2</li>
                  <li>DESODORANTE OLD SPICE ORIGINAL 3,0 OZ 85G</li>
                  <li>DESODORANTE OLD SPICE PURE SPORT 3,0 OZ 85G</li>
                  <li>DESODORANTE SECRET ANTIBACTERIAL SPRAY COTTON 93 GR</li>
                  <li>DESODORANTE SECRET ANTIBACTERIAL SPRAY LAVANDA 93 GR</li>
                  <li>DESODORANTE SECRET BARRA SECA BALANCED 2,6 OS 73G LAVANDA</li>
                  <li>DESODORANTE SECRET BARRA SECA BALANCED 2,6 OS 73G SIN FRAGANCIA</li>
                  <li>DESODORANTE SECRET GEL  DE 45G LAVANDA</li>
                  <li>DESODORANTE SECRET PH BARRA LAVENDER 45G</li>
                  <li>ENJUAGUE BUCAL CREST 500 ML</li>
                  <li>ENJUAGUE BUCAL CREST SCOPE OULT LAST 1 LITRO</li>
                  <li>HILO DENTAL ORAL B ESSENTIALFLOSS X 50 M</li>
                  <li>JABON DE BAÑO EN BARRA SAFEGUARD ALOE VERA  X 4 UNIDAD</li>
                  <li>JABON DE BAÑO EN BARRA SAFEGUARD BEIGE X 4 UNIDAD</li>
                  <li>PAMPERS BABY DRY JUMBO  DE 16- 28 LB / 7 -13 KG PAQ X 32 UNI</li>
                  <li>PAMPERS BABY DRY JUMBO  DE 35 LB / 16 KG PAQ X 16 UNI</li>
                  <li>PAMPERS EASY UPS  JUMBO BOY   X 18 UNIDADES</li>
                  <li>PAMPERS EASY UPS  JUMBO BOY   X 22 UNIDADES</li>
                  <li>PAMPERS EASY UPS  JUMBO GIRL  X 18 UNIDADES</li>
                  <li>PAMPERS EASY UPS  JUMBO GIRL  X 22 UNIDADES</li>
                  <li>PASTA DENTAL CREST CAVITY REGULAR 161G</li>
                  <li>PASTA DENTAL CREST COMP SCOPE WHITENING MINTY FRESH 153GR</li>
                  <li>PASTA DENTAL CREST COMP SCOPE WHITENING MINTY FRESH 153GR PACK X 2</li>
                  <li>PASTA DENTAL CREST KIDS SPAKLE FUN 130G</li>
                  <li>PROTECTOR DIARIO ALWAYS CON PERFUME X 18 UNIDADES</li>
                  <li>SHAMPOO HERBAL ESSENCES BODY ENVY 346ML</li>
                  <li>SHAMPOO HERBAL ESSENCES COLOR ME HAPPY 346ML</li>
                  <li>SHAMPOO HERBAL ESSENCES HELLO HYDRATION 346ML</li>
                  <li>SHAMPOO HERBAL ESSENCES LONG TERM  346ML</li>
                  <li>TOALLAS SANITARIAS ALWAYS ULTRA DELGADA CON ALAS 18 UNIDADES </li>
                  <li>VICK VAPORUB UNGÜENTO 12 GR</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    

    
    <!--MODAL 27 PHARSANA-->
    <div class="modal fade" id="lab27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/pharsana.png" alt="">
                </div>           
                <ul>

                  <li>AMY ACEITE CREMOSO 220CC</li>
                  <li>AMY COLONIA PARA BEBES X 220ML</li>
                  <li>AMY LOCION 200ML</li>
                  <li>AMY SEC TOALLAS HUMEDAS MANZANILLA X 72 UNIDADES</li>
                  <li>CHICCO ACEITE X 100 ml</li>
                  <li>CHICCO CHAMPU MANZANILLA  200ML</li>
                  <li>CHICCO CHAMPU ORIGINAL 200ML</li>
                  <li>CHICCO COLONIA 220ML</li>
                  <li>CHICCO TOALLAS HUMEDAS X 48 UNIDADES</li>
                  <li>CHICCO TOALLAS HUMEDAS X 72 UNIDADES</li>
                  <li>PAÑAL ADULTO SECUREZZA CLASSIC TALLA G X 6 UNIDADES</li>
                  <li>PROTECTOR DE CAMA  PAQT X 6 </li>
                  <li>PROTECTORES DIARIOS FRIENDS MANZANILLA X 40 UND</li>
                  <li>PROTECTORES DIARIOS FRIENDS REGULAR X 40 UND</li>
                  <li>PROTECTORES DIARIOS FRIENDS REGULAR X 60 UND</li>
                  <li>SECUREZZA COMFORT UNISEX TALLA L PAÑAL ADULTO PAQ X 6 UNIDADES</li>
                  <li>SECUREZZA COMFORT UNISEX TALLA M PAÑAL ADULTO PAQ X 6 UNIDADES</li>
                  <li>SECUREZZA TOALLAS POST-PARTO PREMIUM X 10 UNIDADES</li>
                  <li>SECUREZZA TOALLAS POST-PARTO X 10 UNIDADES</li>
                  <li>SIEMPRE SECO PAÑAL ADULTO TALLA G X 6 UNIDADES</li>
                  <li>SIEMPRE SECO PAÑAL ADULTO TALLA M X 6 UNIDADES</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 28 PLUS ANDES-->
    <div class="modal fade" id="lab28" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/9.png" alt="">
                </div>           
                <ul>

                  <li>ACIDO FOLICO 10MG X 20 TAB</li>
                  <li>ACIDO FOLICO 10MG X 30 TAB</li>
                  <li>ANANTY FORTE 120MG/5ML SUSPENSION X 120ML</li>
                  <li>ANANTY FORTE 160MG/5ML SUSPENSION X 120ML</li>
                  <li>CETIRIZINA CLORHIDRATO 10 MG X 10 COMP RECU</li>
                  <li>CLODOXIN 10MG X 20 COMP</li>
                  <li>CLODOXIN 5MG/5ML JARABE FRASCO X 120ML</li>
                  <li>DEXTAMIN 0,5 MG / ML SOL ORAL X 60 ML</li>
                  <li>DICLODEX 50MG X 10 TAB </li>
                  <li>DICLODEX 50MG X 20 TAB </li>
                  <li>FUROSEMIDA 40MG X 12 TAB</li>
                  <li>KETOPROFENO 100MG X 10 TAB</li>
                  <li>KETOPROFENO 100mg X 20 TBLS</li>
                  <li>LORADEX 10MG X 10 TAB</li>
                  <li>LORADEX 1MG/ML x 30 ML JARAB</li>
                  <li>MISULVAN COMPOSITUM JARABE ADULTO X 120ML</li>
                  <li>MISULVAN JARABE PEDIATRICO 15MG/5ML X 120ML</li>
                  <li>MISULVAN SOL GOTAS 7,5 MG / ML X 30 ML</li>
                  <li>PROPRANOLOL 40MG X 20 TAB</li>
                  <li>PROVIM X 20 GRAGEAS</li>
                  <li>SILDEX 100MG X 1 TAB</li>
                  <li>SILDEX 50MG X 1 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 29 PONCE & BENZO-->
    <div class="modal fade" id="lab29" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/logos.png" alt="">
                </div>           
                <ul>

                  <li>DENCORUB ROLLON ICE 80 G</li>
                  <li>DIOXOGEN SOLUCION ANTISEPTICA X 230ML</li>
                  <li>WAMPOLE EMULSION FRESA X 240ML</li>
                  <li>WAMPOLE EMULSION FRESA X 360ML</li>
                  <li>WAMPOLE EMULSION NARANJA X 240ML</li>
                  <li>WAMPOLE EMULSION NARANJA X 360ML</li>
                  <li>WAMPOLE EMULSION TUTTI FRUTTI X 240ML</li>
                  <li>WAMPOLE EMULSION TUTTI FRUTTI X 360ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 30 PORTUGAL-->
    <div class="modal fade" id="lab30" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/8.png" alt="">
                </div>           
                <ul>

                  <li>ALBENDAZOL SUSP 100 MG / 5 ML FRASCO 20 ML</li>
                  <li>AMOXICILINA + ACIDO CLAVULANICO 250 MG + 62,5 MG / 5ML POLVO  60ML</li>
                  <li>CEFADROXILO 250MG/5ML POLVO PARA SUSPENSION X 60ML</li>
                  <li>CLARITROMICINA JARABE 250 MG /5 ML FRASCO 50ML </li>
                  <li>CLOTRIMAZOL TAB VAGINALES 500MG X10 (BLISTER)</li>
                  <li>DOLODRAN EXTRA FUERTE 50 MG + 500 MG X 10 TAB (BLISTER)</li>
                  <li>FLUMEXINA DE 600 MG X 2 SOBRES</li>
                  <li>IBUPROFENO 400 MG X 10 TAB (BLISTER)</li>
                  <li>IRBESARTAN 300MG BLISTER X 10 TAB</li>
                  <li>LANSOPRAZOL 30 MG X10 CAP (BLISTER)</li>
                  <li>LORATADINA 5 NG / 5 ML JARABE X 60 ML</li>
                  <li>METRONIDAZOL SUSP 250MG X 120 ML</li>
                  <li>PARACETAMOL 100MG GOTAS 10 ML</li>
                  <li>PARACETAMOL 120 MG / 5ML FRASCO X 120 ML</li>
                  <li>PLATSIDERM CREMA 1% + 0,6 % CREMA </li>
                  <li>PORTIL ( CLOTRIMAZOL + GENTAMICINA + DEXAMETASONA )</li>
                  <li>REDOZINC (VIT C + ZINC) 10 MG X 10 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 31 ROLDA-->
    <div class="modal fade" id="lab31" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/4.png" alt="">
                </div>           
                <ul>

                  <li>ACONDICIONADOR HUMECTANTE ROLDAI X 145ML</li>
                  <li>AGUA OXIGENADA VOL 10 X 120CC</li>
                  <li>AGUA OXIGENADA VOL 10 X 500CC</li>
                  <li>AGUA OXIGENADA VOL 20 X 120CC</li>
                  <li>AGUA OXIGENADA VOL 20 X 500CC</li>
                  <li>AGUA OXIGENADA VOL 30 X 120CC</li>
                  <li>AGUA OXIGENADA VOL 30 X 500CC</li>
                  <li>AGUA OXIGENADA VOL 40 X 120CC</li>
                  <li>AGUA OXIGENADA VOL 40 X 500CC</li>
                  <li>BRILLANTINA 100GR</li>
                  <li>CHAMPU PLUS AMBAR COCO X 360 ml</li>
                  <li>CHAMPU PLUS AZUL ALGAS MARINAS 360ML</li>
                  <li>CHAMPU PLUS ROSADO  FRUTOS ROJOS  360ML</li>
                  <li>CHAMPU PLUS VERDE DE SABILA 360ml</li>
                  <li>CREMA DE PEINAR FOR MEN X 250 gr</li>
                  <li>CREMA PARA PEINAR ACEITE DE RICINO 300ML  </li>
                  <li>CREMA PARA PEINAR CERA DE ABEJAS 300ML</li>
                  <li>CREMA PARA PEINAR THERMO 5FIVE MAYOLIVA 180ML</li>
                  <li>CREMA PARA PEINAR THERMO 5FIVE YOGURT 180ML</li>
                  <li>DECOLORANTE EN POLVO 150gr</li>
                  <li>GEL ANTIBACTERIAL CLASICO TRADICIONAL 990GR</li>
                  <li>GEL DE DUCHA SPORT LOOK X 400ML FRAGANCIA MASCULINA</li>
                  <li>GEL FIJADOR  ANTICAIDA  BLANCO  250</li>
                  <li>GEL FIJADOR  ANTICAIDA  BLANCO  500g</li>
                  <li>GEL FIJADOR  ANTICASPA  AZUL 250</li>
                  <li>GEL FIJADOR  EXTRACTOS  BOTANICOS BLANCO 1000g</li>
                  <li>GEL FIJADOR ANTICAIDA BLANCO 120</li>
                  <li>GEL FIJADOR ANTICASPA AZUL   500g</li>
                  <li>GEL FIJADOR ANTICASPA AZUL 1000G</li>
                  <li>GEL FIJADOR ANTICASPA AZUL 120</li>
                  <li>GEL FIJADOR CON EXTRACTOS BOTANICOS AZUL 1000G</li>
                  <li>GEL FIJADOR CON EXTRACTOS BOTANICOS MORADO 500G</li>
                  <li>GEL FIJADOR EXTRACTOS BOTANICOS MORADO 1000 GR</li>
                  <li>GEL FIJADOR EXTRATO BOTANICO AZUL 120G</li>
                  <li>GEL FIJADOR EXTRATO BOTANICO AZUL 250G</li>
                  <li>GEL FIJADOR EXTRATO BOTANICO BLANCO 120G</li>
                  <li>GEL FIJADOR EXTRATO BOTANICO BLANCO 250G</li>
                  <li>GEL FIJADOR EXTRATO BOTANICO BLANCO 500G</li>
                  <li>GEL WAX SUPER HARD 100g</li>
                  <li>MASCARILLA CAPILAR ACEITE DE VISON 225GR</li>
                  <li>MASCARILLA CAPILAR ACEITE DE VISON 450GR</li>
                  <li>MASCARILLA CAPILAR ACEITE DE VISON 95g</li>
                  <li>MASCARILLA CAPILAR CERA DE ABEJAS 450GR</li>
                  <li>MASCARILLA CAPILAR CERA DE ABEJAS 95g</li>
                  <li>MASCARILLA CAPILAR COLAGENO  225GR</li>
                  <li>MASCARILLA CAPILAR COLAGENO 450GR</li>
                  <li>MASCARILLA CAPILAR COLAGENO 95g</li>
                  <li>MASCARILLA CAPILAR CON PLACENTA VEGETAL 300g</li>
                  <li>REMOVEDOR DE ESMALTE ULTRA FUERTE 120ML</li>
                  <li>RESTRUCTURANTE SILICON 70CC </li>
                  <li>ROLCLEAR 100GR</li>
                  <li>SHAMPO THERMO 5FIVE KARITE & QUERATINA 400ML</li>
                  <li>SHAMPOO ANTICAIDA FOR MEN X 400 ml</li>
                  <li>SHAMPOO ANTICASPA FOR MEN X 400 ml</li>
                  <li>TRATAMIENTO CAPILAR CON PLACENTA 240GR</li>
                  <li>TRATAMIENTO THERMO 5FIVE MAYOLIVA 240GR</li>
                  <li>TRATAMIENTO THERMO 5FIVE YOGURT 240GR</li>
                  <li>VASELINA SABILA Y VITAMINA E X 100GR</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 32 RONAVA-->
    <div class="modal fade" id="lab32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/500.png" alt="">
                </div>           
                <ul>

                  <li>ACETOBEN NF X 120ML</li>
                  <li>ALGOREN 40MG X 20 TAB</li>
                  <li>ALURON 100MG X 30 TAB</li>
                  <li>ARTENOLOL 100 MG X 30 TAB </li>
                  <li>ATROBEL SOL GOTAS 10MG / ML FRASCO X 15 ML</li>
                  <li>BACITRACINA 500 UI/G UNGÜENTO X 15GR</li>
                  <li>BACTRON 80mg-400mg X 20 TAB</li>
                  <li>BACTRON SUSP 40MG-200MG/5ML  X 100ML</li>
                  <li>COLAYTE  X  69,7GR TARRO</li>
                  <li>COLPRIN FORTE 650MG X 10 COMP</li>
                  <li>DECOBEL 0,5MG X 30 TAB</li>
                  <li>DECOBEL 8MG/2ML AMP</li>
                  <li>FLAVOL 300MG X 20 CAP</li>
                  <li>FLOGAREN 50MG X 20 TAB</li>
                  <li>FOLAC 10MG X 20 TAB</li>
                  <li>FOLIFER B12 X 30 TAB</li>
                  <li>GABOX 200MG X 20 TAB</li>
                  <li>GLUCOZIM 500MG X 20 COMP</li>
                  <li>METSIGLIN 500MG/50MG X 10 TAB</li>
                  <li>MILAX POLVO PARA SOLUCION X 120GR</li>
                  <li>MILAX POLVO PARA SOLUCION X 360GR</li>
                  <li>NACUA 40MG X 12 TAB</li>
                  <li>ROCARNIN 10% SOL ORAL FRASCO X 120ML</li>
                  <li>SARIFAN COMPOSITUM X 20 TAB</li>
                  <li>TRACTIL 4 MG X 12 TAB</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 33 SANOZ-->
    <div class="modal fade" id="lab33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/300.png" alt="">
                </div>           
                <ul>

                  <li>AFEITADORA SHAVER SENB BIC RISTRA X 12 </li>
                  <li>DIAL JABON LIQUIDO LECHE DE COCO 221 ML</li>
                  <li>PERT ACONDICIONADOR DETOX GRANADA 360 ML</li>
                  <li>PERT ACONDICIONADOR FUERZA  Y VITALIDAD KERATINA  360 ML</li>
                  <li>PERT SHAMPO DETOX GRANADA  400 ML</li>
                  <li>TINTE IGORA VITAL 7 ACEITES CHOCOLATE  TONO 6-68</li>
                  <li>TINTE IGORA VITAL 7 ACEITES RUBI  TONO 6-88 </li>
                  <li>TINTE IGORA VITAL 7 ACEITES RUBIO CLARO  TONO 8-00</li>
                  <li>TINTE SYOSS RUBIO OSCURO TONO 6-8</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

        <!--MODAL 34 VALMOR-->
    <div class="modal fade" id="lab34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/200.png" alt="">
                </div>           
                <ul>

                  <li>ACEVAL 180MG/5ML  SOL X 120ML</li>
                  <li>ACEVAL 650MG X 50 TAB</li>
                  <li>ACIDO FOLICO 10MG X 30 TAB</li>
                  <li>AMOXIVAL 250MG/5ML X 90ML POLVO PARA SUSPENSION</li>
                  <li>AMOXIVAL 250MG-62,5mg/5ML X 60ML POLVO PARA SUSPENSION</li>
                  <li>AMOXIVAL 875MG X 20 TAB</li>
                  <li>AMOXIVAL+ A.C  400mg-57mg/5ml X 60ml</li>
                  <li>ARCOVAL 90 MG X 7 TAB</li>
                  <li>ATORVASTATINA 40MG X 20 TAB</li>
                  <li>BACTEVAL X 24 TAB</li>
                  <li>CANDER 8MG X 30 TAB</li>
                  <li>CANDER-HCT 16MG-12,5MG X 30 TAB</li>
                  <li>CANDER-HCT 8MG-12,5MG X 30 TAB</li>
                  <li>CARBAMAZEPINA 200MG X 20 TAB</li>
                  <li>COLVAL 4MG X 12 COMP</li>
                  <li>CO-SULTRIN X 100ML SUSP PEDIATRICA</li>
                  <li>CO-SULTRIN X 20 COMP</li>
                  <li>DIVAL 50MG X 20 TAB</li>
                  <li>DUROVAL 100MG X 1 TAB</li>
                  <li>DUROVAL 50MG X 1 TAB</li>
                  <li>DUROVAL 50MG X 10 TAB</li>
                  <li>DUROVAL 50MG X 2 TAB</li>
                  <li>DUROVAL 50MG X 3 TAB</li>
                  <li>EPITRAL 100MG X 30 TAB</li>
                  <li>ESQUIDONE 1MG X 30 TAB</li>
                  <li>ESQUIDONE 2MG X 30 TAB</li>
                  <li>ESQUIDONE 3MG X 30 TAB</li>
                  <li>HISTALER 0,5MG/ML X 60ML JARABE</li>
                  <li>HISTALER 5MG X 30 TAB</li>
                  <li>IBUCOLVAL 400MG-4MG X 20 TAB</li>
                  <li>IBUCOLVAL 600MG-4MG X 20 TAB</li>
                  <li>LODESTAR HCT 50MG-12,5MG X 30 TAB </li>
                  <li>LORAVAL 5MG/5ML JARABE X 60ML</li>
                  <li>MOXVAL 400MG X 5 TAB</li>
                  <li>NEULEVAL 500MG X 10 TAB</li>
                  <li>NEULEVAL 750MG X 5 TAB</li>
                  <li>PRELIVAL 150MG X 20 CAP</li>
                  <li>QUETIVAL 25 MG X 30 TAB  RECUBIERTAS</li>
                  <li>TADAFOX 5MG X 30 TAB</li>
                  <li>VITISIVAL SOLUCION ORAL X 240ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--MODAL 35 VARGAS-->
    <div class="modal fade" id="lab35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/48.png" alt="">
                </div>           
                <ul>

                  <li>ANDANTOL JALEA X 20 G N.F.</li>
                  <li>ANTIFOM 40MG X 10 TAB COMP</li>
                  <li>ANTIFOM FORTE 160MG COMP X 10</li>
                  <li>ATROVERAN 10 MG X 10 TAB REC</li>
                  <li>ATROVERAN SOLUCION GOTAS 15 ML</li>
                  <li>BIPROLIL 2,5MG X 15 COMP</li>
                  <li>BIPROLIL 5MG X 15 COMP</li>
                  <li>CARDIPIRINA 80MG X 30 CAP</li>
                  <li>DIHIDROLIP 10 MG X 10  COM  (LERCANDIPINA CLORIDRATO)</li>
                  <li>DIHIDROLIP 20 MG X 10  COM  (LERCANDIPINA CLORIDRATO)</li>
                  <li>ETOROCZIA 60 MG X 10 TAB (BLISTER)</li>
                  <li>FLESPAN 10 MG X 20 COMP</li>
                  <li>HENOVIC SOLUCION OARL GOTAS X 30ML</li>
                  <li>KETAZOL 2% CHAMPU X 60ML</li>
                  <li>KETAZOL 20MG/G CREMA X 15GR</li>
                  <li>LUMBAX 400MG X 10 TAB</li>
                  <li>LUMBAX 800MG X 6 TAB</li>
                  <li>MERTHIOLATE 0,13% SOL INCOLORA X 60ML</li>
                  <li>MERTHIOLATE 0,13% TINTURA ROJA X 60ML</li>
                  <li>MODERAN 10,1G/15ML SOLUCION X 120ML</li>
                  <li>MUCOLIPTO 15/5ML JBE X 90 ML</li>
                  <li>NOVACODIN 50MG/5ML SOLUCION ORAL X 120ML</li>
                  <li>PREVERAL CON DEXTROMETORFANO  3MG -15MG / 5 ML   JARABE X 120ML </li>
                  <li>PROGEST 200 MG X 30 CAP</li>
                  <li>PROMEDINA 2 MG - 7,5 MG/ 5ML SO ORAL X 120ML</li>
                  <li>REFLUXYL SUSPENSION X 120ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>


        <!--MODAL 36 VINCENTI-->
    <div class="modal fade" id="lab36" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/49.png" alt="">
                </div>           
                <ul>

                  <li>BUTROPINA 5MG/ML SOLUCION GOTAS X 20ML</li>
                  <li>CLOE  2 MG + 30MCG X 21 COMP </li>
                  <li>DIACEREINA 50 MG X 10 TAB </li>
                  <li>ESTROGENO CONJU CREM VAG 0,625 MG X 47G </li>
                  <li>FEXOFENADINA CLORHIDRATO 180 MG X 10 TAB </li>
                  <li>FLATVIN 125 MG X 10 CAP BLANDAS</li>
                  <li>FRIXONIL SOLUCION SPRAY X 60ML</li>
                  <li>FUGOLIN 1% CREMA TOPICA X 20GR</li>
                  <li>FUGOLIN 1% CREMA VAGINAL X 50GR</li>
                  <li>FUGOLIN DUAL CREMA X 10 G CAPSULA BLANDA 500MG</li>
                  <li>FUGOLIN SOLUCION X 30ML</li>
                  <li>FUROSIL 50MG/15ML SUSP X 90ML</li>
                  <li>LEVINZOL 1000MG X 30 CAP</li>
                  <li>NOVHEPAR B12 JARABE X 180 ML</li>
                  <li>NOVHEPAR B12 JARABE X 90ML</li>
                  <li>PAPAVERYL 10MG/ML ELIXIR GOTAS X 30ML</li>
                  <li>RIFAMPICINA 300 MG X 4 CAP </li>
                  <li>SINUTIL SOLUCION GOTAS X 30ML</li>
                  <li>SOLUNOVAR COMPUESTO 0,25G-0,15G/100ML JARABE X 120ML</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>


    <!--MODAL 37 VIVAX-->
    <div class="modal fade" id="lab37" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Productos disponibles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body modal2">
                <div class="modalhead">
                  <img src="./img/Laboratorios/50.png" alt="">
                </div>           
                <ul>

                  <li>ALBISEC ONE X 6 TBL</li>
                  <li>ALBISEC X 12 CAP</li>
                  <li>ALIVAX FORTE 650MG X 10 TAB</li>
                  <li>ANTICONCEPTIVO VERONIQ 21 3MG /0,03MG </li>
                  <li>ATOVAROL 40MG X 30  CAP</li>
                  <li>CARVIX X 30 CAP</li>
                  <li>CEVAX ZINC 500mg-7.5 X 30 CAP</li>
                  <li>CLARITROMICINA 500MG X 10 TAB</li>
                  <li>CUTICLIN 10MG X 30 CAP</li>
                  <li>DAYFLU DIA 500MG X 15 CAP</li>
                  <li>DEFEROL 7000 mg x 8 CAPS-</li>
                  <li>EZOLIUM 20 MG X 30 CAP</li>
                  <li>JARIT 100 MG X 30 TAB REC</li>
                  <li>JARIT 200MG X 30 CAP</li>
                  <li>LEVOMAX 500 MG X 10 TAB</li>
                  <li>NEURIBE X 30 CAP</li>
                  <li>VITYBELL CAP X 30</li>                  
            
            
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>



<!------------------------------------------------  Registrate  --------------------------------------------------->

<section id="registrate" class="forms-section">
  
  <div data-aos="zoom-out">
    <h1 style="text-align: center; margin-bottom: 18px;">Regístrate</h1>
  </div>


<!--FORMULARIO vista pc -->

<div class="container-form" id="seccion_registro_pc">

  <div class="btn-cp">
    <div class="col-sm-6" id="preguntas_frecuentes">
          <div class="title2"></div>
      <div class="accordion accordion1 ui-accordion ui-widget ui-helper-reset">
        <div id="quienes_somos">
          <img class="logo_m" src="img/logo-2.png"/>
        </div>
      </div>
    </div>
    <ul class="btn-ss">
      
      <li><label for="signup" class="ancho-proveedor">Proveedor</label></li>
      <li><label for="login" class="ancho">Cliente</label></li>
    </ul>
  </div>
<div id="login-form" class="btn-cliente proveedor">
  <input type="radio" checked id="signup" name="switch" class="hide">
  <input type="radio" id="login" name="switch" class="hide">


  <div class="section-out">
    <section class="login-section">
      <div class="login">
        <form action="PHP/enviar_correo_clientes.php" method="post">
          <ul class="ul-list">
            <p>Cliente</p>
            <p style="font-size: medium; color: black;">
              Siempre mejorando para nuestros clientes, les invitamos a registrarse en nuestra nueva plataforma para pedidos en línea.
            </p>
            <li> <a href="tienda/"><input type="button" class="btn" value="acá"></a> </li>
            <!--li><input type="text" id="nombre_apellido" name="nombre_apellido" required class="input" placeholder="Nombre y Apellido" /><img src="img/formulario-1.png" alt=""></li>
            <li><input type="email" id="email" name="email" required class="input" placeholder="Correo Electrónico" /><img src="img/formulario-5.png" alt=""></li>
            <li><input type="number" id="telefono" name="telefono" required class="input" placeholder="Teléfono Célular" /><img src="img/formulario-4.png" alt=""></li>
            <li><input type="text" id="nombre_farmacia" name="nombre_farmacia" required class="input" placeholder="Nombre de la Farmacia" /><img src="img/formulario-3.png" alt=""></li>

            <li><input type="text" id="rif_cliente" name="rif_cliente" required class="input" placeholder="Rif: Ejemplo J-123456789" /><img src="img/formulario-7.png" alt=""></li>

            <li><input type="text" id="estado" name="estado" required class="input" placeholder="Estado" /><img src="img/formulario-2.png" alt=""></li>

            <li><input type="checkbox" class="aceptar_terminos" id="check1" required> <label for="check1" class="terminos">Acepto los términos y condiciones</label></li>

            <li><input type="submit" value="Enviar" class="btn" id="enviarCorreo_cliente"></li-->
          </ul>
        </form>
      </div>

    
    </section>

    <section class="signup-section">
      <div class="login">
        <form action="PHP/enviar_correo_proveedores.php" enctype="multipart/form-data" method="post">
          <ul class="ul-list">
           <p>Proveedor</p>
            <li><input type="text" id="nombre_apellido_pro" name="nombre_apellido_pro" required class="input" placeholder="Nombre y Apellido" /><img src="img/formulario-1.png" alt=""></li>
            <li><input type="email" id="email_pro" name="email_pro" required class="input" placeholder="Correo Electrónico" /><img src="img/formulario-5.png" alt=""></li>
            <li><input type="number" id="telefono_pro" name="telefono_pro" required class="input" placeholder="Teléfono Célular" /><img src="img/formulario-4.png" alt=""></li>
            <li><input type="text" id="rif_proveedor" name="rif_proveedor" required class="input" placeholder="Rif: Ejemplo J-123456789" /><img src="img/formulario-7.png" alt=""></li>
            <li><input type="text" id="estado_pro" name="estado_pro" required class="input" placeholder="Estado" /><img src="img/formulario-2.png" alt=""></li>
            <li><label for="file_proveedor" class="terminos" >Adjunta catálogo</label></li>
            <li><input type="file" id='file_proveedor' name='file_proveedor' accept="*/*" class="control-file" data-button="Seleccionar" data-empty="Sube un archivo" required /></li>
            <li><input type="checkbox" id="check2" class="aceptar_terminos" required> <label for="check2" class="terminos">Acepto los términos y condiciones</label></li>
            <li><input type="submit" id="enviarCorreo_proveedor" value="Enviar" class="btn"></li>
          </ul>
        </form>
      </div>
    </section>
    
    
  </div>
</div>
</div>
</section>
<footer class="footer" id="contactanos">
  <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: 0" style="background-color: #022d7c;">
    <div class=" uk-margin-auto-vertical" uk-parallax="y: -300,0">   
  <div class="container-footer">
    <div class="footer-logo">
        <img src="./img/Versión-negativa.png" alt="">
        <p>© El Mastranto M&M 2024               </p>
        <a data-toggle="modal" data-target="#aviso" style="
        cursor: pointer;">Políticas de Privacidad y Aviso legal</a>
    </div>
  <div class="footer-sedes">
    <br>
    <br>
    <br>
    <br>
  <h4>SEDE CARRIZAL</h4>
  <p class="p_footer">Calle Núcleo Industrial La Llovizna, Los Vecinos, Local Núcleo Industrial la Llovizna, Los Vecinos N°3-B, Sector Las Llovizna, Carrizal, Edo. Miranda, ZP 1203.
  </p>
    <p class="p_footer">
    Teléfonos: 0412-6176939/0412-6176945
  </p>
  <a href="mailto: rrhh@drogueriaelmastranto.com" class="boton_rrhh">¿Quieres ser parte de nuestro equipo? Click aquí</a>
  <br>
  <br>
  </div>
  <div class="footer-contacto">
    <br>
    <br>
    <br>
    <br>
    <h4>SEDE BARINAS </h4>
    <p class="footer_sede_barinas">C.C. El Dorado, calle Suiza entre Av. Los Llanos y Av. PiedeMonte, Alto Barinas, Estado Barinas.
    </p>
    <p class="footer_sede_barinas">Teléfonos: 0424-5207146/0412-6176943</p>
    </div>  
  </div>
  </div>
</footer>
<div class="modal fade" id="aviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div id="aviso-legal" class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Políticas de Privacidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modalaviso">
        <p><strong>Droguería El Mastranto M&M</strong>, está comprometida con la seguridad de los datos de sus usuarios. Cuando les pedimos llenar los campos de información con la cual usted o su empresa pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.</p>
        <p>La política de privacidad abarca todo lo relativo a la recopilación, uso y protección de la información que lo identifique como persona natural o jurídica, por ejemplo, nombre, dirección, número de teléfono, correo, información crediticia, entre otros.</p>
        <p>Recopilamos su información a través de nuestra fuerza de ventas, o vía web. Esa información se comparte cuando Ud.:</p>
          <p class="politicas">1.- Realiza una transacción con nuestra fuerza de ventas vía web o telemarketing.<br>
          2.- Solicita el servicio de atención al cliente o se comunica con nosotros.<br>
          3.- Actúa en nuestras redes sociales o sitios web, o	participa en un concursos, sorteos, promociones o encuestas.<br>
          4.- El suministro de la información implica su aceptación plena y sin reservas a todas y cada una de las disposiciones incluidas en este aviso legal, por lo que, si usted no está de acuerdo con cualquiera de las condiciones aquí establecidas, no deberá usar o acceder a la aplicación. <br>
        </p>
        <p>No compartimos su información personal, salvo con proveedores de servicios que hacen más eficientes nuestra actividad comercial, como transportistas, marketing y publicidad. No permitimos a nuestros proveedores de servicios que utilicen o compartan su información.</p>
        <p>Usted tendrá acceso a la información personal para actualizarla, modificarla, suprimirla o darse de baja.</p>
        <p><strong>Droguería El Mastranto M&M</strong>, emplea medidas de seguridad razonables para proteger la información que adquiere de sus clientes, indistintamente del medio empleado para adquirir los productos que comercializamos. Capacitamos a nuestros trabajadores que interactúen con su información personal para que lo hagan cuidadosamente.</p>
        <p><strong>Droguería El Mastranto M&M</strong>, puede modificar sus políticas de privacidad cuando lo considere apropiado.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!------------------------------- Para tlf ------------------------------------------>

<footer class="footer_mobile" id="contactanos_mobile">
  <div id="footer_inside" class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-color: #022d7c;">

    <div class=" uk-margin-auto-vertical" uk-parallax="y: 0">
     
  <div class="container-footer">
    <div class="footer-logo">
        <img src="./img/Versión-negativa.png" alt="">
        <p>©El Mastranto M&M 2024               </p>
        <a data-toggle="modal" data-target="#aviso" style="
        cursor: pointer;">Políticas de Privacidad y Aviso legal</a>
    </div>
  <div class="footer-sedes">
  <h4>SEDE CARRIZAL</h4>
  <p class="p_footer">Calle Núcleo Industrial La Llovizna, Los Vecinos, Local Núcleo Industrial la Llovizna, Los Vecinos N°3-B, Sector Las Llovizna, Carrizal, Edo. Miranda, ZP 1203.
  </p>
  <!--p class="p_footer">Av. Independencia, Local N° 16, Sector El Llano de Miquilén, Los Teques, Estado Bolivariano de Miranda, ZP 1201.
  </p-->
  <p class="p_footer">
    Teléfonos: 
  </p>
  <p class="p_footer"><strong>0412-6176939</strong></p>
  <p class="p_footer"><strong>0412-6176945</strong></p>
  <a href="mailto: rrhh@drogueriaelmastranto.com" class="boton_rrhh">¿Quieres ser parte de nuestro equipo? Click aquí</a>

  </div>
  <div class="footer-contacto">
      <br>
  <br>
    <h4>SEDE BARINAS </h4>
  <p class="footer_sede_barinas">C.C. El Dorado, calle Suiza entre Av. Los Llanos y Av. PiedeMonte, Alto Barinas, Estado Barinas.
    </p>
    <p class="footer_sede_barinas">Teléfonos: </p>
    <p class="p_footer"><strong>0424-5207146</strong></p>
    <p class="p_footer"><strong>0412-6176943</strong></p>
    </div>  
  </div>
  </div>
</footer>
<!-- js menu -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="js/script_menu.js"></script>
<!-- Carrusel nuevo -->
<script src='js/slider-new.js'></script> <!-- Carrusel principal -->
<script  src="js/script-carousel-1.js"></script> <!-- Carrusel principal -->
<!-- scripts carousel 2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
<script  src="js/script_carousel2.js"></script> <!-- Carrusel instagram -->
<script  src="js/script_logo_m.js"></script>
<script  src="js/script-count.js"></script>
<script  src="js/script_preload.js"></script>
<!--Script chatbot-->
<script  src="js/script-chatbot.js"></script>
<script>
  $('.carousel').carousel();
</script>
<script>
  AOS.init();
</script>
<script  src="js/script_preguntas.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
<script  src="js/script_aliados.js"></script>
<script  src="js/script_input_file.js"></script>
<!--<script src="js/script-enviar-correo.js"></script>-->
<?php mysqli_close($conection); ?>
</body>
</html>

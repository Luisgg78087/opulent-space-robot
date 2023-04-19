<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Materilize | Carrousel y Media</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <div>
     <div class="div1">
      <ul class="titulos2" >
          <label class="div2">
         
          <label class="yum"><a href="inicio.php"> Inicio </a></label>
      
          <label class="yum"><a href="Animacion.php"> Animacion </a></label>

          <label class="yum"><a href="Peliculas.php"> Peliculas</a></label>

          <label class="yum"><a href="series.php"> Series </a></label>
      </label>
      </label>
      </td>
      </ul>
     </div>
  </div>
</head>
<body>
    
    <div class="container">
         <div class="row">
              <div class="col s12">
                   <h1 class="titulo center-align">MEGACINE</h1>

                   <div class="carousel center-align">
                        <div class="carousel-item"> 
                             
                            <div class="linea-division"></div>
                            <a href="Mario.php"> Super Mario Bros  </a>
                            <img src="IMG/41041-248676-20230404050924.jpg">
                        
                        </div>

                        <div class="carousel-item"> 
                         
                        <div class="linea-division"></div>
                        <a href="shazam.php"> Shazam  </a>
                        <img src="IMG/0a63006130181d8af87237af614a97a9800859268.png">
                        
                    </div>
                    <div class="carousel-item"> 
                        
                        <div class="linea-division"></div>
                        <a href="ant man.php"> Ant-man and the wasp Quantumania </a>
                        <img src="IMG/Ant-man-and-the-Wasp-Quantumania.jpeg">
                    </div>
                    <div class="carousel-item"> 
                         
                        <div class="linea-division"></div>
                        <a href="cyberpunk.php"> Cyberpunk-Edgerunners  </a>
                        <img src="IMG/Cyberpunk-Edgerunners-S1-Poster-en.jpg">
                    </div>
                    <div class="carousel-item"> 
                       
                        <div class="linea-division"></div>
                        <a href="guardianes de la galaxia.php"> Guardianes de la Galaxia vol. 3  </a>
                        <img src="IMG/guardianes-de-la-galaxia-3-poster-2-1676271001.jpg">
                    </div>
                    <div class="carousel-item"> 
                       
                        <div class="linea-division"></div>
                        <a href="winx.php">  Destino: La saga Winx </a>
                        <img src="IMG/descarga (2).jpe">
                    </div>
                    <div class="carousel-item"> 
                         
                        <div class="linea-division"></div>
                        <a href="La ballena.php"> La ballena  </a>
                        <img src="IMG/descarga.jpe">
                    </div>
                    <div class="carousel-item"> 
                        
                        <div class="linea-division"></div>
                        <a href="Krakens y sirenas.php"> Krakens y Sirenas: Conoce a los Gillman  </a>
                        <img src="IMG/descarga (1).jpe">
                    </div>
                   </div>
              </div>
         </div>
    </div> 
         
    <!-- JS Main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<a href="php/cerrar_sesion.php">CERRAR SESION</a>
</body>
</html>
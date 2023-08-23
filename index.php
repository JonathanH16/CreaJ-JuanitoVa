<?php

$conn = mysqli_connect('localhost','root','','juanitova') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `juanitova`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUANITO VA!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../hospital/image/2.png">

</head>
<body>
    
<!-- header -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>JUANITO</strong>VA! </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">sobre nosotros</a>
        <a href="#services">servicios</a>
        <a href="#appointment">sugerencia</a>
        <a href="#" class="fas fa-search"></a>
        <a href="#" class="fa fa-shopping-cart"></a>
        <a href="../JUANITO-VA!/login/update_profile.php" class="fas fa-user"></a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Cuidamos de su salud</h3>
        <p> Una persona que goza de buena salud física es probable que sus funciones y procesos corporales funcionen al máximo.</p>
        <a href="#" class="btn"> learn more <span class="fas fa-chevron"></span> </a>
    </div>
</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>clientes satisfechos</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>farmancias de juanito va!</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Sobre</span> Nosotros </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Medicina de la mejor calidad</h3>
            <p>En Farmacias Juanito Va Buscamos Desarrollar Productos Y Servicios Innovadores, Por Lo Cual Hemos Creado El Primer Programa De Fidelización Del Mercado Farmacéutico, Lanzado En El Año 2023 Como Una Forma De Premiar La Preferencia De Nuestros Clientes Y Con Una Renovación Constante, Ha Sumado Nuevos Beneficios Y Precios Preferenciales En Medicamentos.</p>
            <p>En Farmacia Juanito Va, Cuidamos De Tu Salud Con Asistencia De Enfermería Totalmente Gratis, Cuidando La Salud De Los Salvadoreños.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> Nuestros <span> Servicios</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicinas</h3>
            <p>Productos pre-recetados por su doctor se encuentran aca.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Dermocosmetica</h3>
            <p>Productos para cuido de su piel.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>sugerencias</span> </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>escribe tu sugerencia</h3>
            <input type="text"name="name" placeholder="nombre" class="box">
            <input type="number"name="number" placeholder="numero" class="box">
            <input type="email"name="email" placeholder="email" class="box">
            <input type="date"name="dia" class="box">
            <input type="submit" name="submit" value="envialo" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
        </div>

        <div class="box">
            <h3>info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
        </div>

    </div>

    <div class="credit"> created by <span> Juanito Va!</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>


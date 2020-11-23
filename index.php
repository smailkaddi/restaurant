<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>hotel</title>
  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/one-page.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <a class="navbar-brand" href="index.php">restaurant</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.php">À propos de nous</a>
          </li>
        </ul>
      </div>
  </nav>

  
  <header class="masthead text-center text-white">
    <div class="masthead-content" style="background-image: url(images/navbar.jpg);" >
      <div class="container_text "  >
        <h4 class="masthead-heading mb-0">Restaurant</h4>
        <h6 class="masthead-subheading mb-0">livres rapidement
        </h6>
      </div>
    </div>
  </header>

  <section>
    <div class="container-event">
      <div class="row">
        <div class="col-4" style=" background-image: url(images/03.jpg)" >
        <div style='margin-bottom: 95px;'>
                <h1 style='text-align: center;color:#000 ;border-radius: 17px ;height: 63px;font-family: initial;font-weight: bold'> CHOISIS TON PLATE  </h1> </div>          
          
        </div>
        <div id="content"  style=" background-image: url(images/food.jpg)">
      
       
          <?php
              // la requete mysql
              $result = $conn->query(

                "SELECT * FROM plates WHERE DATE(jour) = CURDATE() order by rand() limit 3 "    );
               
            while( $row = mysqli_fetch_array($result)){
               
                echo "<div id='img_div'>";
                echo "<img src='images/".$row['image']."' >";
                echo "  <div class='p5-'>
                <form method ='POST' action='index.php'.php'> 
                <h2 class='display-4'style='font-weight: bold'; >".$row['nom']."</h2>  
                  <p><span style='color:blue'>Description</span>:  ".$row['des']."</p>
                  <p style='font-weight: bold'><span style='color:red '>Prix</span>:".$row['prix']." DH</p>
                  <button type='button' class='btn btn-dark'> <a href='cmd.php?id=".$row['ID']."'' style='color: #fff' >Pass la command</a></button>
                   <input type='hidden' name='nom' value=".$row['nom']."' >
                   <input type='hidden' name='prix' value=".$row['prix']."' >
                  </form>
                  </div>";
                echo "</div>";
                          }
                  
                        ?>
        </div>
        

      </div>
       <?php
  ?>
  </section>

  



</body>
<script src="style/jquery/jquery.min.js"></script>
<script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
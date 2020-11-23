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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand" href="index.php">restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="masthead-content" style="background-image: url(images/navbar.jpg);">
            <div class="container_text ">
                <h4 class="masthead-heading mb-0">Restaurant</h4>
                <h6 class="masthead-subheading mb-0">livres rapidement
                </h6>
            </div>
        </div>
    </header>

    <section>
        <div class="container-event">
            <div class="row">
                <div class="col-4">
                    <?php
        $result = mysqli_query($conn,"SELECT * FROM plates WHERE ID  ='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($result);
        $id = $_GET['id'];
            ?>

                    <form method="POST" id="frmContactus">
                        <div class="form-group">
                            <label for="formGroupExampleInput">nom client </label>
                            <input type="text" class="form-control" id="client" name="client" placeholder="nom client"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"> adress</label>
                            <input type="text" class="form-control" id="adress" name="adress" placeholder="adress"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"> tel</label>
                            <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">nom plate</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Another input"
                                value="<?php echo $row['nom'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2"><?php echo $row['prix' ]?>DH</label>
                            <input type="hidden" class="form-control" id="prix" name="prix" placeholder="Another input"
                                value="<?php echo $row['prix' ] ?> " style="color: red;">
                        </div>

                        <button type="submit" class="btn1" name="submit" id="submit">Submit</button>

                        <span style="color:green;" id="msg"></span>
                    </form>

                </div>
                <div id="content" style=" background-image: url(images/food.jpg)">


                    <?php
              // la requete mysql
              $result = $conn->query(

              "SELECT * FROM plates WHERE ID  ='" . $_GET['id'] . "'");
              $id = $_GET['id'];
               
            while( $row = mysqli_fetch_array($result)){
                   echo " <div style='margin-bottom: 137px;'>
                    <h1 style='text-align: center;background:#fff;border-radius: -2px;'>   YOUR ORDER </h1> </div>";
                echo "<div id='img_div'>";
                echo "<img src='images/".$row['image']."' >";
                echo "  <div class='p5-'>
                <form method ='POST' action='index.php'.php'> 
                <h2 class='display-4' style='font-weight: bold'>".$row['nom']."</h2>  
                  <p><span style='color:blue'>Description</span>:  ".$row['des']."</p>
                  <p style='font-weight: bold'><span style='color:red'>Prix</span>:".$row['prix']." DH</p>
                   <input type='hidden' name='nom' value=".$row['nom']."' >
                   <input type='hidden' name='prix' value=".$row['prix']."' >
                  </form>
                  </div>";
                echo "</div>";
                          }
                  
                        ?>
                </div>
            </div>
    </section>
    <script>
        jQuery('#frmContactus').on('submit', function (e) {
            jQuery('#msg').html('');
            jQuery('#submit').html('Please wait');
            jQuery('#submit').attr('disabled', true);
            jQuery.ajax({
                url: 'submit.php',
                type: 'post',
                data: jQuery('#frmContactus').serialize(),
                success: function (result) {
                    jQuery('#msg').html(result);
                    jQuery('#submit').html('Submit');
                    jQuery('#submit').attr('disabled', false);
                    jQuery('#frmContactus')[0].reset();
                }
            });
            e.preventDefault();
        });
    </script>



</body>
<script src="style/jquery/jquery.min.js"></script>
<script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
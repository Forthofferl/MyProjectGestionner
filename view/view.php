<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php $pageTitle; ?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?= VENDOR_PATH_BASE; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= VENDOR_PATH_BASE; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div id="wrap">
    <div class="container">
    <!-- Principal -->
    <div class="row" id="main-content">
        <div class="col-md-1"></div>
        <div class="col-md-12">

            <div class="jumbotron">
            <?php if(!isset($vue)) {
                echo "<h2>$messageErreur</h2>";
                echo '<img class="img-responsive center-block" src="'.VIEW_PATH_BASE.'img/glitch.png" alt="Heeee ?!">';
                }
                else require VIEW_PATH.DS.ucfirst($vue).'.php';?>
            </div>

        </div>
    </div>
    </div>
    <!-- Fin principal -->
    <!-- Footer -->
    <div id="push"></div>
    </div>
    <div id="footer">
        <div class="container">
            <p class="credit">MyProjectGestionner<span class="fa fa-copyright"></span> 2018 - <a href=<?php if(strpos(BASE, "apropos")!=false){echo "http://".URL.BASE;} else if(strpos(BASE, "index.php")!=false){echo "http://".URL.BASE."apropos";} else{echo "http://".URL.BASE."index.php/apropos";}?>>À propos</a></p>
        </div>
    </div>
  <!-- Bootstrap core JavaScript-->
  <script  src="<?= VENDOR_PATH_BASE; ?>jquery/jquery.min.js"></script>
  <script  src="<?= VENDOR_PATH_BASE; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script  src="<?= VENDOR_PATH_BASE; ?>jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

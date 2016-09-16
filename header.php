<?php
namespace BingeCoding;
include 'Include/Controller.php';
$a = new Controller();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="index.php" class="navbar-brand">Accueil</a>
       </div>
         <?php if(!isset($_SESSION['pseudo'])&& empty($_SESSION['pseudo'])){
             ?>

                 <div id="navbar" class="navbar-collapse collapse">
                     <form class="navbar-form navbar-right">
                         <div class="form-group">
                             <input type="text" placeholder="Login" class="form-control">
                         </div>
                         <div class="form-group">
                             <input type="password" placeholder="Password" class="form-control">
                         </div>
                         <button type="submit" class="btn btn-success">Connexion</button>
                         <a href="inscription.php"><button href="inscription.php"type="button" class="btn btn-success">Inscription</button></a>
                     </form>
                 </div><!--/.navbar-collapse -->


         <?php
}else {?>
             <div id="navbar" class="navbar-collapse collapse">
             <p>Bonjour <?php echo $_SESSION['pseudo']?></p>
             </div><!--/.navbar-collapse -->

         <?php } ?>
     </div>
   </nav>
  <body>

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
            <a class="navbar-brand" href="index.php">Accueil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Recherche" class="form-control">
                </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Rechecher</button>
            </div>
                 <div class="form-group">
              <a href="favoris.php"><button href="favoris.php" type="button" class="btn btn-success">Favoris</button></a>
            </div>
            <div class="form-group">
              <a href="Upload.php"><button href="Upload.php" type="button" class="btn btn-success">Ajouter un contenu</button></a>
            </div>
            <button type="submit" class="btn btn-success">Déconnexion</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


S
<div class="container">
    <hr>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <h1>Partager une contribution</h1>
        </div>
        <div class="col-md-2 col-md-offset-1">
            <form action="">
                <div class="form-group">
                    <label for="uploadType">Type de contribution</label>
                    <select name="uploadType" id="uploadType" class="form-control">
                        <option value="Video">Video</option>
                        <option value="Musique">Musique</option>
                        <option value="Texte">Texte</option>
                        <option value="Image">Image</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="titre">Titre du contenu : </label>
                    <input type="text" name="titre" id="titre">
                    <form method="post" action="upload.php" enctype="multipart/form-data">
                    <input type="file" name="Parcourir ...">
                </div>
                <hr>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <div><input type="text" name="description" id="Description" size="75">   </div>                  
                    </div>
                </div>             
            </form>            
        </div>

        <hr>

        <div class="col-md-2 col-md-offset-5">
            <button type="submit" class="btn btn-success">Upload le fichier</button>
        </div>
    </div>
</div>

<hr>

<?php
include 'footer.php';
?>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</html>

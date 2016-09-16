<?php
include 'header.php';
?>

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
          <a class="navbar-brand" href="#">Accueil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Recherche" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Rechercher</button>
            </div>
            <div class="form-group">
              <input type="text" placeholder="Login" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Connexion</button>
            <a href="inscription.php"><button href="inscription.php" type="button" class="btn btn-success">Inscription</button></a>

          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<<<<<<< HEAD
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenue, BingeCoding</h1>
        <p>Nouvelle plateforme collaborative de diffusion, développée par des étudiants de deuxième année à l'EPSI dans le campus de Nantes.</p>
      </div>
    </div>

    <div class="container">
      <h3>Vidéos<hr></h3>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h4>Titre vidéo</h4>
          <div class="col-sm-8 col-md-10">
          <a href="#" class="thumbnail">
          </a>
        </div>
        </div>

        <div class="col-md-4">
          <h4>Titre vidéo</h4>
          <div class="col-sm-8 col-md-10">
          <a href="#" class="thumbnail">
          <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
          </a>
        </div>
       </div>

        <div class="col-md-4">
          <h4>Titre vidéo</h4>
          <div class="col-sm-8 col-md-10">
          <a href="#" class="thumbnail">
          <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
          </a>
        </div>
        </div>
      </div>
        <hr>

        <h3>Musiques<hr></h3>
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h4>Titre musique</h4>
            <div class="col-sm-8 col-md-10">
            <a href="#" class="thumbnail">
            <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
            </a>
          </div>
          </div>
          <div class="col-md-4">
            <h4>Titre musique</h4>
            <div class="col-sm-8 col-md-10">
            <a href="#" class="thumbnail">
            <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
            </a>
          </div>
         </div>
          <div class="col-md-4">
            <h4>Titre musique</h4>
            <div class="col-sm-8 col-md-10">
            <a href="#" class="thumbnail">
            <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
            </a>
          </div>
          </div>
        </div>
        <hr>

          <h3>Images<hr></h3>
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h4>Titre image</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
            </div>
            </div>
            <div class="col-md-4">
              <h4>Titre image</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
            </div>
           </div>
            <div class="col-md-4">
              <h4>Titre image</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
              </div>
            </div>
          </div>
          <hr>

          <h3>Textes<hr></h3>
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">

              <h4>Titre texte</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
            </div>
            </div>
            <div class="col-md-4">
              <h4>Titre texte</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
            </div>
           </div>
            <div class="col-md-4">
              <h4>Titre texte</h4>
              <div class="col-sm-8 col-md-10">
              <a href="#" class="thumbnail">
              <img src="http://www.medicalnewstoday.com/content/images/articles/306/306733/pouring-brown-liquor-shots.jpg">
              </a>
            </div>
            </div>
          </div>

<?php
include 'footer.php';
?>

</div>


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

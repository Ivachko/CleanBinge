<?php
include 'header.php';
?>

<<<<<<< HEAD
=======


  <body>
>>>>>>> poutine
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '527829600674863',
          xfbml      : true,
          version    : 'v2.7'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into Facebook.';
        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
      FB.init({
        appId      : '527829600674863',
        cookie     : true,  // enable cookies to allow the server to access
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.5' // use graph api version 2.5
      });

      // Now that we've initialized the JavaScript SDK, we call
      // FB.getLoginStatus().  This function gets the state of the
      // person visiting this page and can return one of three states to
      // the callback you provide.  They can be:
      //
      // 1. Logged into your app ('connected')
      // 2. Logged into Facebook, but not your app ('not_authorized')
      // 3. Not logged into Facebook and can't tell if they are logged into
      //    your app or not.
      //
      // These three cases are handled in the callback function.

      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });

      };

      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Here we run a very simple test of the Graph API after login is
      // successful.  See statusChangeCallback() for when this call is made.
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
    </script>

<<<<<<< HEAD
=======

<?php  
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
?>




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
   <input type "text" placeholder="Recherche" class="form-control"

  <div/>
  <button type="submit" class="btn btn-success">OK</button>

           <div class="form-group">

             <input type="text" placeholder="Email" class="form-control">
           </div>
           <div class="form-group">
             <input type="password" placeholder="Password" class="form-control">
           </div>
           <button type="submit" class="btn btn-success">Se connecter</button>
           <button type="Inscription" class="btn btn-success">Inscription</button>

         </form>
       </div><!--/.navbar-collapse -->
     </div>
   </nav>

>>>>>>> poutine
   <hr>

   <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

     <div class="container">
       <div class="row">
     <div class="col-xs-6 col-sm-6">
      <h1>Bienvenue !</h1>
       <br>
      <p>
         Pourquoi devenir membre ?
      </p>
     </div>
     <div class="col-xs-6 col-sm-6"></div>
     <p>
       - Découvrez de nouveaux artistes !
     </p>
     <p>
       - Suivez les et supportez les !
     </p>
     <p>
       - Partagez vos découvertes avec vos amis !
     </p>
     <p>
       - Devenez vous aussi, un artiste et partagez vos créations !
     </p>
     <div class="clearfix visible-xs"></div>

   </div>
   <div
     class="fb-like"
     data-share="true"
     data-width="450"
     data-show-faces="true">
   </div>
     </div>

     </div>

   <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-1 col-md-offset-5">
         <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
<?php
        echo' <form class="form-inline">
           <div class="form-group">
             <label class="sr-only" for="nom">Nom</label>
          &nbsp   <input class="form-control" id="nom" placeholder="Nom">
           </div>
           <div class="form-group">
             <label class="sr-only" for="Prenom">Prénom</label>
          &nbsp   <input class="form-control" id="Prénom" placeholder="Prénom">
           </div>
           <div class="form-group">
             <label class="sr-only" for="pseudo">Pseudonyme</label>
          &nbsp   <input type="pseudo" class="form-control" id="pseudo" placeholder="Pseudo"required>
           </div>
         <div class="form-group">
           <label class="sr-only" for="exampleInputEmail3">Email address</label>
&nbsp<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
         </div>
         <div class="form-group">
           <label class="sr-only" for="exampleInputPassword3">Password</label>
           &nbsp<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" required>
         </div>
         &nbsp &nbsp &nbsp<button type="submit" class="btn btn-primary">Sign in</button>
       </form>

       </div>
'; ?>
</div>

<?php
include 'footer.php';
?>


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

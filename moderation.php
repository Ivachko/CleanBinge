<?php
include 'header.php'
?>

<body>
<hr>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Modération</h1>
          <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Historique des validation</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Auteur</th>
                    <th>Contribution</th>
                    <th>Date publication</th>
                    <th>Date Validation</th>
                    <th>Validée par </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>JEAN LUC</td>
                    <td>La joconde</td>
                    <td>18/04/2017 12:45</td>
                    <td>21/04/2017 18:45</td>
                    <td><a href="">PutinIsLove</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JEAN LUC</td>
                    <td>La joconde</td>
                    <td>18/04/2017 12:45</td>
                    <td>21/04/2017 18:45</td>
                    <td><a href="">PutinIsLove</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>JEAN LUC</td>
                    <td>La joconde</td>
                    <td>18/04/2017 12:45</td>
                    <td>21/04/2017 18:45</td>
                    <td><a href="">PutinIsLove</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>JEAN LUC</td>
                    <td>La joconde</td>
                    <td>18/04/2017 12:45</td>
                    <td>21/04/2017 18:45</td>
                    <td><a href="">Ivachko</a></td>
                </tr>
                </tbody>

            </table>
            <hr>
        </div>

        <div class="col-md-12">
            <h2>Contribution à valider</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Auteur</th>
                        <th>Contribution</th>
                        <th>Postée le </th>
                        <th>Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Momo</td>
                        <td>L'origine de la vie</td>
                        <td>19/02/2017 14:34</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> | <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                    </tr>
                    </tbody>
                </table>
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

<?php

namespace BingeCoding;
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 14/09/2016
 * Time: 09:57
 */
include 'Include/Controller.php';
$a= new Controller();
Controller::Need("Include/Moderateur.php");
Controller::Need("Include/Contenu.php");
Controller::Need("Include/Upload.php");
var_dump(Moderateur::getByPseudo("Test"));
/*Contenu::AddContenu(array("Nom"=>"La joconde",
                          "Date_Ajout"=>"2016-09-14 00:00:00",
                          "Description"=>"ouhdiucdhiulgdciuksgdhdkyfkghxo_gfvbdiu",
                          "idType"=>"1",
                          "idAuteur"=>"1",
                          "urlFichier"=>"hgkfg"));
*/
var_dump(Contenu::getBy("Nom","La joconde"));
?>
<?php
$a= new Upload();
var_dump($a->final);
?>
<form action="#" method="POST" enctype="multipart/form-data">
    <select name="Type" id="type">
        <option value="Video">Video</option>
        <option value="Texte">Text</option>
        <option value="Audio">Audio</option>
        <option value="image">image</option>

    </select>
    <input type="file" name="test">
    <input type="submit"/>
</form>


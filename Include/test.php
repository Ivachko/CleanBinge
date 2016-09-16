<?php
include('Controller.php');
include('bdd.php');
include('Moderateur.php');
include('Utilisateur.php');
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 13/09/2016
 * Time: 18:43
 */
use BingeCoding\Bdd;
use BingeCoding\Moderateur;
use BingeCoding\Utilisateur;

//var_dump(Moderateur::getAll());
var_dump(Utilisateur::getAll());

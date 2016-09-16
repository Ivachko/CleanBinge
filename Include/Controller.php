<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 14/09/2016
 * Time: 08:38
 */

namespace BingeCoding;
<<<<<<< HEAD
use \PDO;
use \PDOException;

=======
use BingeCoding\Moderateur;
use PDO;
use BingeCoding\Bdd;
use BingeCoding\Utilisateur;
>>>>>>> poutine

class Controller
{

    static protected $f;
    function __construct()
    {
<<<<<<< HEAD


        self::$f=self::Connexion("localhost","bingeconding","root","");
=======
        include ('Bdd.php');
        include ('Moderateur.php');
        include ('Utilisateur.php');
        $f=Bdd::Connexion("localhost","bingeconding","root","lol");
>>>>>>> poutine
    }
    public static function Connexion($host,$dbname,$user,$pass){
        try {
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $pass);
            return $dbh;

<<<<<<< HEAD
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public static function Need($File){
        if(is_file($File)){
            require($File);
        }
    }
}
=======
}
>>>>>>> poutine

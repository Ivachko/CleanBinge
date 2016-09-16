<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 14/09/2016
 * Time: 08:38
 */

namespace BingeCoding;

use \PDO;
use \PDOException;




class Controller
{

    static protected $f;
    function __construct()
    {
        session_start();
        self::$f=self::Connexion("localhost","bingeconding","root","");

    }
    public static function Connexion($host,$dbname,$user,$pass){
        try {
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $pass);
            return $dbh;


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


<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 13/09/2016
 * Time: 18:30
 */

namespace BingeCoding;



class Utilisateur extends Controller
{

    private $idUtilisateur;
    private $Pseudo;
    private $Password;
    private $Prenom;
    private $Nom;
    private $Date_Creation;
    private $Mail;

    /**
     * Moderateur constructor.
     * @param $idUtilisateur
     * @param $Pseudo
     * @param $Password
     * @param $Mail
     * @param $Date_Creation
     * @param $Prenom
     * @param $Nom
     */
    public function __construct($idModerateur, $Pseudo, $Password, $Mail, $Date_Creation, $Nom, $Prenom)
    {
        $this->idUtilisateur = $idUtilisateur;
        $this->Pseudo = $Pseudo;
        $this->Password = $Password;
        $this->Prenom = $Prenom;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Date_Creation = $Date_Creation;
    }

    /***
     * Recupère tous les modérateurs
     * @return mixed
     */
    public static function getAll(){

        $s = self::$f->query("SELECT * FROM utilisateur");
        $resultat = $s->fetch(PDO::FETCH_OBJ);

        return $resultat;
    }

    public static function getBy($arg,$type){

        $s = $f->query("SELECT * FROM utilisateur WHERE ".$type."=".$arg."");
        $resultat = $s->fetch(PDO::FETCH_OBJ);
        return $resultat;
    }
}

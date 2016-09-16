<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 13/09/2016
 * Time: 18:30
 */

namespace BingeCoding;
use \PDO;
use \PDOException;



class Utilisateur extends Controller
{


    private $Pseudo;

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->Pseudo;
    }

    /**
     * @param mixed $Pseudo
     */
    public function setPseudo($Pseudo)
    {
        $this->Pseudo = $Pseudo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }
    private $Password;
    private $Prenom;
    private $Nom;
    private $Mail;

    /**
     * Moderateur constructor.
     * @param $Pseudo
     * @param $Password
     * @param $Mail
     * @param $Prenom
     * @param $Nom
     */
    public function __construct($Pseudo, $Password, $Mail, $Nom, $Prenom)
    {

        $this->Pseudo = $Pseudo;
        $this->Password = $Password;
        $this->Mail = $Mail;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;

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

        $s = self::$f->query("SELECT * FROM utilisateur WHERE ".$type."=".$arg."");
        $resultat = $s->fetch(PDO::FETCH_OBJ);
        return $resultat;
    }
    public function Adduser(){
        try {
            $sql = "INSERT INTO utilisateur(Nom,Prenom,Mail,Pseudo,Password) VALUES (:Nom,:Prenom,:Mail,:Pseudo,:Password)";
            $password= md5($this->Password);
            $req = self::$f->prepare($sql);

            $req->bindParam(':Nom', $this->Nom, PDO::PARAM_STR);
            $req->bindParam(':Prenom',$this->Prenom, PDO::PARAM_STR);
            $req->bindParam(':Mail',$this->Mail, PDO::PARAM_STR);

            $req->bindParam(':Pseudo',$this->Pseudo, PDO::PARAM_STR);
            $req->bindParam(':Password',$password, PDO::PARAM_STR);


            $req->execute();

            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }
}

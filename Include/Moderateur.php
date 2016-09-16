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


class Moderateur extends Controller
{

    private $idModerateur;
    private $Pseudo;
    private $Password;

    /**
     * Moderateur constructor.
     * @param $idModerateur
     * @param $Pseudo
     * @param $Password
     */
    public function __construct($idModerateur, $Pseudo, $Password)
    {
        $this->idModerateur = $idModerateur;
        $this->Pseudo = $Pseudo;
        $this->Password = $Password;
    }

    /***
     * Recupère tous les modérateurs
     * @return mixed
     */
    public static function getAll(){
        var_dump(self::$f);
        $s = self::$f->query("SELECT * FROM moderateur");
        $s->execute();
        $resultat = $s->fetchAll(PDO::FETCH_OBJ);

        return $resultat;
    }

    /***
     * Get Modo by id
     * @param $id
     * @return array
     */
    public static function getById($id){
        try {
            $s = self::$f->prepare("SELECT * FROM moderateur WHERE idModerateur = " . $id . " ");
            $s->execute();
            $resultat = $s->fetchAll(PDO::FETCH_OBJ);
            return $resultat;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    /***
     * Get modo by pseudo
     * @param $pseudo
     * @return array
     */
    public static function getByPseudo($pseudo){
        try{
            $s = self::$f->prepare("SELECT * FROM moderateur WHERE Pseudo LIKE '".$pseudo."'");

            $s->execute();
            $resultat = $s->fetchAll(PDO::FETCH_OBJ);
            return $resultat;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    /***
     * Insert un moderateur dans la base de données
     * @param array $arg
     * @return bool
     */
    public static function AddModerateur($arg=array()){

        try {
            $sql = "INSERT INTO moderateur(Pseudo,Password) VALUES (:Pseudo,:Password)";
            $req = self::$f->prepare($sql);
            $arg["Password"]=md5($arg["Password"]);
            $req->bindParam(':Pseudo', $arg['Pseudo'], PDO::PARAM_STR);
            $req->bindParam(':Password',$arg['Password'], PDO::PARAM_STR);
            $req->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }
}

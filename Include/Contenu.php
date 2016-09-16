<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 14/09/2016
 * Time: 11:17
 */

namespace BingeCoding;
use \PDO;
use \PDOException;

/***
 * Gère l'ajout de contenu à la bdd ainsi que la recherche dans la bdd de contenu
 * Class Contenu
 * @package BingeCoding
 */
class Contenu extends Controller
{
    public static function getAll(){
        var_dump(self::$f);
        $s = self::$f->query("SELECT * FROM contenu");
        $s->execute();
        $resultat = $s->fetchAll(PDO::FETCH_OBJ);

        return $resultat;
    }
    public static function getBy($attribu,$valeur){
        try {
            $s = self::$f->prepare("SELECT * FROM contenu WHERE ".$attribu." LIKE '" . $valeur. "'");
            var_dump($s);
            $s->execute();
            $resultat = $s->fetchAll(PDO::FETCH_OBJ);
            return $resultat;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    /***
     * Ajoute du contenu
     * @param array $arg
     * @return bool
     */
    public static function AddContenu($arg=array()){

        try {
            $sql = "INSERT INTO contenu(Nom,Date_Ajout,Description,idType,idAuteur,urlFichier) VALUES (:Nom,:Date_ajout,:Description,:idType,:idAuteur,:urlFichier)";
            $req = self::$f->prepare($sql);

            $req->bindParam(':Nom', $arg['Nom'], PDO::PARAM_STR);
            $req->bindParam(':Date_ajout',$arg['Date_ajout'], PDO::PARAM_STR);
            $req->bindParam(':Description',$arg['Description'], PDO::PARAM_STR);

            $req->bindParam(':idType',$arg['idType'], PDO::PARAM_STR);
            $req->bindParam(':idAuteur',$arg['idAuteur'], PDO::PARAM_STR);
            $req->bindParam(':urlFichier',$arg['urlFichier'], PDO::PARAM_STR);

            $req->execute();

            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }
}
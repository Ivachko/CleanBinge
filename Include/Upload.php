<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 14/09/2016
 * Time: 14:26
 */

namespace BingeCoding;

/***
 * Gere l'envois des fichiers dans les repertoires ainsi que l'envois à la bdd des fichiers
 * Class Upload
 * @package BingeCoding
 */
class Upload extends Controller
{
    public  $final=array();

    /**
     * @return array
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * @param array $final
     */
    public function setFinal($final)
    {
        $this->final = $final;
    }
    /***
     * Upload constructor.
     */
    public function __construct()
    {
        if(isset($_POST)&&!is_null($_POST)) {

            var_dump($_POST);
            var_dump($_FILES);
            var_dump($_SERVER);
            $dossier = $this->choiceFolder($type=$this->getType($_FILES['test']['type']));
            if($dossier!=false){
                $nom=$this->getName($_FILES['test']['name']);
                $encryptname =$dossier.$this->encryptName($nom).".".$this->getExtension($_FILES['test']['name']);
                if(move_uploaded_file($_FILES['test']['tmp_name'], "Upload/".$encryptname)){
                    echo "upload de ".$nom.".".$this->getExtension($_FILES['test']['name'])." ok";
                    $url = $this->createUrl($encryptname);
                    $this->setFinal(array($url,$type));

                }
                else{
                    echo "erreur";
                }
            }else{
                echo "UPLOAD IMPOSSIBLE EXTENSION DE FICHIER INCORRECT";
            }


        }

    }

    /***
     * Créer l'url du fichier upload
     * @param $nameencrypted
     * @return string
     */
public function createUrl($nameencrypted){
    $s=explode("/",$_SERVER['REQUEST_URI']);
    array_pop($s);
    return "http://".$_SERVER['HTTP_HOST']."".implode($s,"/")."/Upload/".$nameencrypted;
   }

    /***
     * Renvois l'exention du fichier
     * @param $filename
     * @return mixed
     */

    public function getExtension($filename){
        $x=explode(".",$filename);

        return end($x);
    }
    /**
     * Retourne le nom du fichier
     * @param $filename
     * @return string
     *
     */
    public function getName($filename){
        $x=explode(".",$filename);
            array_pop($x);
            return implode($x);
    }

    /***
     * Encrypte le nom du fichier de façon unique
     * @param $filename
     * @return string
     *
     */
    public function encryptName($filename){
        return md5($this->getName($filename).date("Y-m-d H:i:s"));
    }

    /***
     * Recupère le files type et le casse en deux dans un tableaux
     * @param $filename
     * @return array
     */
    public function getType($filename){
            $s = explode("/",$filename);
        return $s;
    }

    /***
     * En fonction du format il choisi le bon dossier
     * @param array $filetypes
     * @return string
     */
    public function choiceFolder($filetype=array()){

        switch($filetype[0]){
            case "image":
                return $dossier = "image/";
                break;
            case "video":
                return $dossier = "video/";
                break;
            case "audio":
                return $dossier = "audio/";
                break;
            case "text":
                return $dossier = "text/";
                break;
            default:
               return false;

        }

    }
public function returnAll($url,$type){
    return array($url,$type);
}
}
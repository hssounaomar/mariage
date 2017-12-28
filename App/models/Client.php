<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/12/2017
 * Time: 16:22
 */

class Client
{
private $id;
private $nom;
private $prenom;
private $email;
private $cin;
private $adresse;
private $telephone;

    /**
     * Client constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
public static function insertClient($nom,$prenom,$email,$telephone,$cin,$adresse){
        $db=Db::getInstance();
       $req= $db->prepare("insert into clients (nom,prenom,email,cin,adresse,numero) values (:nom,:prenom,:email,:adresse,:cin,:numero) ");
        $req->execute(array("nom"=>$nom,
            "prenom"=>$prenom,
            "email"=>$email,
            "adresse"=>$adresse,"cin"=>$cin,"numero"=>$telephone));

}
public  static  function findClientByEmail($email){
    $cl=null;
    $db = Db::getInstance();
    $req=$db->query('SELECT * FROM clients where email='.$email);
    $client=  $req->fetch();

    if(isset($client)){
        $cl=new Client();
        $cl->setAdresse($client['adresse']);
        $cl->setCin($client['cin']);
        $cl->setEmail($client['email']);
        $cl->setId($client['id']);
        $cl->setNom($client['nom']);
        $cl->setPrenom($client['prenom']);
        $cl->setTelephone($client['numero']);
    }
    return $cl;
}
}
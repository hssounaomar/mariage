<?php
class Voyage {
	private $id;
	private $nom;
	private $prix;
	private $note;
	private $description;
	private $date_depart;
    private $date_retour;
    private $nb_places;
    private $periode;


    /**
     * Voyage constructor.
     * @param $id
     * @param $nom
     * @param $prix
     * @param $note
     * @param $description
     * @param $date_depart
     * @param $date_retour
     * @param $nb_places
     * @param $valide
     */

    public function __construct($id='', $nom='', $prix='', $note='', $description='', $date_depart='', $date_retour='', $nb_places='',$periode='')
    {

        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->note = $note;
        $this->description = $description;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->nb_places = $nb_places;
$this->periode=$periode;
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
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->date_depart;
    }

    /**
     * @param mixed $date_depart
     */
    public function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }

    /**
     * @return mixed
     */
    public function getDateRetour()
    {
        return $this->date_retour;
    }

    /**
     * @param mixed $date_retour
     */
    public function setDateRetour($date_retour)
    {
        $this->date_retour = $date_retour;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nb_places;
    }

    /**
     * @param mixed $nb_places
     */
    public function setNbPlaces($nb_places)
    {
        $this->nb_places = $nb_places;
    }


public static function getAll() {
      $list = [];
    $db = Db::getInstance();
      $req = $db->query('SELECT * FROM voyages');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $voyage) {

        $list[] = new Voyage($voyage['id'],$voyage['nom'],$voyage['prix'],$voyage['note'],$voyage['description'],$voyage['date_depart'],$voyage['date_retour'],
            $voyage['nb_places']);

      }

      return $list;
    }
    public static function getImages($id=''){
        $list = '';
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM voyage_images where id_voyage ='.$id);

        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $voyage) {

            $list = $voyage['nom'];

        }

        return $list;
    }
    public  static  function findVoyageById($id=''){
        $voy=null;
        $db = Db::getInstance();
        $req=$db->query('SELECT * FROM voyages where id ='.$id);
      $voyage=  $req->fetch();

      if(isset($voyage)){
          $voy=new Voyage($voyage['id'],$voyage['nom'],$voyage['prix'],$voyage['note'],$voyage['description'],$voyage['date_depart'],$voyage['date_retour'],
              $voyage['nb_places']
          );
      }
      return $voy;
    }
    public static function decrementNbPlaces($id){
        $db=Db::getInstance();
        $req= $db->prepare("update voyages set nb_places=nb_places-1 where id = ".$id);
        $req->execute();
    }
    public function filterVoyage($date,$periode){
$voy=[];
$db = Db::getInstance();
if($periode>0)
$req=$db->query("SELECT * FROM voyages where date_depart ='".$date."'and periode=".$periode);
else
    $req=$db->query("SELECT * FROM voyages where date_depart ='".$date."'");


while($voyage=$req->fetch()){

        $voy[] = new Voyage($voyage['id'], $voyage['nom'], $voyage['prix'], $voyage['note'], $voyage['description'], $voyage['date_depart'], $voyage['date_retour'],
            $voyage['nb_places'],$voyage['periode']
        );

}
return $voy;
}

}
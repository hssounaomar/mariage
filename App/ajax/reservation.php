
<?php
if((isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['email']))&&(isset($_POST['telephone']))&&(isset($_POST['id_voyage'])&&(isset($_POST['cin'])))){
//insertion client
require_once '../DB.php';
    require_once '../models/Client.php';
    $client=new Client();
    //($nom,$prenom,$email,$telephone,$cin,$adresse)
    $client->insertClient($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['cin'],'');
    $db = Db::getInstance();
    $req=$db->query("SELECT * FROM clients where email='".$_POST['email']."'");
   $cl= $req->fetch();


    $req=$db->prepare("insert into reservation_voyage(id_voyage,id_client) VALUES (:id_voyage,:id_client)");
    $req->execute(array("id_client"=>$cl['id'],"id_voyage"=>$_POST['id_voyage']));

}
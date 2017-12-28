<script>console.log("hellooo");</script>
<?php
if((isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['email']))&&(isset($_POST['telephone']))&&(isset($_POST['id_voyage'])&&(isset($_POST['cin'])))){
//insertion client
require_once '../DB.php';
    require_once '../models/Client.php';
    $client=new Client();
    //($nom,$prenom,$email,$telephone,$cin,$adresse)
    $client->insertClient($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['cin'],'');
   $cl= $client->findClientByEmail($_POST['email']);//getClient



}
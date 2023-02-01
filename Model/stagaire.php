<?php


function Connixion(){    
$host = 'localhost';
$database = 'ofppt';
$username = 'hamza104';
$passowrd = '2003';
$connexion = new PDO("mysql:host=$host;dbname=$database", $username, $passowrd);
return $connexion ;
};


function Selection (){
    $conx=Connixion();
   $stagaire = $conx->query("SELECT * FROM stagaire");
  $stagaire->fetch();
   return $stagaire;// return toutes les donnes des stagaire 

}
function Insert(){
  extract($_POST);//qui permet extract le table de des inputs 
  $conx=Connixion();
  $requet=$conx->prepare("INSERT INTO stagaire VALUES (null,?,?,?,?)");
  $requet->execute(array($nom,$prenom,$age,$login));//$nom =$_POST['nom'],$nom =$_POST['prenom'],...
  return $requet;
    
}
function SelectionOne()
{
  $conx = Connixion();
  $stagaireOne = $conx->query("SELECT * FROM stagaire WHERE idStagaire>2 ");
  $stagaireOne->fetch();
  return $stagaireOne;
}

function Delete($id){
 $conx=Connixion();
 $sqlstmt=$conx->prepare("DELETE FROM stagaire WHERE  idStagaire=?");
 $sqlstmt->execute(array($id));
  return $sqlstmt;
}
### update

function Updatee(){
extract($_POST);// extract les new valeur from updating form id,nom,prenom,age,login 
$conx=Connixion();
$sqlstmt=$conx->prepare("UPDATE stagaire SET nom=:nom,prenom=:prenom,age=:age,login=:login WHERE idStagaire=:id ");
$sqlstmt->execute(array("nom"=>$nom,"prenom"=>$prenom,"age"=>$age,"login"=>$login,"id"=>$id));
}

/// function qui return toutes les valeur d'une stagaires selection 
function infoUpdate($id){
  $conx = Connixion();
  $stagaire = $conx->prepare("SELECT * FROM stagaire WHERE  idStagaire=?");// return the selected idStagaire  data 
  $stagaire->execute(array($id));
  return $stagaire->fetch();
}



?>
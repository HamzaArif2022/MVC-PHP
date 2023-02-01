<?php
require_once('Model/stagaire.php'); /// importe le database from model 

/// contient la selection de la base de donne et affecte ala page view 
function ListstagaireAction()
{
    $stagaire = Selection(); // variable qui contient  select //call the selection function contain the select
    require_once('View/ListStagaire.php'); // importe la vue  from view 

};

/// creation 
function CreateAction()
{
    require('View/createStg.php'); //contient just la formuliere
}
function StoreInsert()
{
    Insert();
    header('location:index.php?action=list');
}

///// deleting
function DeleteAction()
{
    $id = $_GET['id']; // passe id par la page DeleteStg.php pour reautilise 
    require_once('View/DeleteStg.php'); // appel direct au render  de  la page  
};
function Deleted()
{
    $id = $_GET['id'];
    Delete($id);
    header('location:index.php?action=list');
}
// update 
function UpdateAction()
{
    $id = $_GET['id'];
    $stagaire = infoUpdate($id); ##appel de la la selection from la base de donne de tout les stagaire de id 
    require_once('View/EditStg.php');
};

function Update()
{
    Updatee();
    header('location:index.php?action=list');
};
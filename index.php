<?php

require('Controller/StagaireController.php');
// ListstagaireAction()// contient le deux file data stagaire in model and liststagaire in view
if (isset($_GET['action'])) {
    // echo $_GET['action'];
    $action= $_GET['action'];
    switch ($action) {
        case 'create':
            CreateAction();
            break;
        case 'list':
            ListstagaireAction();
            break;
        case 'Ajouter':
            CreateAction();
            
            break;
        case 'insert':
            StoreInsert();

            break;
        case 'delete':
            DeleteAction();

            break;
                
        case 'Deleted':
            Deleted();
            break;

            
            case 'edit':
             UpdateAction();
            break;
            
            case 'updating':
            Update();
            break ; 
        default:
            # code...
            break;
    }
}
// affiche le page des stagaires 
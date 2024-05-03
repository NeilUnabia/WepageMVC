<?php
    include 'Controller/PagesController.php';

    $pagesController = new PagesController();
    $uriSegment =  explode("/",$_SERVER["REQUEST_URI"]);

    if( array_key_exists(3, $uriSegment) ){
        switch($uriSegment[3]):
            case "home":    $pagesController->home();
                            break;
            case "form":    $pagesController->form();
                            break;
            default:
                        $pagesController->error("404");
        endswitch;
    }else{
        $pagesController->error("404");
    }
?>
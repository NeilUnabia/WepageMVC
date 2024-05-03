<?php 
    class PagesController{

        function home(){
            include "./View/home.php";
        }

        function form(){
            include "./View/form.php";
        }

        function error($httpStatus){
            switch($httpStatus):
                    case 404:
                        include "./View/404.php";
            endswitch;
        }
    }
?>
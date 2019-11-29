<?php
    // require_once("model/views.model.php");

    class ViewsController {
        private $dashboard;

        public function __CONSTRUCT(){
            // $this->dashboard=new ViewsModel();
        }
        function main(){ // Vista de landing
            require_once ('views/include/scope.header.landing.php');
            require_once ('views/include/scope.msn.php');
            require_once ('views/include/scope.menuLeft.landing.php');
            require_once ('views/modules/landing/index.php');
            require_once ('views/include/scope.footer.landing.php');
        }
        function dashboard(){
            if(isset($_SESSION['perfil'])){
                require_once ('views/include/scope.header.php');
                require_once ('views/dashboard.php');
                
            }else{
                
                Header('Location: login');
            }

        }

    }
?>
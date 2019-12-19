<?php
    require_once "model/auth.model.php";

    class AuthController{
        private $auth;

        public function __CONSTRUCT(){
            $this->auth = new AuthModel();
        }
        public function login(){
            $data = $_POST['data'];
            $result = $this->auth->readByUser($data);
            if($result['email']){
                if(password_verify($data[1], $result['password']) ) {
                    $_SESSION['message'] = 'Bienvenido';
                    $_SESSION['perfil']['id'] = $result['id'];
                    // die();
                    // $_SESSION['perfil']['nombre']
                    // $_SESSION['perfil']['apellido']
                    // $_SESSION['perfil']['correo']
                    // $_SESSION['perfil']['foto']
                    Header('Location: inicio');
                } else {
                    $_SESSION['message'] = 'Contraseña invalida';
                    Header('Location: landing');
                }
            } else {
                $_SESSION['message'] = 'El usuario no existe';
                Header('Location: landing');
            }
        }
        public function logout(){
			      // session_unset();
            session_destroy();
            Header('Location: landing');
        }
    }
?>

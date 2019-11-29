<?php

    class AuthModel{
        
        private $auth;

        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::openDB();            
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $code = $e->getCode();
                $text = $e->getMessage();
                $file = $e->getFile();
                $line = $e->getLine();
    
                DataBase::createLog($code, $text, $file, $line);
            }
        }
        public function readByUser($data){
            try {
                $sql="SELECT id, email, `password` FROM users WHERE email = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0]));
                $result =  $query->fetch(PDO::FETCH_BOTH);
            }catch(PDOException $e){
                $result = $e->getMessage();
            }
            return $result;
        }
    }

?>
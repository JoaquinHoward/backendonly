<?php
    class UserModel{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function register_user(string $real_name, string $user_name, string $password_hash){
            try{
                #command blueprint
                $sql = "INSERT INTO register (real_name, user_name, password_hash) VALUES (:real_name, :user_name, :password_hash)";
                #preparation
                $sql = $this->pdo->prepare("$sql");
                #execution
                $sql->execute(['real_name'=>$real_name, 'user_name'=>$user_name, 'password_hash'=>$password_hash]);
                return true;
            }catch(PDOException $event){
                if($event->getCode() === '23000'){
                    return false;
                }
                throw $event;
            }
        }
    }
?>
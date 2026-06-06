<?php
    class UserModel{
        # declare pdo
        private $pdo;
        # make __construct function
        public function __construct($pdo){
            $this->pdo = $pdo;
        }
        # make the register user
        public function register_user(string $real_name, string $user_name, string $hashed_password){
            try{
                #command blueprint
                $sql = "INSERT INTO register (real_name, user_name, password_hash) VALUES (:real_name, :user_name, :password_hash)";
                #preparation
                $sql = $this->pdo->prepare($sql);
                #execution
                $sql->execute(['real_name'=>$real_name, 'user_name'=>$user_name, 'password_hash'=> $hashed_password]);
                return true;
            }catch(PDOException $event){
                if($event->getCode() === '23000'){
                    return false;
                }
                throw $event;
            }
        }

        public function get_user_by_username(string $user_name){
            try{
                #command blueprint
                $sql = "SELECT * FROM register WHERE user_name = :user_name";
                #preparation
                $sql = $this->pdo->prepare($sql);
                #execution
                $sql->execute(["user_name"=>$user_name]);
                #fetch
                $user = $sql->fetch();
                $user_exists = !empty($user);
                return true;
            }catch(PDOException $event){
                if($event->getCode === '23000'){
                    return false;
                }
                throw $event;
            }
        }
    }
?>
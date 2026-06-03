<?php
    class TaskModel{
        # declare pdo
        private $pdo;
        # make __construct function
        public function __construct($pdo){
            $this->pdo = $pdo;
        }
        # make the create task function
        public function create_task(string $user_id, string $title, string $description){
            try{
                #command blueprint
                $sql = "INSERT INTO tasks (user_id, title, description) VALUES (:user_id, :title, :description)";
                #preparation
                $sql = $this->pdo->prepare($sql);
                #execution
                $sql->execute(['user_id'=>$user_id, 'title'=>$title, 'description'=>$description]);
                return true;
            }catch(PDOException $event){
                throw $event;
            }
        }

        public function get_task_by_user_id(int $user_id){
            try{
                #command blueprint
                $sql = "SELECT * FROM tasks WHERE user_id = :user_id";
                #preparation
                $sql = $this->pdo->prepare($sql);
                #execution
                $sql->execute(['user_id'=>$user_id]);
                #fetch
                $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $tasks;
            }catch(PDOException $event){
                throw $event;
            }
        }

        public function delete_task_by_task_id(int $task_id){
            try{
                #command blueprint
                $sql = "DELETE FROM tasks WHERE task_id = :task_id";
                #preparation
                $sql = $this->pdo->prepare($sql);
                #execution
                $sql->execute(['task_id' => $task_id]);
            }catch(PDOException $event){
                throw $event;
            }
        }
    }
?>
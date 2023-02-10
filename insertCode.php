<?php 
include 'database.php';
class User{

    public function addUser(){
        if(isset($_POST['submit'])){
            $name = $_POST['usrname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordRepeat = $_POST['passwordRepeat'];
            $dbObj = new DB();
            $dbObj->insertOperatin($name, $email, $password, $passwordRepeat);
                // try{
                   
                // }catch(Exception $e){
                //     echo $e->message();
                // }
           
        }


    }

}

$User = new User();
$User->addUser();
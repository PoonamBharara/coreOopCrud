<?php


class DB{

    function __construct(){


        try{       
            $db = mysqli_connect('localhost', 'root', 'root', 'coreOopCrud');
            $this->db = $db;
        }catch(Exception $e){
            echo $e->message();
        }
    }


    public function insertOperation($name, $email, $password, $passwordRepeat){

        try{
            $query = mysqli_query($this->db, "insert into tblusers(usrname, email, password, passwordRepeat) 
            values('$name', '$email', '$password', '$paswordRepeat')");
            
        }catch(Exception $e){
            echo $e->message();
        }

    }
}
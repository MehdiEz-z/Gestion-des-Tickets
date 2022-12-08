<?php

namespace App\Classes;

use PDO;
use PDOException;


class User extends Connection
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $image;
    public $pic;
    public $is_admin;

    //=================================== setters ===================================//
    
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name): void
    {
        $this->last_name =  $last_name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setPic($pic): void
    {
        $this->pic = $pic;
    }
    

    public function setAdmin($is_admin): void
    {
        $this->is_admin = $is_admin;
    }


    //=================================== methods ===================================//

    public function signup(){
    
        $stmt = $this->connect()->prepare("INSERT INTO user VALUES ( ?,?,?,?,?,?,? )");
        $stmt->execute([NULL,$this->first_name,$this->last_name,$this->email,$this->password,1,$this->pic]);
        move_uploaded_file($this->image, '../assets/images/users pfp/'.$this->pic);

    }

    public function login(){
    
        $stmt = $this->connect()->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $stmt->execute([$this->email,$this->password]);
        $user = $stmt->fetch();

        return $user;
    }
    
    public function update($id){
        
        $stmt = $this->connect()->prepare("UPDATE user SET first_name= ? , last_name= ? , email= ? ,
        password=? ,image=?   WHERE id='$id' ");  
        $stmt->execute([$this->first_name,$this->last_name,$this->email,$this->password,$this->pic]);      
        move_uploaded_file($this->image, '../assets/images/users pfp/'.$this->pic);

    }
    
    public function delete($id){
        $stmt = $this->connect()->prepare("DELETE FROM user WHERE id=?");
        $stmt->execute([$id]);
        unset($_SESSION['userId']);
    } 

    public function display( $id ){
  
        $stmt = $this->connect()->prepare("SELECT * FROM user WHERE id=? ");
        $stmt->execute([$id]);
        $users = $stmt->fetch();

        return  $users;
     
    } 

    public function logout(){
        unset($_SESSION['userId']);
    } 
}



?>
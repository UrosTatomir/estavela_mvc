<?php
require_once '../config/db.php';

class DAO{
private $db;
 private $GETALLUSERS="SELECT * FROM users";
 
 private $REGISTER = "INSERT INTO users(name,surname,email,password,active,admin) VALUES(?,?,?,?,?,?)";

 private $LOGIN ="SELECT * FROM users WHERE name = ? AND password = ?";

 private $GETEMAILUSERS="SELECT email FROM users WHERE email=?";

 private $UPDATEPASSWORD="UPDATE users SET password=? WHERE email=? ";

 private $NEWSLETTERSIGNUP= "INSERT INTO newslettertable(name,surname,email) VALUES(?,?,?) ";
 
 private $GETALLNEWSLETTER="SELECT * FROM newslettertable";

 private $GETEMAILNEWSLETTER="SELECT email FROM newslettertable WHERE email=?";

 private $DELETEEMAILNEWSLETTER="DELETE FROM newslettertable WHERE email=?";

public function __construct(){
    $this->db=DB::createInstance();
}

public function getAllUsers(){
  
        $statement=$this->db->prepare($this->GETALLUSERS);
        $statement->execute();
        $result= $statement->fetchAll();
        return $result;
}
public function register($name,$surname ,$email,$password,$active,$admin) {
    $statement = $this->db->prepare($this->REGISTER);
    $statement->bindValue(1,$name);
    $statement->bindValue(2,$surname);
    $statement->bindValue(3,$email);
    $statement->bindValue(4,$password);
    $statement->bindValue(5,$active);
    $statement->bindValue(6,$admin);
    $statement->execute();    
}
public function login($name,$password){
        $statement=$this->db->prepare($this->LOGIN);
        $statement->bindValue(1,$name);
        $statement->bindValue(2,$password);
        $statement->execute();
        $result=$statement->fetch() ;
        return $result;
}
public function getEmailUsers($email){
        $statement=$this->db->prepare($this->GETEMAILUSERS);
        $statement->bindValue(1,$email);
        $statement->execute();
        $result=$statement->fetch() ;
        return $result;
}
public function updatePass($password,$email) {
    $statement = $this->db->prepare($this->UPDATEPASSWORD);
    $statement->bindValue(1,$password);
    $statement->bindValue(2,$email);
    $statement->execute();    
}
public function newsletterSignUp($name, $surname, $email){
    $statement = $this->db->prepare($this->NEWSLETTERSIGNUP);
    $statement->bindValue(1,$name);
    $statement->bindValue(2,$surname);
    $statement->bindValue(3,$email); 
    $statement->execute();
}
public function getAllNewsletter(){
    $statement=$this->db->prepare($this->GETALLNEWSLETTER);
    $statement->execute();
    $result=$statement->fetchAll();
    return $result;
}
public function getEmailNewsletter($email){
        $statement = $this->db->prepare($this->GETEMAILNEWSLETTER);
        $statement->bindValue(1, $email);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
}
public function deleteEmailNewsletter($email){
        $statement = $this->db->prepare($this->DELETEEMAILNEWSLETTER);
        $statement->bindValue(1,$email);
        $statement->execute();
       
}


} //end DAO
?>
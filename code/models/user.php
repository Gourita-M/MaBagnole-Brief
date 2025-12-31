<?php 
include "../code/config/database.php";

Class User
{
    private $username;
    private $email;
    private $password;

    public function setName($name)
    {
        $this->username = $name;
    }

    public function getName()
    {
        return $this->username;
    }

    public function setEmail($useremail)
    {
        $this->email = $useremail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function login()
    {
        $sql = "SELECT * FROM users
                WHERE email = ?";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute([$this->email]);

        $mail = $stmt->fetch();

        if($mail['email'] === $this->email){
            if($mail['user_password'] == md5($this->password)){
                $this->setName($mail['user_name']);
                return true;
            }else{
                return false;
            }
            
        }
        
    }

    public function register(){

        $sql = "SELECT email FROM users
                WHERE email = ?";

        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([ $this->email ]);

        if ($stmt->fetch()){
            return false;
        }

            $register = "INSERT INTO users(user_name, email, user_password) 
                         VALUES ( ?, ?, ?)";
            $stmt2 = DataBase::Connect()->prepare($register);
            $stmt2->execute([$this->username, $this->email, md5($this->password) ]);
            return true;
        
    }
}
?>
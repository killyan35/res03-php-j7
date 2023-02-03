<?php 
class User {

    // private attribute
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email; 
    private string $password;
    // public constructor
    public function __construct(string $first_name, string $last_name, string $email, string $password)
    {
        $this->id = -1 ;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }

    // public setter
    public function setId(int $id) : int
    {
        $this->id = $id;
    }
    
    
    // public getter
    public function getFirst_name() : string
    {
        return $this ->first_name;
    }
    // public setter
    public function setFirst_name(string $first_name) : string
    {
        $this->first_name = $first_name;
    }
    
    
    // public getter
    public function getLast_name() : string
    {
        return $this->last_name;
    }
    // public setter
    public function setLast_name(string $last_name) : string
    {
        $this->last_name = $last_name;
    }
    
    
    // public getter
    public function getEmail() : string
    {
        return $this->email;
    }

    // public setter
    public function setEmail(string $email) : string
    {
        $this->email = $email;
    }
    // public getter
    public function getPassword() : string
    {
        return $this->password;
    }

    // public setter
    public function setPassword(string $password) : string
    {
        $this->password = $password;
    }

}
?>
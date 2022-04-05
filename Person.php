<?php 

abstract class Person{
    private int $id;
    private string $firstname;
    private string $middlename;
    private string $lastname;

    public function __construct($id, $firstname, $middlename, $lastname)
    {
        $this->id=$id;
        $this->firstname=$firstname;
        $this->middlename=$middlename;
        $this->lastname=$lastname;
        
    }

    abstract function __toString():string;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMiddlename()
    {
        return $this->middlename;
    }

    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
    
    


}

?>
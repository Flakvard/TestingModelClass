<?php
require_once 'Person.php';

class Teacher extends Person{

    private float $salary;

    public function __construct($id, $firstname, $middlename, $lastname, $salary)
    {
        parent::__construct($id,$firstname,$middlename,$lastname);
        if(isset($salary)){
            $this->salary=$salary;
        }   
        else{
            $this->salary=0;
        }
    }

    public function __toString()
    {
        $rt=
        parent::getId().";".
        parent::getFirstname().";".
        parent::getLastname().";".
        parent::getMiddlename().";".
        parent::getLastname().";";
        return $rt;
    }
}

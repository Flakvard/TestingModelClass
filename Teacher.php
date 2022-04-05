<?php
require_once 'Person.php';
require_once 'School.php';

class Teacher extends Person{

    private float $salary;
    private $schoolclasses = array();

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

    function getSchoolClasses(): array
    {
        return $this->schoolclasses;
    }

    function addSchoolClass($schoolClass): object
    {
        $id = $schoolClass->GetId();
        if (!isset($this->schoolclasses[$id])) {
            $this->schoolclasses[$id] = $schoolClass;     
        } else {
            throw new Exception ("This school is allready registered\n" . $schoolClass->__toString());
        }
        return $this;
    }

    function removeSchoolClass($SchoolClass):object
    {
        $id = $SchoolClass->Getid();
        if (isset($this->schoolclasses[$id])) {
            unset($this->schoolclasses[$id]);
        } else {
            throw new Exception ("no schoolclass with index $id was found\n");
        }
        return $this;
    }


    public function __toString()
    {
        $rt=
        parent::getId().";".
        parent::getFirstname().";".
        parent::getLastname().";".
        parent::getMiddlename().";".
        parent::getLastname().";";
        (string) $this->salary."\n";
        return $rt;
    }
}

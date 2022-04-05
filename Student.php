<?php
require_once 'Person.php';
require_once 'SchoolClass.php';
//interface, er at arve kun methoder og ikke attributes
class Student extends Person
{


    public function __construct($id, $firstname, $middlename, $lastname)
    {
        parent::__construct($id, $firstname, $middlename, $lastname);
    }

    function __toString(): string
    {
        $rt =
            parent::getId() . ";" .
            parent::getFirstname() . ";" .
            parent::getLastname() . ";" .
            parent::getMiddlename() . ";" .
            parent::getLastname() . ";";
        return $rt;
    }
    function addSchoolClass($schoolclass)
    {
        $this->schoolclass=$schoolclass;
        return $this;
    }
    function removeSchoolClass($schoolclass)
    {
        if (!$this->schoolclass == $schoolclass)
        {
            $this->$schoolclass = null;
        }
        else {
            throw new Exception("This schoolsclass was not found and not assigned for this student\n");
        }
        return $this;
    }

    function getSchoolClasses(): object
    {
        return $this->schoolclasses;
    }
}

<?php
require_once 'Teacher.php';
require_once 'SchoolClass.php';
require_once 'Student.php';


class School
{
    private int $id;
    private string $address;
    private string $name;

    private $schoolclasses = array();
    private $teachers = array();
    private $students = array();

    function __construct($id, $name, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }

    function __toString()
    {
        $rt = "";
        $rt = $this->id . ";" . $this->name . ";" . $this->address . "\n";
        return $rt;
    }

    function getSchoolClasses(): array
    {
        return $this->schoolclasses;
    }

    function addSchoolClass($id, $name): int
    {

        $rc = -1;
        $sc = new SchoolClass($id, $name);
        if (!isset($this->schoolclasses[$id])) {
            $this->schoolclasses[$id] = $sc;
            $rc = 0;
        } else {
            echo "This school is allready registered\n" . $sc->__toString();
        }
        return $rc;
    }

    function removeSchoolClass($SchoolClass): int
    {
        $rc = -1;
        $id = $SchoolClass->Getid();
        if (isset($this->schoolclasses[$id])) {
            unset($this->schoolclasses[$id]);
            $rc = 0;
        } else {
            echo "no schoolclass with index $id was found\n";
        }
        return $rc;
    }

    function getTeacher(): array
    {
        return $this->teachers;
    }

    function addTeacher($id, $firstname, $middlename, $lastname, $salary): int
    {

        $rc = -1;
        $t = new Teacher($id, $firstname, $middlename, $lastname, $salary);
        if (!isset($this->teachers[$id])) {
            $this->teachers[$id] = $t;
            $rc = 0;
        } else {
            echo "This teacher is allready registered\n" . $t->__toString();
        }
        return $rc;
    }

    function removeTeachers($teacher): int
    {
        $rc = -1;
        $id = $teacher->Getid();
        if (isset($this->teachers[$id])) {
            unset($this->teachers[$id]);
            $rc = 0;
        } else {
            echo "no teacher with index $id was found\n";
        }
        return $rc;
    }
    function getStudent(): array
    {
        return $this->students;
    }

    function addStudent($id, $firstname, $middlename, $lastname): int
    {

        $rc = -1;
        $s = new Student($id, $firstname, $middlename, $lastname);
        if (!isset($this->students[$id])) {
            $this->students[$id] = $s;
            $rc = 0;
        } else {
            echo "This teacher is allready registered\n" . $s->__toString();
        }
        return $rc;
    }

    function removeStudent($student): int
    {
        $rc = -1;
        $id = $student->Getid();
        if (isset($this->students[$id])) {
            unset($this->students[$id]);
            $rc = 0;
        } else {
            echo "no teacher with index $id was found\n";
        }
        return $rc;
    }

}

<?php

class School
{
    private int $id;
    private string $address;
    private string $name;

    private $schoolclasses = array();

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

    function addSchoolClass($id, $name)
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
}

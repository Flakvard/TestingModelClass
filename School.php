<?php

class School{
    private int $id1;
    private string $address;
    private string $name;

    function __construct($id, $name, $address)
    {
        $this->id1 = $id;
        $this->name = $name;
        $this->address = $address;
    }

    function __toString()
    {
        $rt="";
        $rt = $this->id.";".$this->name.";".$this->address."\n";
        return $rt;

    }



}
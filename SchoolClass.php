<?php 

class SchoolClass{
    private int $id;
    private string $name;

    
    function __construct($id, $name)
    {
        $this->id=$id;
        $this->name=$name;
    }

function __toString()
{
    $rt="";
    $rt = $this->id.";".$this->name."\n";
    return $rt;

}
    public function getID(){
        return $this->id;
    }

}
?>
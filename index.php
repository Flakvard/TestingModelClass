<?php

require_once 'School.php';
require_once 'SchoolClass.php';

$s = new School(1, "UCL Seebladsgade", "Seebladsgade 1, 5000 Odense C");
echo $s->__toString();

$rc1 = $s->addSchoolClass(1, "ØKIT211");
$rc2 = $s->addSchoolClass(2, "ØKIT212");
$rc3 = $s->addSchoolClass(3, "ØKIT213");
$rc4 = $s->addSchoolClass(4, "ØKIT214");




foreach ($s->getSchoolClasses() as $sc) {
    echo $sc->__toString();
}

$sc_list = $s->getSchoolClasses();
$sc = $sc_list[4];
$rc = $s->removeSchoolClass($sc);

echo "Test ends!";

// $sc = new SchoolClass(1,"ØKIT211");
// echo $sc->__toString();
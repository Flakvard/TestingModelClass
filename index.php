<?php

require_once 'School.php';
// 
// require_once 'Teacher.php';



// $t = new Teacher(2, "Marni", "F.", "Joensen", null);
// echo $t->__toString();

$s = new School(1, "UCL Seebladsgade", "Seebladsgade 1, 5000 Odense C");
echo $s->__toString();



$rc1 = $s->addSchoolClass(1, "ØKIT211");
$rc2 = $s->addSchoolClass(2, "ØKIT212");
$rc3 = $s->addSchoolClass(3, "ØKIT213");
$rc4 = $s->addSchoolClass(4, "ØKIT214");

foreach ($s->getSchoolClasses() as $sc) {
    echo $sc->__toString();
}

$rc5 = $s->addTeacher(2, "Christine", "K", "??", 500);
$rc6 = $s->addTeacher(2, "Christine", "K", "??", 500);
$rc7 = $s->addTeacher(1, "Kim", "V.", "Morgensenn", 500);

$teachers = $s->getTeacher();
$schoolClasses = $s->getSchoolClasses();
$t1 = $teachers[1];
try {
    $t1->addSchoolClass($schoolClasses[1]); //
    $t1->addSchoolClass($schoolClasses[2]); //
    $t1->addSchoolClass($schoolClasses[3]); //
    $t1->addSchoolClass($schoolClasses[4]); //
    $t1->addSchoolClass($schoolClasses[4]); //
} catch (Exception $e) {
    echo "message: " . $e->getMessage();
}

foreach ($s->getTeacher() as $t) {
    echo "-->" . $t->__toString();
    foreach ($t->getSchoolClass() as $sc) {
        echo "---->" . $sc->__toString();
    }
}


// foreach ($s->getTeacher() as $t) {
//     echo $t->__toString();
// }

// $rc5 = $s->addStudent(2, "Marni", "F.", "Joensen", 500);
// $rc6 = $s->addStudent(2, "Marni", "F.", "Joensen", 500);
// $rc7 = $s->addStudent(3, "Kim", "V.", "Morgensenn", 500);

// foreach ($s->getStudent() as $student) {
//     echo $student->__toString();
// }


// $sc_list = $s->getSchoolClasses();
// $sc = $sc_list[4];
// $rc = $s->removeSchoolClass($sc);

echo "Test ends!";

// $sc = new SchoolClass(1,"ØKIT211");
// echo $sc->__toString();
<?php

require_once 'School.php';

$s = new School(1, "UCL Seebladsgade", "Seebladsgade 1, 5000 Odense C");
echo $s->__toString();
echo "Test ends!";
<?php

require_once "Course.php";
require_once "Administrator.php";

$Course1 = new Course;
/*$Course1->addParticipant("martin");
$Course1->addParticipant("ristov");
$Course1->addParticipant("king");
$Course1->getParticipant();
$Course1->removeParticipant(2);
echo " izbrisan element "  ;
$Course1->getParticipant();
*/

$admin = new Administrator;
$admin->createCourse("ma","asd",34);
$admin->getCourse();
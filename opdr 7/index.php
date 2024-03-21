<?php
require_once("../vendor/autoload.php");

use opdr7\classes\Teacher;
use opdr7\classes\Student;
use opdr7\classes\Schooltrip;



$SOD2A = new Group("SOD2A");


$myTeacher = new Teacher(" Barry");

$myTeacher = new Teacher(" brugge");

$myTeacher = new Teacher("Rob ");


$mySchooltrip = new Schooltrip("bios", 5);
$mySchooltrip->AddStudent(new Student("Hamza taha", $SOD2A));
$mySchooltrip->AddStudent(new Student("Yassine Azdad", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Ali shwani", $SOD2A));
$mySchooltrip->AddStudent(new Student("akram", $SOD2A));
$mySchooltrip->AddStudent(new Student("Rohan dayel", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("piet", $SOD2A));
$mySchooltrip->AddStudent(new Student("jan", $SOD2A));
$mySchooltrip->AddStudent(new Student("koos", $SOD2A));
$mySchooltrip->AddStudent(new Student("pinda", $SOD2A));
$mySchooltrip->AddStudent(new Student("hmidoush", $SOD2A));
$mySchooltrip->AddStudent(new Student("ayoub", $SOD2A));
$mySchooltrip->AddStudent(new Student("turk", $SOD2A));
$mySchooltrip->AddStudent(new Student("fietsedief", $SOD2A));
$mySchooltrip->AddStudent(new Student("man", $SOD2A));


// var_dump($mySchooltrip);
echo($mySchooltrip->GetTable());
?>
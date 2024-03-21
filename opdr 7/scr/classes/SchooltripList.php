<?php 
namespace opdr7\classes;

use opdr7\classes\Student;
use opdr7\classes\Teacher;

class SchooltripList
{
    private Array $studentList = Array();

    private Teacher $teacher;

    public function SetTeacher(Teacher $pTeacher) 
    {
        $this->teacher = $pTeacher;
    }

    public function GetTeacher()
    {
        return $this->teacher;
    }

    public function AddStudent(Student $pStudent)
    {
        $this->studentList[] = $pStudent;
    }

    public function GetStudentList()
    {
        return $this->studentList;
    }
}
?>
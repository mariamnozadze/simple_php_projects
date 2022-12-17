<?php
class Student
{
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors()
    {
        if ($this->gpa >= 3.5) {
            return "true";
        }
        return "false";
    }
}

$student1 = new Student("jim", "Business", 2.8);
$student2 = new Student("Pam", "Art", 3.5);

echo $student1->hasHonors(); //false
echo $student2->hasHonors(); //true
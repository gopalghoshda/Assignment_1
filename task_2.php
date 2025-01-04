<?php

class Student {
    // Attributes
    private $name;
    private $grades;

    // Constructor
    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    // Method to calculate average
    public function averageGrade() {
        $total = array_sum($this->grades);
        $count = count($this->grades);
        return $count > 0 ? $total / $count : 0;
    }

    // Method to display result
    public function displayResult() {
        $average = $this->averageGrade();
        echo "Student Name: {$this->name}, Average Grade: {$average}\n";
    }
}

// Example:
$student = new Student("Alice", [85, 90, 78, 92]);
$student->displayResult();

?>

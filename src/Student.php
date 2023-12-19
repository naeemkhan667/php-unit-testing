<?php
namespace Naeem\PHPTesting;
use InvalidArgumentException;

class Student {
	public string $name;
	public int $roll_number;
    public array $subjects = [];
    

    public function __construct($name, $roll_number)
    {
        $this->name = $name;
		$this->roll_number = $roll_number;
    }

    public function getName(){
        return $this->name;
    }

    public function getRollnumber(){
        return $this->roll_number;
    }

    public function addSubject($subject){
        $this->subjects[] = $subject;
        return true;
    }

    public function removeSubject($subject){
        if (!in_array($subject, $this->subjects)) {
			throw new InvalidArgumentException("Unknown subject: " . $subject);
		}
        unset($this->subjects[array_search($subject, $this->subjects)]);
        return true;
    }
}
?>
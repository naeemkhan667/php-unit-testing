<?php

//namespace Naeem\PHPTesting;
require_once 'vendor/autoload.php';
use Naeem\PHPTesting\Student;
use PHPUnit\Framework\TestCase;

final class StudentTest extends TestCase {

    public function test_student() {

        $std = new Student('Naeem', 112);
        $this->assertEquals('Naeem', $std->name);
        $this->assertEquals(112, $std->roll_number);
        $this->assertEmpty($std->subjects);
    }

    public function test_user_add_subject(){
        $std = new Student('Naeem', 112);
        $this->assertTrue($std->addSubject('Maths'));
        $this->assertEquals(1, count($std->subjects));
        $this->assertContains('Maths', $std->subjects);
    }

    public function test_user_add_remove_subject(){
        $std = new Student('Naeem', 112);
        $this->assertTrue($std->addSubject('Maths'));
        $this->assertTrue($std->addSubject('Physics'));
        $this->assertEquals(2, count($std->subjects));

        $this->assertTrue($std->removeSubject('Maths'));
        $this->assertEquals(1, count($std->subjects));

        $this->assertNotContains('Maths', $std->subjects);
        $this->assertContains('Physics', $std->subjects);
    }
}
?>
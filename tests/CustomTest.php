<?php
//namespace Naeem\PHPTesting;
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class CustomTest extends TestCase {
    /**
     * @covers \test_student
     */
    public function test_custom() {

        $this->assertTrue(true);
    }
}
?>
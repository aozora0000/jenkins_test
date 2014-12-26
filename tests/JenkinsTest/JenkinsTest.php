<?php
class JenkinsTest extends PHPUnit_Framework_TestCase {
    public function testGetAll() {
        $this->assertTrue(true);
    }
    public function test1() {
    	$jenkins = new Jenkins\Jenkins;
    	$this->assertTrue($jenkins->test1(1));
    }
    public function test3() {
        $jenkins = new Jenkins\Jenkins;
        $this->assertTrue($jenkins->test2("これはテストです"));
    }
}

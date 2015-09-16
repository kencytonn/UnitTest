<?php
require 'phptest.php'
$tester= new DivisionTest();
echo $tester->doTest();
class DivisionTest{
	var $division;

	function DivisionTest(){
	}
	function doTest(){
		$this->setUp();
		$this->testDivision();
		$this->tearDown();
	}
	function setUp(){
		$this->division=new Division();
	}

	function tearDown(){
		unset($this->division);
	}
function testDivision(){
$result=$this->division->divide(10,5);
if ($result==2){
	echo "Test Passed";
}
else {
echo "Test Failed";
}}}
?>
<?php
/**
----------------------------------------------------------------------+
*  @desc	Test empty stuff
*  @flag	C10 L1
*  @flag	W11	L14
*  @flag	W12	L26	
*  @flag	W13	L33
*  @flag	W14	L52
*  @flag	C9	L53
*  @score	8.78
----------------------------------------------------------------------+
*/
class TEST_EMPTY{}
/**
----------------------------------------------------------------------+
* @desc 	normal class
----------------------------------------------------------------------+
*/
class TEST{
	/**
	----------------------------------------------------------------------+
	* @desc 	empty method
	----------------------------------------------------------------------+
	*/
	public function test_method(){}
}
/**
----------------------------------------------------------------------+
* @desc 	empty function
----------------------------------------------------------------------+
*/
function test_function01(){}
/**
----------------------------------------------------------------------+
* @desc 	normal interface
----------------------------------------------------------------------+
*/
interface Test_interface {
	/**
	----------------------------------------------------------------------+
	* @desc 	empty interface method
	----------------------------------------------------------------------+
	*/
	public function test_inter();
}
/**
----------------------------------------------------------------------+
* @desc 	empty interface
----------------------------------------------------------------------+
*/
interface Test_interface2 {
	//
	//
	//
}
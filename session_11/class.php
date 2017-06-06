<?php
class myclass{

 		// public;
 		// private;
 		// protected;

 		public static function test(){ //will not accessable if function is private

 			echo "Hello World!";
 		}
 	}

 	/*$obj = new myclass;
 	$obj->test();*/
 	myclass::test();
?>
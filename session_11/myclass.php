<?php
 

 	class myclass{

 		// public;
 		// private;
 		// protected;

 		private $myvar = 'this is private';

 		public $newvar = 'this is public';

 		public static function test(){ //will not accessable if function is private

 			echo "Hello World!";
 		}

 		private function mynew(){

 			echo "This is private function";
 		}

 		public function callNews(){

 			$this->mynew();
 			echo $this->newvar;
 		}

 		public function putValue(){

 			$this->newvar = 'Value from function.';
 		}
 		public function cal(){
 			echo "this is number";
 		}
 		public static function number(){
 			self::cal();
 			//$this->cal();
 			// echo "Test";
 		}
 	}

 	$obj = new myclass;
 	//$obj->test();

 	//myclass::test();
 	$obj->mynew();
 	//$obj->callNews();
 	//echo $obj->newvar;
 	//$obj->number();
?>
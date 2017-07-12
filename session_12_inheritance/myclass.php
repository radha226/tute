<?php
	
	class myclass{

		function __construct(){

			echo "This is parent constructor";
		}

		private function test(){

			echo "This is test function of myclass";
		}

		protected function newfunction(){

			echo "This is new function from myclass";
		}
	}

?>
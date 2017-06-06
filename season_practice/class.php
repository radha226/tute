<?php
	class myclass{

		protected function get(){
			echo "hii this is  inner get function";
		}
	}
	class child extends myclass{

		function child_get(){
			//$this->get();
			self::get();
		}
	} 

	$obj = new child;
	$obj->child_get();
	child::child_get();



?>


<!--when we use self-->
<!-- when we create object then cll function with $this or self::function name -->
<h5>construnctor</h5>

<?php
class a{

	function __construct($d, $f){

		echo $d."<br>";
		echo $f;
		echo "this is construct";
	}
}
$objd=new a(4,5);


?>



<h5> abstract class</h5>
<?php
	// abstract class newclass{
	// 	abstract function get();
	// 	protected $var='';
		

	// }
	// class subchild extends newclass{
	// 		abstract function get(){
	// 			echo "this is text from abstract class";
	// 		}
			
	// 	}

	// $ojj-> new subchild;
	// $ojj->get();
	



?>
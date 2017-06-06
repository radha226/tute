<?php

	class  myclass{
 
 		//why we are using this value in private , it does not effect on program
		private $values="";
		private $value1="";
		function __construct($table,$till){


			$this->values=$table;
			$this->value1=$till;
//why we are using $this, what will happen if we wll not use
				print_r($till);
				print_r($table);


				//$this->$table[i][j];


		}

		public function drawtable(){
			$loop=$this->values;
			$no=$this->value1;

			//print_r($this->values);
			for($i=0; $i<count($loop); $i++){

				for($j=1; $j<=$no; $j++){

						echo $loop[$i]*$j."<br>";
				}

				//echo $value*$value1;
				
			}
		}

	}
	$obj =new myclass(array(2,3),10);
	$obj->drawtable();
	
?>
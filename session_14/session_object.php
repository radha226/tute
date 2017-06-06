<?php
session_start();
class Test {
    public $version = 1;
    protected $abc;
    public function setAbc($abc) {
        $this->abc = $abc;
    }
}

$t = new Test();
echo $t->setAbc("hii");
$_SESSION['mytest'] = $t;
echo "<pre>";
//print_r($_SESSION['mytest']);
$test=$_SESSION['mytest'];
echo $test;
?>
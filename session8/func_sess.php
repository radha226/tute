<?php
  session_start();

  $_SESSION['test'] = 123456;

  function test(){

  		echo $_SESSION['test'];
  }

  test();


?>
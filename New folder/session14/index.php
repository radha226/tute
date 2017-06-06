<?php
	
	require_once "one/myclass.php";
	require_once "two/myclass.php";
	use one\myclass as myone;
	use two\myclass as mytwo;
	$obj1 = new myone();
	$obj = new mytwo();
	$obj1->test();
	$obj->test();

	/*
	
	require_once "one/myclass.php";
	require_once "two/myclass.php";
	//use one\myclass as myone;
	//use two\myclass as mytwo;
	$obj1 = new two\myclass();
	$obj = new one\myclass();
	// $obj = new mytwo();
	$obj1->test();
	$obj->test();
	 */

?>
<?php
	//http://php.net/manual/en/class.splfileinfo.php
	$fileinfo = new SplFileinfo('SampleData.xlsx');
	echo "<pre/>";
	print_r($fileinfo->getFilename());
	echo "<pre/>";
	print_r($fileinfo->getsize());
	echo "<pre/>";
	print_r($fileinfo->getRealPath());
	echo "<pre/>";
	print_r($fileinfo->isWritable());
	echo "<pre/>";
	print_r($fileinfo->isReadable());
	echo "<pre/>";
	print_r(date('Y-m-d H:i:s', $fileinfo->getMtime()));
	echo "<br/>";
	echo date('Y-m-d H:i:s');
	echo "<pre/>";
	print_r($fileinfo->isDir());
	echo "<pre/>";
	print_r($fileinfo->getType());
	echo "<pre/>";
	print_r($fileinfo->getExtension());

?>
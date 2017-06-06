<?php
		$file=fopen("append.txt", "a");
		$content="hii this is content from append file";

		fwrite($file, $content);

?>
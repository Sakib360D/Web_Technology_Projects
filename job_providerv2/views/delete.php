<?php

	$idd =  $_GET['id'];

			$key = $idd;

			$fc=file("user.txt");

			$f=fopen("user.txt","w");

			foreach($fc as $line)
			{
				if (!strstr($line,$key)) 
						fputs($f,$line); 
			}
			fclose($f);

	header('location: userlist.php');

?>
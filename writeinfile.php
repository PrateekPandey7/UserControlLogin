<?php

	$u = '';$p = '';$e = '';
	
	if(isset($_POST["signup"]))
	{
		$u =  $_POST["username"];
		$p =  $_POST["password"];
		$e =  $_POST["email"];
		$string = $u.$p.$e;
		$r = hash('sha512', $string, false)."\n";
		$myfile = fopen("database.txt","a") or die("Please try again Later");

		$search = $r;
		$lines = file('database.txt');
		$flag = 0;
		foreach($lines as $line)
		{
  			if(strpos($line, $search) !== false)
    		{	
    			$flag = 1;
    			$message = "This Username Account already exist";
    		}
		}
		if($flag == 0)
		{
			fwrite($myfile, $r);
			$message = " New Account created";
		}
		fclose($myfile);
	}

?>
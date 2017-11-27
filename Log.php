<?php
	include 'lib.php';
	session_start();
	
	if(isset($_POST['login']) && isset($_POST['password']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];


		$_SESSION['login'] = $login;

		#cond IN CSV
		$arrUser = parseCSV();
		$user = None;

		foreach($arrUser as $user)
		{
			if(in_array($login, $user))
			{
				print(json_encode("True"));
				$user = True;
			}
		}

		if($user==None)
		{
			print(json_encode("False"));
		}
	}
	else
	{
		print(json_encode("False"));
	}
?>
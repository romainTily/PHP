<?php
	include "lib.php";

	if(isset($_POST['user']) && isset($_POST['password']))
	{
		$handle = fopen('db.csv','a');

		// #get last id
		$arrUser = parseCSV();

		$lastId = $arrUser[count($arrUser)-1][0] + 1;

		fputcsv($handle, [$lastId, $_POST['user'], $_POST['password']]);
	}

?>
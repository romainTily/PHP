<?php
	function parseCSV()
	{
		$row = 1;
		$arr_fin = array();
		if (($handle = fopen("db.csv", "r")) !== FALSE) 
		{
  			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
  			{
    			for ($c=0; $c < count($data); $c+=3)
    			{
        			array_push($arr_fin,[$data[$c], $data[$c+1], $data[$c+2]]);
    			}
 			}

  			fclose($handle);
		}

		return $arr_fin;
	}
?>
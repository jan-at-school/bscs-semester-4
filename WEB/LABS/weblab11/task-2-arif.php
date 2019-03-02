<!DOCTYPE html>  
<html>  
    <head>   
	  <title>Task-3</title>  
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	  <style>
	#customers {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	#customers td, #customers th {
	    border: 1px solid #ddd;
	    padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	    padding-top: 12px;
	    padding-bottom: 12px;
	    text-align: left;
	    background-color: #4CAF50;
	    color: white;
	}
</style>
	  </head>  
	<body>  
    <h3>Table filling using Php</h3>
    <?php  
		$Rows = 6; 
		$Cols = 5; 
		echo '<table id="customers" border="2" cellpadding=10>';
		for($i = 1; $i <= $Rows; $i++){ echo '<tr>';
		  	for($j = 1; $j <= $Cols; $j++){ 
		  		echo '<td>' . "$i*$j = " . $i*$j . '</td>'; 
			}
		echo '</tr>';
		}
		echo '</table>';
    ?>  
  </body>  
</html>  
	
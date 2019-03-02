 <!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-3</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>  

  <?php  
		$month_temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);  
		$temp = array();
		echo "Average Temperature is: ".array_sum($month_temp)/count($month_temp)."<br>";
		sort($month_temp);
		
		echo "List of seven lowest Temperature: ";

		$lowest_seven = array_slice($month_temp, 0,7);
		for($i = 0; $i < count($lowest_seven); $i++){
			echo $lowest_seven[$i].", ";
		}
		echo "<br>";

		echo "List of seven highest Temperatures: ";
		$highest_seven = array_slice($month_temp, -7,7);

		for($i = count($highest_seven)-1; $i >= 0; $i--){
			echo $highest_seven[$i].", ";
		}

		
	?>  
  </body>
  
</html>
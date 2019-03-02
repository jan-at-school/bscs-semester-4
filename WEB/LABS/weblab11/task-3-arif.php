<!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-3</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>   
  <h3>Chess Board - PHP Nested Loops</h3>  
  <!-- cell 270px wide (8 columns x 60px) -->
  <table width="auto" cellspacing="0px" cellpadding="0px" border="1px">
  <?php  
		$Rows = 100; 
    $Cols = 100; 
    for($i=1; $i<=$Rows; $i++){
      echo "<tr>";
      for($j=1; $j<=$Cols; $j++){
        $even = ($i+$j)%2;
        if($even) echo "<td height=33.75px width=33.75px bgcolor=white></td>"; // as 33.75*8  = total width of table. 
        else echo "<td height=33.75px width=33.75px bgcolor=black></td>";
      }
    echo "</tr>";
    }      
  ?>  
  </table>  
  </body>  
  </html> 
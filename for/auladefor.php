<?php  

echo "<select>";


for($i=date("Y"); $i>=date("Y")-110; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

?>
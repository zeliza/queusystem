<html>

<center> <b>
<?php

if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
$checked_count = count($_POST['check_list']);
echo "<br> You have selected following ".$checked_count." option(s): <br/>"; 
foreach($_POST['check_list'] as $selected) {
echo "<p>".$selected ."</p>";
}
}

else{
echo "<b>Please Select Atleast One Option.</b>";
}


echo "Queue Number: <br>";
echo rand(1,10);
}
?>
	

</html>


<?php 


echo "Table User <br>";

foreach ($records as $rec) {
	echo $rec->user_id."  ".$rec->username." ".$rec->email." ".$rec->password." ".$rec->user_role_id." ".$rec->mobile."</br>";
}






 ?>




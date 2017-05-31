
<div class="list-group">

<?php

$Data = $vars["data"];

foreach( $Data as $row )
{
	

	?>

	<a href = "<?php echo $row['href']?> "  calss =" list-group-item"> <?php echo $row['name']?> </a>


<?php
}

?>


</div>


<div class="list-group">

<?php

$Data = $vars["data"];


foreach($Data as $arry )
{
	

	?>

	<a href = "<?php echo $arry['href']?> "  class =" list-group-item"> <?php echo $arry['name']?> </a>


<?php
}

?>


</div>
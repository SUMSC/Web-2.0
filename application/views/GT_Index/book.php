
<div class="list-group">

<?php
<<<<<<< HEAD

$Data = $vars["data"];


foreach($Data as $arry )
=======
// 使用assign()设定的数据应该用 $vars['name'] 的方式来调用。
?>

<?php
$data  = array("book1"=>"www.baidu.com","book2"=>"www.sina.com");
foreach($data as $k => $v)
>>>>>>> 4a3bff7ad8da0fe6f173205c4a2d011a0afaae7a
{
	

	?>

	<a href = "<?php echo $arry['href']?> "  calss =" list-group-item"> <?php echo $arry['name']?> </a>


<?php
}

?>


</div>


<div class="list-group">

<?php
$data  = array("book1"=>"www.baidu.com","book2"=>"www.sina.com");
foreach($data as $k => $v)
{
?>
 	<a href="<?php echo "www.baidu.com" ?>" class="list-group-item"><?php echo "百度" ?> </a>

<?php 
}
?>


</div>
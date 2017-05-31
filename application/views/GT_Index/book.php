
<div class="list-group">

<?php
// 使用assign()设定的数据应该用 $vars['name'] 的方式来调用。
?>

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

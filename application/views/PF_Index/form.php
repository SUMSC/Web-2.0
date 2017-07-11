<script type="text/javascript">

function Trim(str,is_global)
{
    var result;
    result = str.replace(/(^\s+)|(\s+$)/g,"");
    if(is_global.toLowerCase()=="g")
    {
        result = result.replace(/\s/g,"");
     }
    return result;
}
function x(form)
{
	var name = Trim(document.getElementById("name").value,"g");
	var contact = Trim(document.getElementById("contact").value,"g");
	var problem = Trim(document.getElementById("problem").value,"g");
	
    if(name == "")
    {
         alert("这三项均不能为空哦！");
         return false;
    }
    if(contact == "")
    {
         alert("这三项均不能为空哦！");
         return false;
    }
    if(problem == "")
    {
         alert("这三项均不能为空哦！");
         return false;
    }
    return true;
}
</script>

<hr>
<h2 align='center'>问题难以独自解决？</h2>
<p>填写下面的表单，并在随后和我们的成员取得联系。</p>
<hr>	
<div class="row">
	<form method="POST" onsubmit="return x();" action="<?php echo APP_URL."/PfConsult/getConsult"?>" enctype="multipart/form-data"> 
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" name="name" id="name" placeholder="称呼" type="text">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" name="contact" id="contact" placeholder="联系方式" type="text">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<textarea id="problem" name="problem" class="form-control" id="" cols="30" rows="7" placeholder="问题描述"></textarea>
			</div>
		</div>
		<div align="center" class="col-md-12">
			<div class="form-group">
			   <input type="submit" name="submit" value="提交"> 
			</div>
		</div>
	</form>
</div>

<hr>
<h2 align='center'>问题难以独自解决？</h2>
<p>填写下面的表单，并在随后和我们的成员取得联系。</p>
<hr>	
<div class="row">
	<form method="POST" action="<?php echo APP_URL."/PfConsult/getConsult"?>" enctype="multipart/form-data"> 
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" name="name" placeholder="姓名" type="text">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" name="contact" placeholder="联系方式" type="text">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<textarea name="problem" class="form-control" id="" cols="30" rows="7" placeholder="问题描述"></textarea>
			</div>
		</div>
		<div align="center" class="col-md-12">
			<div class="form-group">
			   <input type="submit" name="submit" value="提交"> 
			</div>
		</div>
	</form>
</div>
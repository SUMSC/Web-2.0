
mysql：

	softwareTable	download	course	time	
	bookTable		download	time	
	webTable		href		time


/Growth/...

update
	
	userMessage（）//controller类 判断是否登录 判断是否有管理员权限 返回$TF
	showTip($TF)//View类 有权限则弹出更新信息表单  无权限则提示warning
	updateSql（）// Model类 表单提交后add进数据库


function：
	
	getMessage()//Model类 获取数据库对应内容 返回含有三个二维数组的数组 $data
	pageHandle（）//controller类 接收$data 调用showPage（）
	showPage（$data）//View类 依次展示software books web 列表
	
	



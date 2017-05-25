
mysql：

	softwareTable	download	course	time	
	bookTable		download	time	
	webTable		href		time


/Growth/...


function：
	
	getMessage()//Model类 获取数据库对应内容 返回含有三个二维数组的数组 $data
	pageHandle（）//controller类 接收$data 调用showPage（）
	showPage（$data）//View类 依次展示software books web 列表
	
	



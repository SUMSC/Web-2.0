* 上传
	* uploadPage(\$uid) | View类，参数为用户id，用于判断用户上传文件权限，返回值为\$formData用于将文件信息传给处理php。展示 header、表单、表单控件、footer。
	* saveFiles(\$formData) | Control类，对文件检查、重命名、保存、返回值可为表示文件上传状态的字符串或数组。
	* infoSave() | Model类，将上传完成的文件信息写入数据库。返回值可为表示操作是否成功的字符串或数组。
* 浏览、下载
	* filesList(\$fList) | View类，参数为二维数组，用于页面为之显示相应文件图标和预览方式，。
	* queryFiles() | Model类，返回二维数值，用于查询数据库后将文件 名、大小、类型、路径 等返回。
	* fileList() | Control类，接受queryFiles()的返回数组，生成数组传递给filesList()函数用于展示。
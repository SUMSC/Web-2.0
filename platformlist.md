##PLATFORM FUNCTION LIST##
* 咨询
	* tipsSelect()　|　Model类，无参数，返回数组，数组里是键值对，该返回值为后台添加的FAQ
	* pageShow()　|　View类，无参数，无返回值。展示页面：bar、FAQ、表单、table、footer。
	* consultInsert($data)　|　Model类，参数为add()提供的键值对数组，将各个键值对解析并存入数据库。
 	* consult()　|　Control类，参数暂无，无返回值。将从tipsSelect()中返回数组里的每一个键值对解析，并调用pageShow()显示页面。
	* add()　|　Control类，参数暂无，无返回值。在咨询表单提交后运行，将表单的各键值对存为数组作为参数调用consultInsert()，再之后跳转页面至小伙子们。
* 小伙
	* repairmenSelect()　|　Model类，无参数，返回二维数组，存储各个义修小伙子的信息。
	* pageShow($repairmen)　|　View类，参数类型二维数组，无返回值。	展示页面：bar、小伙子们、footer。
	* mailSelect($rid)　|　Model类，参数为维修人员id，返回键值对数组，内容为维修人员的邮件地址以及求助内容。
	* repairmen()　|　Control类，参数暂无，无返回值。获取repairmenSelect()返回的二维数组，传给pageShow()展示。
	* mail($rid)　|　Control类，参数为维修人员id，无返回值，用户选择维修者后运行。首先调用mailSelect()，解析返回值，用phpmailer插件发送邮件，跳转至qq在线对话。
* 管理后台
	* repairmenSelect()　|　Model类，无参数，返回维修人员信息。
	* repairmanInsert($data)　|　Model类，参数为一个二维键值对数组，将维修人员信息插入数据库。
	* repairmanDelete($rid)　|　Model类，参数为一个整数，从数据库删除对应人员的条目。
	* consultSelect()　|　Model类，无参数，返回维修者信息。
	* repairmenShow($repairman)　|　View类，参数为二维数组，展示维修人员修改页面。
	* consultShow($consult)　|　View类，参数为二维数组，展示维修记录。
	* backstage($action)　|　Control类，$action控制展示repairmen还是consult。
	* repairmanInsert()　|　Control类，调用Model类的repairmanInsert()，操作成功后刷新页面。
	* repairmanDelete()　|　Control类，获得rid,并传给Model类的repairmanDelete()，操作成功后刷新页面。

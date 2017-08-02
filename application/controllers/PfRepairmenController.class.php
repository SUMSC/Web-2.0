<?php 

class PfRepairmenController extends Controller{

    function index(){
    	session_start();
        $this->render("index");
    }

    function splitParam($param){
    	return explode('=', $param);
    }

    function mail($params){
    	session_start();

    	$idArray = $this->splitParam($params[0]);
    	$rid = $idArray[1];
    	$qid = (new PfRepairmenModel)->qIDSelect($rid);
    	$mailRecipient = (new PfRepairmenModel)->nameSelect($rid);
    	$qid = $qid[0]['qq'];
    	$mailRecipient = $mailrecipient[0]['name'];
		$mailAddress=$qid."@qq.com";
		$cid = $_SESSION['cid'];
		$content = (new PfconsultModel)->descriptionSelect($cid);
		$content=$content[0]['description'];

    	$set = array();
		$where = array();
		$where["cid"] = $cid;
		$set['rid'] = $rid;
		(new PfConsultModel) ->consultUpdate($set,$where);

		require '/PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		$mail->isSMTP();                                      
		$mail->Host = ML_HOST;
		$mail->SMTPAuth = true;                              
		$mail->Username = ML_USERNAME;                 
		$mail->Password = ML_PASSWORD;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 25;

		$mail->setFrom(ML_ADDRESS, 'Cproblem');
		$mail->addAddress($mailAddress, $mailRecipient);

		$mail->isHTML(true);

		$mail->Subject = "电脑问题咨询邮件";
		$mail->Body    = "$content";
		$mail->AltBody = "$content";

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		    ?>
		    <?php
		    header("Location:http://wpa.qq.com/msgrd?v=3&uin=".$qid."&site=qq&menu=yes");
		}

    }

    function backend(){
        $this->render("backend");
    }

	function addNew(){
		$data = array('qq' => $_POST['qq'], 'name' => $_POST['name'], 'introduction' =>$_POST['introduction'],'free' => 1 , 'gender' =>$_POST['gender'] );
		(new PfRepairmenModel) -> PfRepairmenInsert($data);
    	header("Location:".APP_URL."/PfRepairmen/backend");
	}

	function change(){
    	var_dump($_POST);
    	echo "<hr>";
    	$rid = explode('/', $_GET["url"]);
    	$rid = $rid[2];
    	$params = array();
    	$where = array();
    	$where["rid"] = $rid;
    	foreach ($_POST as $key => $value) {
    		$params[$key] = $value;
    	}
    	array_pop($params);
    	(new PfRepairmenModel) ->PfRepairmenUpdate($params,$where);
    	$this->jumping();
	}

	function head(){
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		    $rid = explode('/', $_GET["url"]);
	    	$rid = $rid[2];
		    $file = $_POST['file'];

			// 允许上传的图片后缀
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			echo $_FILES["file"]["size"];
			$extension = end($temp);     // 获取文件后缀名
			echo "<hr>";
			echo $extension;
			echo "<hr>";
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"] > 0)
				{
					echo "错误：: " . $_FILES["file"]["error"] . "<br>";
				}
				else
				{
					echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
					echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
					echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
					
					// 判断当期目录下的 upload 目录是否存在该文件
					// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
					if (file_exists("images/upload/".$rid."/" . $_FILES["file"]["name"]))
					{
						echo $_FILES["file"]["name"] . " 文件已经存在。 ";
					}
					else
					{
						mkdir('images/upload/'.$rid);
						// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
						move_uploaded_file($_FILES["file"]["tmp_name"], "images/upload/" .$rid."/". iconv("UTF-8","GBK","head.".$extension));
						echo "文件存储在: " . "images/upload/" .$rid."/".$_FILES["file"]["name"];
						$headlink = "/images/upload/" .$rid."/"."head.".$extension;

				    	$params = array();
				    	$where = array();
				    	$where["rid"] = $rid;
				    	$params['headlink'] = $headlink;
				    	(new PfRepairmenModel) ->PfRepairmenUpdate($params,$where);
						//$this->jumping();
					}
				}
			}
		}
	}

    function jumping(){
    	echo "Something changing...Please wait.";
    	header("Location:".APP_URL."/PfRepairmen/backend");
    }

}
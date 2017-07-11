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
    	$id = $idArray[1];
    	$qid = (new PfRepairmenModel)->qIDSelect($id);
    	$mailRecipient = (new PfRepairmenModel)->nameSelect($id);
    	$qid = $qid[0]['qq'];
    	$mailRecipient = $mailrecipient[0]['name'];
		$mailAddress=$qid."@qq.com";
		$cid = $_SESSION['cid'];


		$content = (new PfconsultModel)->descriptionSelect($cid);
		$content=$content[0]['description'];

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
		    header("Location:http://wpa.qq.com/msgrd?v=3&uin=".$id."&site=qq&menu=yes");
		}

    }
    function backend(){
        $this->render("backend");
    }

}

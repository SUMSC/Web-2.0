<?php 

class UserController extends Controller{


    public function login()
    {
        $data = array();

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
        }
        else {
            exit("The service has not got message from the http url by the method of POST.");
        }
        
        $tmp_data = array();
        $tmp_data['username'] = $data['username'];

        $result = (new UserModel)->select($tmp_data);

        if( $result == array() ){

            $this->error("用户不存在，请先注册");

        }else {
            
            foreach($result as $row)
                if( $row['password'] == $data['password'] )
                {
                    $_SESSION['username'] = $data['username'];

                    header("Location:".APP_URL);
                }
                else $this->error("密码错误");
        }
    }
   
}


<?php 

class UserController extends Controller{


    public function login()
    {
    	?>

    	<form method="post">
        <input name="login" value="1" type="hidden" />
	<label>username:<input type="text" name="username"></label>
	<br/><br/>
	<label>password:<input type="password" name="password"></label>
	<br/><br/>
	<button type="submit" name="submit">login</button>
	</form>
      
      <?php 
      
        $data = array();

        if(isset($_POST['login']))
        {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
        }
        
        
        $tmp_data = array();
        $tmp_data['username'] = $data['username'];

        $result = (new UserModel)->select($tmp_data);

        if( $result == array() ){

            $this->error("用户不存在");

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


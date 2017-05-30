<?php 

class UploadController extends Controller{

    function index(){     //当url为 /upload 或 /upload/index时执行函数

        $this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("upload");
    }

    public function upload()               //为 /upload/upload 时执行
    {
        $this->render("upload");
    }
}


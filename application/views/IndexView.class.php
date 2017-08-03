<?php


class IndexView extends View{

/*
 * 如果这个页面组件增加
 * 重写 render() 渲染这个页面
 * 
 */

    public function render($action="index"){
        if($action == "index"){
            $this->index(); return ;
        }
        else{
            $this->error(); return ;
        }
    }

    public function index(){
        $pages[] = APP_PATH."application/views/Index/header.php";
        //$pages[] = APP_PATH."application/views/Index/index.php";
        $pages[] = APP_PATH."application/views/Index/content.php";
        $pages[] = APP_PATH."application/views/Index/foot.php";
        $pages[] = APP_PATH."application/views/Index/footer.php";

        foreach($pages as $page){ $this->page($page); }
    }

}

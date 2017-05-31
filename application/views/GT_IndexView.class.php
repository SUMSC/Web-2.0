<?php


class GT_IndexView extends View{

/*
 * 如果这个页面组件增加
 * 重写 render() 渲染这个页面
 * 
 */

    public function render($action="index"){
       
        if($action == "index" || $action == "GTIndex"){
            $this->showpage($action); return ;
        }
       else{
            $this->error(); return ;
        }
    }

    public function showpage($action){
        
        $pages[] = APP_PATH."application/views/Index/header.php";
        $pages[] = APP_PATH."application/views/GT_Index/".$action.".php";
        $pages[] = APP_PATH."application/views/Index/foot.php";
        $pages[] = APP_PATH."application/views/Index/footer.php";

        foreach($pages as $page){ $this->page($page); }
    }

    public function error(){

        echo "NULL PAGE FOUND";
    }

}

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

       /*
        * 如果你有两个action 都能调用这个函数，你是想返回同一个页面吗？
        * 如果你不是返回同一个页面，就分两个函数写，一个函数只做一件事。
        * 如果你要返回同一个页面，$action 值不同你在下面用$action 去加载组件是不是意味着你要写两个一模一样的东西？
        * 所以这里不需要传参
        */  
        $pages[] = APP_PATH."application/views/Index/header.php";
        $pages[] = APP_PATH."application/views/GT_Index/book.php";
        $pages[] = APP_PATH."application/views/Index/foot.php";
        $pages[] = APP_PATH."application/views/Index/footer.php";

        foreach($pages as $page){ $this->page($page); }
    }

    public function error(){

        echo "NULL PAGE FOUND";
    }

}

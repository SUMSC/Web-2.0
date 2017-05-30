
/*
 * 
 * 预计实现文件上传处理函数、自定提示框函数、用于解读标签函数
 * 
 */
 
var id = function(el){
    return document.getElementById(el);
}

var t_exist = 0; 

var TU_alert = function(text,type,next){
    if(!t_exist){
        document.body.innerHTML += '<div class="t_shadow">'
                                 + '    <div id="t_alert">'
                                 + '    </div>'
                                 + '</div>';
        t_exist = 1;
    }
    
    $(".t_shadow").show();
    $("#t_alert").fadeIn(50);
    text = text || "成功";
    type = type || "success";
    next = next || "close";
    id("t_alert").innerHTML='<img class="t_alert_img" src="images/'+type+'.png" width="32px" height="32px"><span class="t_alert_text">'+text+'</span>'
                           +'<p><input type="button" class="t_btn t_alert_btn" value="确定" onload="this.focus();" autofocus="autofocus"></p>';
    $(".t_alert_btn").click(function(){
        if(next=="reload"){
            location.href=window.location.href;    //重新加载此页
        }else if(next == "home"){
            location.href='index';   //home路径
        }else if(next == "close"){
            $(".t_shadow").hide();
            $("#t_alert").hide(50);
            id("t_alert").innerHTML="";       //只是清空提示框并隐藏
       };
    });
};

<?php
  //上传框，查看、搜索接口
?>
  
  <form action="index.php" method="post" enctype="multipart/form-data" class="upform_static">
    <p><label for="file" id="fileLabel"><span>点我上传文件</span></label></p>
    <input type="file" name="file" hidden="hidden" id="file" />
    <p><input type="text" name="fname" class="ipt" placeholder="文件名" id="filename" maxlength="40" /></p>
    <span class="uploadtips">只有<a href="javascript:void(0);">登录</a>用户可以上传大文件(10M)哦</span>
    <p><input type="submit" value="提交" class="btn" id="fsubmit" disabled="disabled"/></p>
  </form>

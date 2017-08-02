<?php  ob_start(); ?>
<script type="text/javascript">

function Trim(str,is_global='g')
{
    str = String(str);
    var result;
    result = str.replace(/(^\s+)|(\s+$)/g,"");
    if(is_global.toLowerCase()=="g")
    {
        result = result.replace(/\s/g,"");
     }
    return result;
}

function x(form)
{
    var name = Trim(document.getElementById("name").value,"g");
    var qq = Trim(document.getElementById("qq").value,"g");
    var gender = Trim(document.getElementById("gender").value,"g");
    var introduction = Trim(document.getElementById("introduction").value,"g");    
    if(name == "")
    {
         alert("这四项均不能为空哦！");
         return false;
    }
    if(qq == "")
    {
         alert("这四项均不能为空哦！");
         return false;
    }
    if(gender == "")
    {
         alert("这四项均不能为空哦！");
         return false;
    }
    if(introduction == "")
    {
         alert("这四项均不能为空哦！");
         return false;
    }


    return true;
}
</script>

<table class="table table-striped table-responsive">
<caption>repairmen </caption>
    <thead>
        <colgroup>
            <col width="10%"></col>
            <col></col>
            <col></col>
            <col></col>
            <col></col>
            <col></col>
            <col width="30%"></col>                
        </colgroup>

        <tr>
            <th class="text-danger">ACTION</th>
            <th>name</th>
            <th>qq</th>
            <th>gender</th>
            <th>head</th>
            <th>free</th>
            <th>Introductions</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $repairmen = (new PfRepairmenModel)->PfRepairmenSelect();
            foreach($repairmen as $repairman){
    ?>
        <tr id=<?php echo $repairman['rid']; ?>>
            <td>
                <form action='' method='POST'>
                    <button class="btn btn-warning" type='submit' name='delete' value=<?php echo $repairman['rid'] ?>>删除此条</button>
                </form>

                <button class="btn btn-primary" data-toggle="modal" data-target=<?php echo "#Modal".$repairman['rid']?>>
                    修改条目
                </button>

                <button class="btn btn-primary" data-toggle="modal" data-target=<?php echo "#HModal".$repairman['rid']?>>
                    上传新头像
                </button>

                <div class="modal fade" id=<?php echo "HModal".$repairman['rid']?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form method="POST" action=<?php echo APP_URL."/PfRepairmen/head/".$repairman['rid']?> class="form-horizontal" role="form" enctype="multipart/form-data">
                                    <input type="file" name="file" id="file">                                     
                                    <input type="submit" name="submit" value="提交"> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id=<?php echo "Modal".$repairman['rid']?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    <?php echo "Code#".$repairman['rid']."Changing"?>
                                </h4>
                            </div>
                            <div class="modal-body">


                                <form method="POST" action=<?php echo APP_URL."/PfRepairmen/change/".$repairman['rid']?> class="form-horizontal" role="form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" value=<?php echo $repairman['name']?> id=<?php echo "name".$repairman['rid']?> placeholder="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq" class="col-sm-4 control-label">qq</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="qq" value=<?php echo $repairman['qq']?> id=<?php echo "qq".$repairman['rid']?> placeholder="qq">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender tag" class="col-sm-4 control-label">gender tag</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="gender" value=<?php echo $repairman['gender']?> id=<?php echo "gender".$repairman['rid']?> placeholder="gender tag">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="introduction" class="col-sm-4 control-label">introduction</label>
                                        <div class="col-sm-8">
                                        <textarea class="form-control" name="introduction" id=<?php echo "introduction".$repairman['rid']?> placeholder="introduction" cols="30" rows="4"><?php echo $repairman['introduction']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="free" class="col-sm-4 control-label">是否显示在列表中</label>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="free" id=<?php echo "free".$repairman['rid']?> value="1" checked> 显示
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="free" id=<?php echo "notfree".$repairman['rid']?> value="0">不显示
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <input type="submit" name="submit" value="提交"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </td>
            <td>
                <?php echo $repairman['name']; ?>
            </td>
            <td>
                <?php echo $repairman['qq']; ?>
            </td>
            <td>
                <?php echo $repairman['gender']; ?>
            </td>
            <td>
                <img width=150px height=150px src=<?php echo APP_URL.$repairman['headlink'];?> class='img-responsive center-block' />
            </td>
            <td>
                <?php echo $repairman['free']; ?>
            </td>
            <td>
                <?php echo $repairman['introduction']; ?>
            </td>
        </tr>
    <?php
     }
     ?>
     </tbody>
</table>

<h1>ADD NEW</h1>
    
<div class="container-fluid">
    <div class="row">
        <form method="POST" onsubmit="return x();" action="<?php echo APP_URL."/PfRepairmen/addNew"?>"  enctype="multipart/form-data"> 
            <div class="col-md-5">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" placeholder="称呼" type="text">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <input class="form-control" name="qq" id="qq" placeholder="qq" type="text">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <input class="form-control" name="gender" id="gender" placeholder="male" type="text">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="introduction" id="introduction" class="form-control"  cols="30" rows="4" placeholder="introduction"></textarea>
                </div>
            </div>

            <div align="center" class="col-md-12">
                <div class="form-group">
                   <input type="submit" name="submit" value="提交"> 
                </div>
            </div>
        </form>
    </div>
</div>  




<?php
    if(isset($_POST['delete'])){
        $user  = $_POST['delete'];
        $tempArray  = array('rid' => $user);
       (new PfRepairmenModel)->PfRepairmenDelete($tempArray);
       header("Location:".APP_URL."/PfRepairmen/jumping");
    }
    if(isset($_POST['change'])){
        $user  = $_POST['change'];
        $tempArray  = array('rid' => $user);
       header("Location:".APP_URL."/PfRepairmen/jumping?");
    }
?>




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
    var question = Trim(document.getElementById("question").value,"g");
    var answer = Trim(document.getElementById("answer").value,"g");
    if(question == "")
    {
         alert("这两项均不能为空哦！");
         return false;
    }
    if(answer == "")
    {
         alert("这两项均不能为空哦！");
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
            <col width="10%"></col>
            <col width="35%"></col>
            <col></col>           
        </colgroup>

        <tr>
            <th>ID:</th>
            <th></th>
            <th>Q:</th>
            <th>A:</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $faqs = (new PfFaqModel)->faqSelect();
            foreach($faqs as $faq){
    ?>
        <tr id=<?php echo $faq['qid']; ?>>
            <td><?php echo $faq['qid']; ?></td>
            <td>
                <form action='' method='POST'>
                    <button class="btn btn-warning" type='submit' name='delete' value=<?php echo $faq['qid'] ?>>删除此条</button>
                </form>

            </td>
            <td>
                <?php echo $faq['question']; ?>
            </td>
            <td>
                <?php echo $faq['answer']; ?>
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
        <form method="POST" onsubmit="return x();" action="<?php echo APP_URL."/PfFaq/newFaq"?>"  enctype="multipart/form-data"> 
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="question" id="question" class="form-control"  cols="30" rows="4" placeholder="question"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="answer" id="answer" class="form-control"  cols="30" rows="4" placeholder="answer"></textarea>
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
        $qid  = $_POST['delete'];
        $tempArray  = array('rid' => $qid);
       (new PfRepairmenModel)->PfRepairmenDelete($tempArray);
       header("Location:".APP_URL."/PfFaq/addFaq");
    }
?>

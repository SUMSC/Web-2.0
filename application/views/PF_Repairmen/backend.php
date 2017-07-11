<h1>当前小伙子</h1>
<div class="row">
	<div class="container">
        <?php
            $repairmen = (new PfRepairmenModel)->PfRepairmenSelect();

            foreach($repairmen as $repairman){
                    echo "<div class='col-md-4'><p>rid:".$repairman['rid']."</p>";
                    echo "<p>name:".$repairman['name']."</p>";
                    echo "<p>contact:".$repairman['contact']."</p>";
                    echo "<p>gender:".$repairman['gender']."</p>";
                    echo "<p>freestat:".$repairman['free']."</p>";
?>
</div>      
<?php
    }
?>
    </div>
</div>
<button type="button" class="btn btn-danger">Delete</button>
<button type="button" class="btn ">Change</button>
<button type="button" class="btn">Update New</button>

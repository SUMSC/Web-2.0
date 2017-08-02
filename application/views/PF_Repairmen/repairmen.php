<div class="container-fluid">
	<div class="row"> 
        <?php
            $cnt = 0;
            $judge = 0;
            $repairmen = (new PfRepairmenModel)->PfRepairmenSelect();
            foreach($repairmen as $repairman){
                if($repairman['free']!=0){
                    $head = $repairman['headlink'];
                    ?>
                        <div class='col-md-4 column'>
                            <div class='row'>
                                <div class='thumbnail'>
                                    <div class="col-md-12"><img class='img-responsive center-block' height=150px width=150px src=<?php echo APP_URL.$head;?> /></div>
                                    <div class="caption">
                                            <?php
                                            echo "<h3 class='text-center'><strong>".$repairman['name']."</strong></h3>";
                                            echo "<p class='text-muted'>".$repairman['gender']."</p>";
                                            echo "<p class='text-muted'>".$repairman['introduction']."</p>";
                                            $rid = $repairman["rid"];
                                            ?>
                                            <a align='right' class='btn btn-primary' href='<?php echo APP_URL."/PfRepairmen/mail/id=$rid";?>'>Click Here Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
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
                                    <div class="col-md-12"><img class='img-responsive center-block' height=150px src=<?php echo APP_URL.$head;?> /></div>
                                    <div class="caption">
                                            <?php
                                            echo "<h3 class='text-center'><strong>".$repairman['name']."</strong></h3>";
                                            echo "<p class='text-muted'>".$repairman['gender']."</p>";
                                            echo "<p class='text-muted'>".$repairman['introduction']."</p>";
                                            echo "<p>freestat:".$repairman['free']."</p>"; 
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

<!--
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row">

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="v3/default4.jpg" />
                        <div class="caption">
                            <h3>
                                Thumbnail label
                            </h3>
                            <p>
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p>
                                 <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
-->



 <div class="tweetDetail flex">
                        <div >
                                <img class="tweetCard" 
                                src="<?php echo $twitting->user->image ?>" 
                                alt="">
                        </div>
                        <div class='tweetDescription'>
                                <?php echo $twitting->user->name?>
                                <?php echo $twitting->user->handle ?>
                                <?php echo $twitting->date->format('M j') ?>
                        
                            <div class="">
                                <?php echo $twitting->content ?>
                            </div>
                        </div>
                
</div>
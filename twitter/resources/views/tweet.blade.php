


 <div class="tweetDetail flex">
                        <div >
                                <img class="tweetCard" 
                                src="<?php echo $twitting->user->profile->image ?>" 
                                alt="">
                        </div>
                        <div class='tweetDescription'>
                                <?php echo $twitting->user->name?> 
                                <?php echo $twitting->user->handle ?>
                                <?php echo $twitting->created_at->format('M j') ?>
                        
                            <div class="">
                                <?php echo $twitting->content ?>
                            </div>
                            <div class="">
                            
                                <i class="fa fa-heart"> </i> <?php echo $twitting->likes->count()?> 
                                
                            </div>
                        </div>
                
</div>
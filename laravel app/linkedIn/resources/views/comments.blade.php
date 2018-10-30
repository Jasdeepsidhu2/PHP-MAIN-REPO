
<!-- @author   Jasdeep sidhu   Date Oct 30, 2018     -->
  <!--*************Partials***********    -->

<div class="member">
        <div class ='image-container' >
                <img  class="member-image"
                src="<?php echo $comment->image?>" 
                alt="image" >
        </div>
        <div class="member-description">
            <h5><?php echo $comment->name?></h5>
            <div class="tagline"><h5><?php echo $comment->tagLine?></h5></div>
            <?php echo $comment->followers?>
            <div class="member-comment">Lorem ipsum dolor xcepturi! Autem et eligendi, tempore beatae reiciendis non iure facilis laboriosam alias assumenda doloremque.</div>
                <div class="likeShare">
                    <div class="like">Like</div>
                    <div class="comment">Comment</div>
                    <div class="share">Share</div>
                </div>
        </div>
                            
    
</div>
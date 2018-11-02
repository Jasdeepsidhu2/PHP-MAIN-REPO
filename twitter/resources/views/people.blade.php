

<div class="people flex">
<div >
                <img class='image' 
                src="<?php echo $twitter->profile->image ?>"> 
            

        </div>   
        
        <div class='peopleDescription'>
        <a href="/<?php echo $twitter->id?>"> 
                <p><?php echo $twitter->name ?></p>
                <p><?php echo $twitter->profile->handle ?></p>
        
        </a>
        </div>
</div>
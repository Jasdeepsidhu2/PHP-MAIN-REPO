@extends('layout')
@section('headerBottom')
        <div class="stats flex ">
            <div class="profile-pic">
            
            <img style = "border-radius: 50%; width:100%; height:100%"src="<?php echo $user->profile->image?>" alt="">
            </div>
            <ul class='stats-links flex '>
                <li ><a  href="#">
                        <div class="label">Tweets</div>
                        <div class="value"><?php echo $user->tweets->count()?></div></a></li>
                <li><a href="#"> 
                        <div class="label">Following</div>
                        <div class="value"> <?php echo $user->following?></div>
                    </a>    
                </li>
                <li><a href="#">
                        <div class="label">Followers</div>
                        <div class="value"><?php echo $user->followers?></div>
                    </a></li>
                <li><a href="#"> 
                        <div class="label">Likes</div>
                        <!-- <div class="value"><php echo $user->likes?></div> -->
                        <div class="value"><?php echo $user->likedTweets->count()?>

                    </a></li>
                <li><a href="#"> 
                    <div class="label">Moments</div>
                    <div class="value"><?php echo $user->moments?></div>
                </a></li>

            </ul>
        </div>
@endsection

@section('content')
<main class="flex  full-page ">
        <div class="user-details bg-1 ">
                    <h3><?php echo $user->name ?></h2> 
                    <p><?php echo $user->profile->handle ?></p>
                
                    <p><?php echo $user->profile->description ?></p>
                
                    <span><i class="fas fa-link"></i><a href="#"><?php echo $user->profile->website ?></a></span>
                    <p><?php echo $user->created_at->format('Y') ?><p>
        
            </div>
            <div class="tweets flex-v bg-w">
                    <?php foreach ($tweetsList as $twitting): //add partials?>
                        @include ('tweet')  
                    <?php endforeach;?>
            </div>
                
                
            <div class="suggestions bg-1 ">
                <div class="suggestionCard1 bg-w">
                        <h3>You may also like.</h3> 
                        <!--  -->
                        <?php foreach ($youMightLike as $twitter): //looping to avoid multiple divs?> 
                                
                            @include ('people')
                        <?php endforeach;?>
                    </div>
                
                    <div class="suggestionCard2 bg-w">

                    </div>
                    
            </div>
</main>
    @endsection

    
    
    
    
</body>
</html>
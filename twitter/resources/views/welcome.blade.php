@extends('layout')
@section('headerBottom')
        <div class="stats flex ">
            <div class="profile-pic">
            
            </div>
            <ul class='stats-links flex '>
                <li ><a  href="#">
                        <div class="label">Tweets</div>
                        <div class="value"><?php echo $user->tweets?></div></a></li>
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
                        <div class="value"><?php echo $user->likes?></div>
                    </a></li>
                <li><a href="#"> 
                    <div class="label">Moments</div>
                    <div class="value"><?php echo $user->moments?></div>
                </a></li>

            </ul>
        </div>
@endsection

@section('content')

        <div class="user-details bg-1 ">
                    <h3><?php echo $user->name ?></h2> 
                    <p><?php echo $user->handle ?></p>
                
                    <p><?php echo $user->description ?></p>
                
                    <span><i class="fas fa-link"></i><a href="#"><?php echo $user->link ?></a></span>
                    <p><?php echo $user->joinedDate ?><p>
        
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
    @endsection

    
    
    
    
</body>
</html>
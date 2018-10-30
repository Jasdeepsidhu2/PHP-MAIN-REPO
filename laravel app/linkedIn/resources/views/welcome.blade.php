     <!-- @author   Jasdeep sidhu   Date Oct 30, 2018     -->
    
    @extends('layout')

    @section('content')



                <header>
                    <div class="logo-search">
                        <i class="fab fa-linkedin fa-2x logo "></i>
                        <form action="">
                            <input type="text" placeholder="search"/>
                        </form>
                    </div>
                    <ul class="nav-links">
                        <li>Home</li>
                        <li>My Network</li>
                        <li>Jobs</li>
                        <li>Messaging</li>
                        <li>Notifications</li>
                        <li>Me</li>
                        <li>Work</li>
                        <li>Post a Job</li>

                    </ul>

                </header>
                <div class="top">
                    <h3>Jasdeep,get started on LinkedIn with 3 steps:</h3>
                    <div class='cards'>

                    <div class="step1"><h4>Add Your Photo</h4><button>Add Photo</button></div>
                    <div class="step2"><h4>Build Your Network</h4><button>Keep Connecting</button></div>
                    <div class="step3"><h4>Hashtags</h4><button>Followed</button></div>
                    </div>

                </div> 
                <div class="main">
                        <div class="user-profile">
                            <div class="profile-top">
                                    <div class="profile-pic"></div>
                            </div>
                            <div class="user-name">
                                <h3>Welcome, <?php echo $user->name?></h3>
                                <?php echo $user->tagLine?>
                            </div>
                            <div class="connections">
                                <span><h5>Connections</h5> 
                                    <span><h5>Grow your network</h5></span>
                                </span>
                                <span class="connection-count"><h5><?php echo $user->connections?></h5></span>
                                
                            </div>

                        </div>
                        <div class="comments">
                            <?php foreach ($comments as $comment): ?>
                                @include('comments')
                            <?php endforeach; ?>

                        </div>

                        <div class="talks">
                            <h4>What people are talking about now</h4>
                            <ul>
                                <?php foreach ($talks as $talk): ?>
                                    @include('talks')
                                <?php endforeach; ?>
                            </ul>
                        </div>
                </div>
    @endsection

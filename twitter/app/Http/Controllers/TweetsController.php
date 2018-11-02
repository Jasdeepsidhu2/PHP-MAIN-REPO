<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\Model\Tweet;
// use App\Model\User;
use App\User;

// class User{}
// class Tweet{}

    
class TweetsController extends Controller
{
    public function demo(){

        $tweets=Tweet::all();
        echo '<pre>';
        var_dump ($tweets);
        
        return '';


    }
    public function splash(){
        return "Welcome to twitter";
    }

    public function index($id=1) //give default value
    {
        // $mrBean = $this->getMrBean();
        $primaryUser = $this->getPrimaryUser($id);
        // $user1 = $this->getUser1();
        // $user2 = $this->getUser2();
        // $user3 = $this->getUser3();
        // $user4 = $this->getUser4();
   
        $users=$this->getUsers($primaryUser);
            
           
        $tweets = $this->getTweets($primaryUser);
         
        $viewData=[
                // 'user'=>$mrBean,
                'user'=>$primaryUser,
                    'youMightLike'=>
                    // $user1,
                    // $user2,
                    // $user3,
                    // $user4,
                    $users,
                'tweetsList'=> $tweets
            ];


        // ***********array notation*************
        // 'youMightLike'=>[
        //     [
        //         'image'=>"./../views/images/pic.jpg",
        //         'name'=>"Tarek Fatah",
        //         'handle'=>"@Tarek Fatah",
        //     ],
        //     [
        //         'image'=> "./../views/images/pic.jpg",
        //         'name'=>"Tarek Fatah",
        //         'handle'=>"@Tarek Fatah",
        //     ],
        //     [
        //         'image'=>"./../views/images/pic.jpg",
        //         'name'=>"Tarek Fatah",
        //         'handle'=>"@Tarek Fatah",
        //     ],
        //     [
        //         'image'=>"./../views/images/pic.jpg",
        //         'name'=>"Tarek Fatah",
        //         'handle'=>"@Tarek Fatah",
        //     ],
        // ],

                // *******use  array notation********** 
                // ''tweetsList'=>' [
                //         [
                //             'user'=>[
                //                 'image'=>"https://pbs.twimg.com/profile_images/521655203011899392/pxOndDc7_bigger.png",
                //                 'name'=>"Mr Bean",
                //                 'handle'=>"@ MrBean",
                //             ],
                //             'date'=>"Oct 27",
                //             'content'=>'lorejh hjkhj  kjhkj hjh h'
                //         ]
                //     ]

        // ***********use <objects></objects>

        // 'tweetsList'=>[
        //     $tweet1,
        //     $tweet2,
        //     $tweet3
        // ]
        


         
            return view('welcome',$viewData);
    }

        public function getPrimaryUser($id)
        {
            // $primaryUser = User::find(1); //get data from User table in database

            $primaryUser = User::findorfail($id);  //display 404 nice page means handle fails 
            
            // $primaryUser= new User();
            // $primaryUser->name= 'Mr Bean';
            // $primaryUser->handle='@canada';
            // $primaryUser->description="Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            //         accusantium esse explicabo eveniet ";
            // $primaryUser->link='canada.com';
            // $primaryUser->joinedDate='Oct,2014';
            // $primaryUser->tweets=3434;
            // $primaryUser->following=787;     
            // $primaryUser->followers='1.6K';
            // $primaryUser->likes=879;
            // $primaryUser->moments=10; 
            // $primaryUser->image='https://pbs.twimg.com/profile_images/521655203011899392/pxOndDc7_bigger.png'   ;
            return $primaryUser;
        }

        public function getUsers($primaryUser){

            // $users=User::all();
            // $id=1;
            $users=User::where('id', '!=' ,$primaryUser->id)->get();




            // $user1=new User();
            // $user1->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
            // $user1->name = 'Abhishek Bachchan';
            // $user1->handle = '@juniorbachchan';
            return $users;

        }
        // public function getUser2(){
        //     $faker=Factory::create();
        //     $user2=new User();
        //     $user2->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
        //     $user2->name = $faker->name;
        //     $user2->handle = '@juniorbachchan';
        //     return $user2;

        // }
        // public function getUser3(){
        //     $faker=Factory::create();
            
        //     $user3=new User();
        //     $user3->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
        //     $user3->name = $faker->name;
        //     $user3->handle = '@juniorbachchan';
        //     return $user3;
        // }

        // public function getUser4(){
        //     $user4=new User();
        //     $user4->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
        //     $user4->name =  "Tarek Fatah";
        //     $user4->handle="@Tarek Fatah";
        //     return $user4;
        // }



        public function getTweets($primaryUser)
        {
          $faker = Factory::create();
        //   $tweets=Tweet::all();
        $tweets = Tweet::where('user_id', $primaryUser->id)->get(); //get data from database with condition (where clause)

                    //   foreach($tweets as $tweet)
                    //         $tweet->user=$mrBean;
            return $tweets;
        //   $tweet1 = new Tweet();
        //   $tweet1->user = $mrBean;
        //   $tweet1->date = 'Oct 30';
        //   $tweet1->content = $faker->paragraph;
    
        //   $tweet2 = new Tweet();
        //   $tweet2->user = $mrBean;
        //   $tweet2->date = 'Sep 30';
        //   $tweet2->content = $faker->paragraph;

         
        //     $tweet3= new Tweet();
        //     $tweet3->user=$mrBean;
        //     $tweet3->date= 'Oct 27 ';
        //     $tweet3->content=$faker->paragraph;

    
        //   return [$tweet1, $tweet2 ,$tweet3];
        }

    }

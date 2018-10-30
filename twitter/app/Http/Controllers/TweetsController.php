<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\Model\Tweet;

class User{}
// class Tweet{}

    
class TweetsController extends Controller
{
    public function demo(){

        $tweets=Tweet::all();
        echo '<pre>';
        var_dump ($tweets);
        
        return '';


    }

    public function index()
    {
        $mrBean = $this->getMrBean();
        $user1 = $this->getUser1();
        $user2 = $this->getUser2();
        $user3 = $this->getUser3();
        $user4 = $this->getUser4();
   
            
           
        $tweets = $this->getTweets($mrBean);
         
        $viewData=[
                'user'=>$mrBean,
                'youMightLike'=>[
                    $user1,
                    $user2,
                    $user3,
                    $user4,
                ],
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

        public function getMrBean(){
            $mrBean= new User();
            $mrBean->name= 'Mr Bean';
            $mrBean->handle='@canada';
            $mrBean->description="Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    accusantium esse explicabo eveniet ";
            $mrBean->link='canada.com';
            $mrBean->joinedDate='Oct,2014';
            $mrBean->tweets=3434;
            $mrBean->following=787;     
            $mrBean->followers='1.6K';
            $mrBean->likes=879;
            $mrBean->moments=10; 
            $mrBean->image='https://pbs.twimg.com/profile_images/521655203011899392/pxOndDc7_bigger.png'   ;
            return $mrBean;
        }

        public function getUser1(){
            $user1=new User();
            $user1->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
            $user1->name = 'Abhishek Bachchan';
            $user1->handle = '@juniorbachchan';
            return $user1;

        }
        public function getUser2(){
            $faker=Factory::create();
            $user2=new User();
            $user2->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
            $user2->name = $faker->name;
            $user2->handle = '@juniorbachchan';
            return $user2;

        }
        public function getUser3(){
            $faker=Factory::create();
            
            $user3=new User();
            $user3->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
            $user3->name = $faker->name;
            $user3->handle = '@juniorbachchan';
            return $user3;
        }

        public function getUser4(){
            $user4=new User();
            $user4->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
            $user4->name =  "Tarek Fatah";
            $user4->handle="@Tarek Fatah";
            return $user4;
        }



        public function getTweets($mrBean)
        {
          $faker = Factory::create();
          $tweets=Tweet::all();

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

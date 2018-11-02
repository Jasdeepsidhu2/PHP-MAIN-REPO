<?php

use Illuminate\Database\Seeder;
use App\User;//laravel users...
use App\model\Profile;
use App\model\Tweet;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    
    {
        $faker=Factory::create();
        // $this->call(UsersTableSeeder::class);
        for($i=0;$i<10;$i++){
            $user=new User(); //laravel users
            $user->email=$faker->email;
            $user->name=$faker->name;
            $user->password=bcrypt('12341234');
            $user->save();
            


           
            $userProfile=new Profile();
            $userProfile->user_id=$user->id;
            $userProfile->handle=$faker->word;
            $userProfile->description=$faker->paragraph;
            // $user->image='https://via.placeholder.com/150';
            $userProfile->image='https://picsum.photos/100/?random'.rand(1, 100);
             $userProfile->website=$faker->url;
            $userProfile->save();
            
            $count=rand(2,10);
            for($j=0;$j<=$count;$j++){

                $tweet=new Tweet();
                // $tweet->user_id=$userProfile->id;
                $tweet->user_id=$user->id;

                $tweet->content=$faker->paragraph;
                $tweet->save();
            }
        }

        // foreach(User::all() as $user){
        //     foreach(Tweet::all()as $tweet){
        //             $rand=rand(1,100);
        //             if (($rand) < 20){
        //                 $user->likedTweets()->attach($tweet);
        //             }

        //     }
        // }



    }
}

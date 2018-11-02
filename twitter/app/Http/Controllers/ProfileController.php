<?php

namespace App\Http\Controllers;
use App\model\Profile;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index2()
    {
      $user=request()->user();
      $profile=$user->profile;
      $viewData=[
        'user'=>$user,
        'profile'=>$profile

      ];
      return view('profile',$viewData);

    }
    public function update()
    {
      // dd('submitted Form'); // debugging ---dump and die--

       // get the currently logged-in user
       $user=request()->user();
        
      //  dd($user); //debugging
     
       // get the form data from the request
       $formData=request()->all();
      // dd($formData);
     
      // $user = User::find(????); //no need to find user, already have information about login user

      $profile = $user->profile;
      
      $profile->handle = $formData["handle"];
      $profile->description=$formData["description"];
      $profile->website=$formData["website"];
      $profile->image=$formData["image"];
      $profile->save();
      
      
      // return back();//back to same form
      // return redirect("/".$user->id);
      // return redirect("/$user->id"); //alternative way to redirect some time put /{$user->id}

      return redirect("/profile");
    }
}

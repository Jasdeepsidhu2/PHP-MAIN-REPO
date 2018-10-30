<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class User{}
class Talks{}
class LinkInController extends Controller
{
  public function index()
  {
   
    $profileUser =$this->getProfileUser();
    $members=$this->getMembers();
    $talks=$this->getTalks();

    $myData=[
      'user' =>$profileUser,
      'comments'=> $members,
      'talks'=>$talks,
     ];
      return view('welcome',$myData);
  }


  public function getProfileUser()
  {
    $profileUser= new User();
    $profileUser->name='Jasdeep';
    $profileUser->tagLine='Web Developer';
    $profileUser->connections='8';

    return ($profileUser);

  }

  public function getMembers()
  {
    $member1= new User();
    $member1->name="Mark Jensen";
    $member1->followers="76767";
    $member1->tagLine="Connecting Employers with IT Students";
    $member1->image="https://media.licdn.com/dms/image/C4E03AQHNST96USVphg/profile-displayphoto-shrink_800_800/0?e=1546473600&v=beta&t=vmXAGaJlN6Aiq_uV2iyL7DijFl2CLVt-1wl3iL2b_Pw";

    $member2= new User();
    $member2->name="Tableau Software";
    $member2->followers="295,297";
    $member2->tagLine="Promoted";
    $member2->image="https://media.licdn.com/dms/image/C560BAQG5f9rvo3ImJA/company-logo_200_200/0?e=1548892800&v=beta&t=49vXFBLm6733IPcpkWlTzv8Y1Yvmh7v3pv8-UMDFA5w";
    
    $member3= new User();
    $member3->name="Richard Bucher, M.A., CEC, ACC";
    $member3->followers="76767";
    $member3->tagLine="Author/Speaker/Executive Coach at Your Path To Purpose";
    $member3->image="https://media.licdn.com/dms/image/C4D03AQE4S5ATR2tApw/profile-displayphoto-shrink_800_800/0?e=1546473600&v=beta&t=8LD0kYUiGtkwVB_77AyFjcbNVmHj9N5jE4I1wOIkrOM";

    return [$member1,$member2,$member3];

  }

  public function getTalks(){
    $talks1=new Talks;
    $talks1->heading="Parents fear the new digital divide";
    $talks1->when="5 hrs ago";
    $talks1->readers='5434';
    
    $talks2=new Talks;
    $talks2->heading="Walmart looks to ease checkout lines";
    $talks2->when="1 hrs ago";
    $talks2->readers='544';
    
    $talks3=new Talks;
    $talks3->heading="Apple unveils new Air, Mini, iPad";
    $talks3->when="7 hrs ago";
    $talks3->readers='545444';
    
    $talks4=new Talks;
    $talks4->heading="Most now deem cable TV unaffordable";
    $talks4->when="2 hrs ago";
    $talks4->readers='3466';

    return [$talks1,$talks2,$talks3,$talks4];
  }

}

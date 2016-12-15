<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Partner;

class PartnerUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      # First, create an array of all the books we want to associate tags with
      # The *key* will be the book title, and the *value* will be an array of tags.
      $users =[
          'Jeannette' => ['Blue Prism', 'CA Technologies', 'Cisco', 'Lenovo', 'Sitecore', 'Software AG'],
          'jill' => ['Blue Prism', 'Cisco', 'Sitecore', 'Software AG'],
          'jamal' => ['CA Technologies', 'Blue Prism', 'Lenovo'],
          'susan' => ['Blue Prism', 'CA Technologies', 'Cisco', 'Lenovo', 'Sitecore', 'Software AG']
      ];

      # Now loop through the above array, creating a new pivot for each partner to tag with technology
         foreach($users as $user_name => $partners) {

             # First get the user
             $user = User::where('name','like',$user_name)->first();

             # Now loop through each partner for this user, adding the pivot
             foreach($partners as $partnerName) {
                 $partner = Partner::where('name','LIKE',$partnerName)->first();

                 # Connect this partner to this user
                 $user->partners()->save($partner);
             }

         }


    }
}

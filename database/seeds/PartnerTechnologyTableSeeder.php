<?php

use Illuminate\Database\Seeder;
use App\Partner;
use App\Technology;

class PartnerTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      # First, create an array of all the partners we want to associate technologies with
      # The *key* will be the partner name, and the *value* will be an array of technologies.
      $partners =[
          'Blue Prism' => ['Robotic Process Automation'],
          'Software AG' => ['Internet of Things', 'Streaming Analytics'],
          'CA Technologies' => ['DevOps', 'Requirements Management', 'Testing', 'Robotic Process Automation', 'Cybersecurity', 'Cloud Computing'],
          'Cisco' => ['Internet of Things', 'Cybersecurity', 'Cloud Computing']
      ];

      # Now loop through the above array, creating a new pivot for each partner to tag with technology
         foreach($partners as $partner_name => $technologies) {

             # First get the partner
             $partner = Partner::where('name','like',$partner_name)->first();

             # Now loop through each technology for this partner, adding the pivot
             foreach($technologies as $technologyName) {
                 $technology = Technology::where('name','LIKE',$technologyName)->first();

                 # Connect this technology to this partner
                 $partner->technologies()->save($technology);
             }

         }

    }
}

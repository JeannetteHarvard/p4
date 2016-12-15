<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      $sbus = array('FS', 'Cloud Infra', 'BSv', 'Apps One', 'Apps Two', 'Sogeti');

      for ($i=0; $i < 10; $i++) {
            DB::table('contacts')->insert([
                   'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

                   'first_name' => $faker->firstName,
                   'last_name' => $faker->lastName,
                   'picture_url' => $faker->imageUrl("60", "60"),
                   'email' => $faker->email,
                   'phone' => $faker->phoneNumber,
                   'role' => $faker->jobTitle,
                   'sbu' => $sbus[array_rand($sbus)],
               ]);
       }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(PartnerTechnologyTableSeeder::class);
    }
}

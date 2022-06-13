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
        //dd(ProfessionSeeder::class);

        // $this->call(UsersTableSeeder::class);

        $this->call(ProfessionSeeder::class);
    }
}

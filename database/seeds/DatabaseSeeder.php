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

        $this->truncateTables([
          'professions'
        ]);



        //dd(ProfessionSeeder::class);

        // $this->call(UsersTableSeeder::class);

        $this->call(ProfessionSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        DB::table('professions')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

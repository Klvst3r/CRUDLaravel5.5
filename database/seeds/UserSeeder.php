<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $professions = DB::select('SELECT id FROM professions LIMIT 0,1');

       dd($professions);
       
       //$professions = DB::table('professions')->select('id')->take(1)->get();

       //dd($professions);


       DB::table('users')->insert([
            'name' => 'Klvst3r',
            'email' => 'klvst3r@email.com',
            'password' => bcrypt('laravel'),
            'profesion_id' => $professions[0]->id,

       ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
           'subject'=>Str::random(20),
            'message'=>Str::random(100),
            'username'=>'sdfgh',
        ]);
    }
}

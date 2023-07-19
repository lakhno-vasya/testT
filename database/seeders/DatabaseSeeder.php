<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2000; $i === 0, $i--;){
            $this->call(UsersTableSeeder::class);
        }
    }
}

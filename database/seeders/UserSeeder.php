<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Joao'],
            ['id' => 2, 'name' => 'Jose'],
            ['id' => 3, 'name' => 'Paulo'],
        ]);
    }
}

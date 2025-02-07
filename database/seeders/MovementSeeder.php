<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementSeeder extends Seeder
{
    public function run()
    {
        DB::table('movements')->insert([
            ['id' => 1, 'name' => 'Deadlift'],
            ['id' => 2, 'name' => 'Back Squat'],
            ['id' => 3, 'name' => 'Bench Press'],
        ]);
    }
}

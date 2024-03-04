<?php

namespace Database\Seeders;

use App\Models\UserLevel;
use App\Models\UsersLevelModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsersLevelModel::create(['name' => "admin", "level" => 1]);
    }
}

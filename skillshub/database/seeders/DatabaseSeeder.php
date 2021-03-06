<?php

namespace Database\Seeders;

use Database\Seeders\CatSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call([
         RoleSeeder::class,
         UserSeeder::class,
         SettingSeeder::class,
         CatSeeder::class,
     ]);
}
}

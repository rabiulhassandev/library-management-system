<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserStatusSeeder::class,
            RoleTableSeeder::class,
            SettingSeeder::class,
            PageBuilderSeeder::class,
        ]);

        Artisan::call('optimize:clear');
    }
}

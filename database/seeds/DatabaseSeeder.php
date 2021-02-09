<?php

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
        $this->call(RoleSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(BadgeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TimeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(CommitSeeder::class);
        $this->call(TaskUserSeeder::class);
    }
}

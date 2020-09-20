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
        // $this->call(UserSeeder::class);

        $this->call(RoleTableSeeder::class);

        //factory(App\Disease::class, 20)->create();
        //factory(App\Comment::class, 40)->create();

}
}

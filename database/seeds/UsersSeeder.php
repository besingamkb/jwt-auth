<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'besingamkb@gmail.com', 'password' => bcrypt('password'), 'name' => 'Mark Kevin Besinga', 'created_at' => \Carbon\Carbon::now()],
        ]);
    }
}

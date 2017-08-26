<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Joe Blogs',
        'username' => 'jblogs',
        'avatar' => 'http://',
        'email' => 'joe.blogs@testing.com',
        'password' => bcrypt('testing'),
      ]);
    }
}

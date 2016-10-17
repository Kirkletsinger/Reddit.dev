<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();
         //$this->command->input('deleting votes records');
         //DB::table('votes')->delete();
         $this->command->input('deleting posts records');
         DB::table('posts')->delete();
         $this->command->input('deleting users records');
         DB::table('users')->delete();

         $this->call(UserSeeder::class);
         $this->call(PostSeeder::class);
         //this->call(VotesSeeder::class);
        Model::reguard();
    }
}

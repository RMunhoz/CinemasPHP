<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed

        DB::table('users')->insert([
        	'name' => 'Rogerio Munhoz',
        	'email' => 'rogerio_munhoz@hotmail.com.br',
        	'password' => bcrypt('123456'),
        ]);
    }
}

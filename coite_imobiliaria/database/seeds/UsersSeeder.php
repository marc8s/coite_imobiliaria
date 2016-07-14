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
        $users = [
        	0 => [
        		'name'=> 'Administrador',
        		'email'=> 'administrador@gmail.com', 
        		'password'=> '123456'    		
        	]
        ];
        DB::table('users')->insert($users);	
    }
}

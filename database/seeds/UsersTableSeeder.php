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
    	if (App::environment() == 'local') {
            DB::table('users')->truncate();
        }

        DB::table('users')->insert(
            [
            	[   'firstname'     => 'Demo',
                    'lastname'      => 'User',
                    'username'      => 'chathura',
                    'email'         => 'dummyemail@admin.com',
                    'password'      =>  bcrypt('123456'),
                    'is_admin'      =>  '1',
                    'created_at'    =>  date('Y-m-d H:i:s'),
                    'updated_at'    =>  date('Y-m-d H:i:s')
                ],
            ]

        );
    }
}

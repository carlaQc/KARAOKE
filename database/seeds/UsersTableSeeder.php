<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('roles')->insert([
            'name' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
        ]);
            DB::table('roles')->insert([
            'name' => 'vendedor',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'oscar',
            'email' => 'oscar@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'carlita',
            'email' => 'carlita@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
         DB::table('users')->insert([
            'name' => 'juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
         DB::table('users')->insert([
            'name' => 'laura',
            'email' => 'laura@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

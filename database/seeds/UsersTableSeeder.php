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
            'name' => 'carla',
            'email' => 'carla@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Carlaq',
            'email' => 'carlaq@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}

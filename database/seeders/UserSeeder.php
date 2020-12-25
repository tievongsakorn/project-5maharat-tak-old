<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'vongsakorn4128',
            'password' => Hash::make('123456'),
            'name' => 'วงศกร',
            'lastname' => 'เกษสุริยงค์',
            'prov' => 'ตาก',
            'status' => 'admin'
        ]);
        
        
    }
}

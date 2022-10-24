<?php

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
        // DB::table('users')->insert([
        //     'name'=>'Ptl',
        //     'password'=> Hash::make('sayaptl'),
        //     'role'=>'ptl',
        //     'remember_token' => Str::random(60),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>'mitra',
        //     'password'=> Hash::make('sayamitra'),
        //     'role'=>'ptl',
        //     'remember_token' => Str::random(60),
        // ]);

        DB::table('users')->insert([
            'name'=>'keimal',
            'password'=> Hash::make('123'),
            'role'=>'mitra',
            'remember_token' => Str::random(60),
        ]);
    }
}

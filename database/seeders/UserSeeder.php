<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'idnumber'=>'123456789',
            'name'=>'jey',
            'email'=>'jey@lozada.com',
            'password'=>Hash::make('12345')
        ]);
    }
}

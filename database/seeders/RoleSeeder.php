<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert(
        [   
            [
                'role_name' => "Admin",
                'status' =>1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ],
            [
                'roles' => "User",
                'status' =>1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]
        ]    
        );
       
    }
}

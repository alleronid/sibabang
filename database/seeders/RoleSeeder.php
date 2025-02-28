<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role_name' => 'root'],
            ['role_name' => 'admin'],
            ['role_name' => 'user'],
            ['role_name' => 'companystaff'],
            ['role_name' => 'merchant'],
        ];

        foreach($data as $row){
            DB::table('mt_roles')->insert([
                'role_name' => $row['role_name']
            ]);
        }
    }
}

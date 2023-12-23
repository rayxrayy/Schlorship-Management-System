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
        // $roles = [['name' => 'admin'],['name' => 'college'],['name' => 'student'],['name' => 'public']];
        $roles = [
            ['name' => 'admin', 'description' => 'Administrator'],
            ['name' => 'college', 'description' => 'College Role'],
            ['name' => 'student', 'description' => 'Student Role'],
            ['name' => 'public', 'description' => 'Public Role'],
        ];
        
        

        DB::table('roles')->insert($roles);
    }
}

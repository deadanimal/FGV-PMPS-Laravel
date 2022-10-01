<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'name' => 'Test User - Super Admin',
                'email' => 'fgv-superadmin@pipeline.com.my',
                'password' => Hash::make('password'),
            ],                 
            [
                'name' => 'Test User - Admin',
                'email' => 'fgv-admin@pipeline.com.my',
                'password' => Hash::make('password'),
            ],   
            [
                'name' => 'Test User - Worker',
                'email' => 'fgv-worker@pipeline.com.my',
                'password' => Hash::make('password'),
            ],                 
            [
                'name' => 'Test User - Supervisor',
                'email' => 'fgv-supervisor@pipeline.com.my',
                'password' => Hash::make('password'),
            ],  
            [
                'name' => 'Test User - Lab Worker',
                'email' => 'fgv-labworker@pipeline.com.my',
                'password' => Hash::make('password'),
            ],                 
            [
                'name' => 'Test User - Lab Supervisor',
                'email' => 'fgv-labsupervisor@pipeline.com.my',
                'password' => Hash::make('password'),
            ],                                       
        ]);        
               
    }
}

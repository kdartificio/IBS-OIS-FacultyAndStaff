<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleSeeder extends Seeder{

    public function run(){
        DB::table('roles')->delete();

        Role::create([
        	'role' 	 => '2',
            'name'   => 'faculty'
        ]);

        Role::create([
        	'role' 	 => '1',
            'name'   => 'staff'
        ]);

        Role::create([
        	'role'	 => '0',
            'name'   => 'administrator'
        ]);

    }
}
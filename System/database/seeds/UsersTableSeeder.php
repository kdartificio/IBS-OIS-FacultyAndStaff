<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder {
	 
    //FROM Crissa
    public function run()
    {
        DB::table('users')->delete();           //delete whatever data is present before adding new ones

        DB::table('users')->insert(array(

            //type = 2 -> admin
            
            ['type'=>'2',
            'username'=>'crissapilien',
            'password'=> bcrypt('crissapilien'),
            'employeeNum'=>'201211111'],
            
            ['type'=>'2',
            'username'=>'kdartificio',
            'password'=> bcrypt('kdartificio'),
            'employeeNum'=>'201222222'],

            ['type'=>'1',
            'username'=>'ijaguila',
            'password'=> bcrypt('ijaguila'),
            'employeeNum'=>'101'],

            ['type'=>'0',
            'username'=>'mbbderobles',
            'password'=> bcrypt('mbbderobles'),
            'employeeNum'=>'140']

        ));
    }
}
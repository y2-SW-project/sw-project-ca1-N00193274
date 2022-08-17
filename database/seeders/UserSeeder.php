<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_owner = Role::where('name', 'owner')->first();
        $role_manager = Role::where('name', 'manager')->first();
        $role_warehousestaff = Role::where('name', 'warehousestaff')->first();
        $role_employee = Role::where('name', 'employee')->first();

        $owner = new User();
        $owner->name = 'John smith';
        $owner->email = 'js@larafest.ie';
        $owner->password = Hash::make('secret');
        $owner->save();
        $owner->roles()->attach($role_owner);
        
        $manager = new User();
        $manager->name = 'Jane Doe';
        $manager->email = 'janed@larafest.ie';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $warehousestaff = new User();
        $warehousestaff->name = 'James paul';
        $warehousestaff->email = 'jamesp@larafest.ie';
        $warehousestaff->password = Hash::make('secret');
        $warehousestaff->save();
        $warehousestaff->roles()->attach($role_warehousestaff);

        $employee = new User();
        $employee->name = 'joeseph Byrne';
        $employee->email = 'joeb@larafest.ie';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_employee);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seeds are the information neeeded to fill the tables in your database.
     * @return void
     */ 
    public function run()
    {
        $role_owner = new Role();
        $role_owner->name = 'owner';
        $role_owner->description = 'Business owner';
        $role_owner->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'Business manager';
        $role_manager->save();

        $role_employee = new Role();
        $role_employee->name = 'employee';
        $role_employee->description = 'Business employee';
        $role_employee->save();

        $role_warehousestaff = new Role();
        $role_warehousestaff->name = 'warehouse staff';
        $role_warehousestaff->description = 'warehouse worker';
        $role_warehousestaff->save();
    }
}
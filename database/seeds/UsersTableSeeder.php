<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //create junior admin role
        $juniorAdminRole = new Role();
        $juniorAdminRole->name = "junior_admin";
        $juniorAdminRole->display_name = "Junior admin";
        $juniorAdminRole->save();

        //create moderator role
        $moderatorRole = new Role();
        $moderatorRole->name = "moderator";
        $moderatorRole->display_name = "Moderator";
        $moderatorRole->save();

        //create logistics role
        $logisticsRole = new Role();
        $logisticsRole->name = "logistics";
        $logisticsRole->display_name = "Logistics";
        $logisticsRole->save();

        //create manager role
        $managerRole = new Role();
        $managerRole->name = 'manager';
        $managerRole->display_name = 'Manager';
        $managerRole->save();


        //example of admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('admin');

        //example of junior admin
        $juniorAdmin = new Role();
        $juniorAdmin->name = "Junior admin";
        $juniorAdmin->email ="juniorAdmin@gmail.com";
        $juniorAdmin->password = bcrypt('juniorAdmin');

        //example of

    }
}

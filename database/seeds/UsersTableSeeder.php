<?php

use App\Permission;
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
        $adminRole->description = "CRUD all users, RUD all orders, RUD all applications";
        $adminRole->save();

        //create junior admin role
        $juniorAdminRole = new Role();
        $juniorAdminRole->name = "junior_admin";
        $juniorAdminRole->display_name = "Junior admin";
        $juniorAdminRole->description = "CR all users, RU all orders, RUD all applications";
        $juniorAdminRole->save();

        //create moderator role
        $moderatorRole = new Role();
        $moderatorRole->name = "moderator";
        $moderatorRole->display_name = "Moderator";
        $moderatorRole->description = "nothing";
        $moderatorRole->save();

        //create logistics role
        $logisticsRole = new Role();
        $logisticsRole->name = "logistics";
        $logisticsRole->display_name = "Logistics";
        $logisticsRole->description = "nothing";
        $logisticsRole->save();

        //create manager role
        $managerRole = new Role();
        $managerRole->name = 'manager';
        $managerRole->display_name = 'Manager';
        $managerRole->description = "RU only new orders, RUD all applications";
        $managerRole->save();

        //permission to create users
        $createUsers = new Permission();
        $createUsers->name         = 'create-user';
        $createUsers->display_name = 'Create Users'; // optional
        $createUsers->description  = 'create new users'; // optional
        $createUsers->save();

        $adminRole->attachPermission($createUsers);
        $juniorAdminRole->attachPermission($createUsers);

        //permission to see users
        $seeUsers = new Permission();
        $seeUsers->name         = 'see-user';
        $seeUsers->display_name = 'See Users'; // optional
        $seeUsers->description  = 'see all users'; // optional
        $seeUsers->save();

        $adminRole->attachPermission($seeUsers);
        $juniorAdminRole->attachPermission($seeUsers);

        //permission to edit users
        $editUsers = new Permission();
        $editUsers->name         = 'edit-user';
        $editUsers->display_name = 'Edit Users'; // optional
        $editUsers->description  = 'edit all users'; // optional
        $editUsers->save();

        $adminRole->attachPermission($editUsers);

        //permission to delete users
        $deleteUsers = new Permission();
        $deleteUsers->name         = 'delete-user';
        $deleteUsers->display_name = 'Delete Users'; // optional
        $deleteUsers->description  = 'delete all users'; // optional
        $deleteUsers->save();

        $adminRole->attachPermission($deleteUsers);

        //permission to create order
        /*$createOrders = new Permission();
        $createOrders->name         = 'create-order';
        $createOrders->display_name = 'Create Orders'; // optional
        $createOrders->description  = 'create orders'; // optional
        $createOrders->save();

        $adminRole->attachPermission($createOrders);
        $juniorAdminRole->attachPermission($createOrders);
        */

        //permission to see order
        $seeOrders = new Permission();
        $seeOrders->name         = 'see-order';
        $seeOrders->display_name = 'See Orders'; // optional
        $seeOrders->description = 'see orders'; // optional
        $seeOrders->save();

        $adminRole->attachPermission($seeOrders);
        $juniorAdminRole->attachPermission($seeOrders);
        $managerRole->attachPermission($seeOrders);

        //permission to edit order
        $editOrders = new Permission();
        $editOrders->name         = 'edit-order';
        $editOrders->display_name = 'Edit Orders'; // optional
        $editOrders->description  = 'Edit orders'; // optional
        $editOrders->save();

        $adminRole->attachPermission($editOrders);
        $juniorAdminRole->attachPermission($editOrders);
        $managerRole->attachPermission($editOrders);

        //permission to delete order
        $deleteOrders = new Permission();
        $deleteOrders->name         = 'delete-order';
        $deleteOrders->display_name = 'Delete Orders'; // optional
        $deleteOrders->description  = 'Delete orders'; // optional
        $deleteOrders->save();

        $adminRole->attachPermission($deleteOrders);
        $juniorAdminRole->attachPermission($deleteOrders);

        //permission to read application
        $seeApplication = new Permission();
        $seeApplication->name         = 'see-application';
        $seeApplication->display_name = 'See Applications'; // optional
        $seeApplication->description  = 'See Application'; // optional
        $seeApplication->save();

        $adminRole->attachPermission($seeApplication);
        $juniorAdminRole->attachPermission($seeApplication);
        $managerRole->attachPermission($seeApplication);


        //permission to update application
        $updateApplication = new Permission();
        $updateApplication->name         = 'update-application';
        $updateApplication->display_name = 'Update Applications'; // optional
        $updateApplication->description  = 'Update Application'; // optional
        $updateApplication->save();

        $adminRole->attachPermission($updateApplication);
        $juniorAdminRole->attachPermission($updateApplication);
        $managerRole->attachPermission($updateApplication);

        //permission to delete application
        $deleteApplication = new Permission();
        $deleteApplication->name         = 'delete-application';
        $deleteApplication->display_name = 'delete Applications'; // optional
        $deleteApplication->description  = 'delete Application'; // optional
        $deleteApplication->save();

        $adminRole->attachPermission($deleteApplication);
        $juniorAdminRole->attachPermission($deleteApplication);
        $managerRole->attachPermission($deleteApplication);

        //example of admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('admin');
        $admin->save();

        $admin->attachRole($adminRole);

        //example of junior admin
        $juniorAdmin = new User();
        $juniorAdmin->name = "Junior admin";
        $juniorAdmin->email ="juniorAdmin@gmail.com";
        $juniorAdmin->password = bcrypt('juniorAdmin');
        $juniorAdmin->save();

        $juniorAdmin->attachRole($juniorAdminRole);

        //example of moderator
        $moder = new User();
        $moder->name = "Moder";
        $moder->email ="moder@gmail.com";
        $moder->password = bcrypt('moder');
        $moder->save();

        $moder->attachRole($moder);

        //example of logistics
        $logistics = new User();
        $logistics->name = "Logistics";
        $logistics->email ="logistics@gmail.com";
        $logistics->password = bcrypt('logistics');
        $logistics->save();

        $logistics->attachRole($logisticsRole);

        //example of manager role
        $manager = new User();
        $manager->name = "Manager";
        $manager->email ="manager@gmail.com";
        $manager->password = bcrypt('manager');
        $manager->save();

        $manager->attachRole($managerRole);

    }
}

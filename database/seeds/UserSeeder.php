<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{ 
 public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole ->name="admin";
        $adminRole ->display_name="Admin";
        $adminRole ->save();

                //Membuat role member
        $memberRole = new Role();
        $memberRole ->name="member";
        $memberRole ->display_name="Member";
        $memberRole ->save();

                //Membuat role sample admin
        $admin = new User();
        $admin ->name='admin larapus';
        $admin ->email='admin@gmail.com';
        $admin ->passwoed=bcrypt('rahasia');
        $admin ->save();
        $admin ->attachRole=($AdminRole);


                //Membuat role sample member
        $member = new User();
        $member ->name='Sample Member';
        $member ->email='member@gmail.com';
        $member ->passwoed=bcrypt('rahasia');
        $member ->save();
        $member ->attachRole=($MemberRole);
    }
}

<?php

use Illuminate\Database\Seeder;

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
        $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = 'Anthony Ambunet';
        $user_one->experience = '2012';
        $user_one->location = 'Katy, Texas';
        $user_one->mobile = '281-956-7891';
        $user_one->level = 'EMT - Intermediate';
        $user_one->license = 'LI123456';
        $user_one->username = 'Anthony';
        $user_one->email = 'anthonymakanju@ambu-net.com';
        $user_one->password = bcrypt('Testing');
        $user_one->save();

        $user_one = new User();
        $user_one->role_id = 2;
        $user_one->name = 'Adesola Adele';
        $user_one->experience = '2012';
        $user_one->location = 'Houston, Texas';
        $user_one->mobile = '281-956-7891';
        $user_one->level = 'EMT - Intermediate';
        $user_one->license = 'LI1277723';
        $user_one->username = 'PaSholly';
        $user_one->email = 'adesolaadele@ambu-net.com';
        $user_one->password = bcrypt('Testing');
        $user_one->save();
    }
}

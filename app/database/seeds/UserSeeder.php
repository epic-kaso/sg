<?php
/**
 * Created by PhpStorm.
 * User: kaso
 * Date: 1/7/2015
 * Time: 4:16 PM
 */

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $user = User::firstOrCreate(['email' => 'admin@supergeeks.com','password' => 'Superg33ks']);
        $user->save();

    }

}

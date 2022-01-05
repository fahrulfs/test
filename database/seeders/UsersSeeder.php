<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return 
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            \DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->username,
                'phone' => $faker->phoneNumber,
                'roles' => 'User',
                'email_verified_at' => $faker->dateTimeBetween('+0 days'),
                'password' => bcrypt('secret'),
                'created_at' => $faker->dateTimeBetween('+ 0days'),
            ]);
        }
    }
}

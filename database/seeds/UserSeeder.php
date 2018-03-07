<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ne_NP');

        for ($i = 0; $i <5; $i++){

            \App\User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'is_admin' => $i % 2 ==0 ? 1 : 0,
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }

    }
}

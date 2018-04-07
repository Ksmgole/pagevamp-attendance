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
<<<<<<< HEAD
        for ($i = 0; $i <5; $i++){
            \App\User::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
=======

        for ($i = 0; $i <5; $i++){

            \App\User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
                'is_admin' => $i % 2 ==0 ? 1 : 0,
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }
<<<<<<< HEAD
        //
=======

>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
    }
}

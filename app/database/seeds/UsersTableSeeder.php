<?php

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->insert(array(
            'user_name'   => 'administrator',
            'email'       => 'administrator@haiyanubills.com',
            'password'    => Hash::make('password'),
            'last_name'   => $faker->lastname,
            'first_name'  => $faker->firstName(),
            'middle_name' => $faker->lastname,
            'user_type'   => '0',
            'address'     => $faker->address,
            'status'      => 'A'
        ));

        DB::table('users')->insert(array(
            'user_name'   => 'admin',
            'email'       => 'admin@haiyanubills.com',
            'password'    => Hash::make('password'),
            'last_name'   => $faker->lastname,
            'first_name'  => $faker->firstName(),
            'middle_name' => $faker->lastname,
            'user_type'   => '1',
            'address'     => $faker->address,
            'status'      => 'A'
        ));

        DB::table('users')->insert(array(
            'user_name'   => 'consumer',
            'email'       => 'consumer@haiyanubills.com',
            'password'    => Hash::make('password'),
            'last_name'   => $faker->lastname,
            'first_name'  => $faker->firstName(),
            'middle_name' => $faker->lastname,
            'user_type'   => '2',
            'address'     => $faker->address,
            'status'      => 'A'
        ));
    }

}
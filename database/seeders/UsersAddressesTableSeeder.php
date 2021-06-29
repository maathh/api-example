<?php

namespace Database\Seeders;

use App\Models\UsersAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        UsersAddress::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        //Only to generate random data
        $minimumUsersId = 1;
        $maximumUsersId = 21;

        $minimumCitiesId = 1;
        $maximumCitiesId = 5570;
        
        for ($i = 0; $i < 50; $i++) {
            UsersAddress::create([
                'user_id' => rand($minimumUsersId, $maximumUsersId),
                'city_id' => rand($minimumCitiesId, $maximumCitiesId),
                'street' => $faker->streetAddress,
                'district' => $faker->streetName,
                'complement' => $faker->streetName,
                'post_code' => (string) rand(10000000, 99999999),
                'number' => $faker->buildingNumber,
            ]);
        }
    }
}

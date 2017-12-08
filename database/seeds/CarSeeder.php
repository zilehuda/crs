<?php

use Illuminate\Database\Seeder;
use App\car
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

        car::truncate();

        foreach(range(1,30) as $index)
        {
          car::create(
            [
              'car_name' => $faker->sentence,

            ]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Car::create([
            'car_model'=>'tesla',
            'manufacturer'=>'tesla',
            'price'=>'9999',
            'year'=>'2005',
        ]);
        Car::create([
            'car_model'=>'tesla',
            'manufacturer'=>'tesla',
            'price'=>'9999',
            'year'=>'2005',
        ]);
        Car::create([
            'car_model'=>'tesla',
            'manufacturer'=>'tesla',
            'price'=>'9999',
            'year'=>'2005',
        ]);
        Car::create([
            'car_model'=>'tesla',
            'manufacturer'=>'tesla',
            'price'=>'9999',
            'year'=>'2005',
        ]);
    }
}

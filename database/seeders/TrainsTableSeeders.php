<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Train;

class TrainsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'data_partenza' => $faker->date,
                'orario_partenza' => $faker->time,
                'orario_arrivo' => $faker->time,
                'codice_treno' => $faker->bothify('??####'),
                'numero_carrozze' => $faker->numberBetween(1, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
};

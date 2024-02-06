<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i < 400; $i++){
            $trains = new Train();
            $trains->azienda = $faker->company();
            $trains->stazione_di_partenza = $faker->city();
            $trains->stazione_di_arrivo = $faker->city();
            $trains->orario_di_partenza = $faker->time();
            $trains->orario_di_arrivo = $faker->time();
            $trains->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $trains->numero_carrozze = $faker->randomDigitNot(0);
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->save();
        }
    }
}

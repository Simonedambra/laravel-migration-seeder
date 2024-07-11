<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
       

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

             //   Azienda
            $train->company = $faker->company();
            //   Stazione di partenza
            $train->departure_station = $faker->city();
            //   Stazione di arrivo
            $train->arrival_station = $faker->city();
            //   Orario di partenza
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            //   Orario di arrivo
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            //   Codice Treno
            $train->train_Code = $faker->bothify('??###');
            //   Numero Carrozze
            $train->Number_of_carriages = $faker->numberBetween(7, 25);;
            //   In orario
            $train->In_time = $faker->boolean();
            //   Cancellato
            $train->deleted = $faker->boolean();
            
       
            $train->save();
        }
    }
}
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            //   Azienda
             $table->string('company');
            //   Stazione di partenza
             $table->string('departure_station');
            //   Stazione di arrivo
             $table->string('arrival_station',40);
            //   Orario di partenza
             $table->dateTime('departure_time');
            //   Orario di arrivo
             $table->dateTime('arrival_time');
            //   Codice Treno
             $table->string('train_code');
            //   Numero Carrozze
             $table->tinyInteger('Number_of_carriages')->length(2);
            //   In orario
             $table->boolean('In_time');
            //   Cancellato
             $table->boolean('deleted');

        
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}

// $table->bigIncrements('id');
//             // Azienda
//             $table->string('Azienda',40);
//             // Stazione di partenza
//             $table->string('Stazione_di partenza',40);
//             // Stazione di arrivo
//             $table->string('Stazione di arrivo',40);
//             // Orario di partenza
//             $table->dateTime('Orario di partenza');
//             // Orario di arrivo
//             $table->dateTime('Orario di arrivo');
//             // Codice Treno
//             $table->integer('Codice Treno')->length(11);
//             // Numero Carrozze
//             $table->tinyInteger('Numero Carrozze')->length(2);
//             // In orario
//             $table->boolean('In orario');
//             // Cancellato
//             $table->boolean('Cancellato');

//             $table->timestamps();
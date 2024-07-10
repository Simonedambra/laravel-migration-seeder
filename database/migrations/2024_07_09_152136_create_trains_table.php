<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
// $table->bigIncrements('id');
//             // Azienda
//             $table->string('Azienda',40);
//             // Stazione di partenza
//             $table->string('Stazione di partenza',40);
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
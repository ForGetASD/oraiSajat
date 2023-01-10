<?php

use App\Models\CarDetails;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.  
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('neve');
            $table->string('szine');
            $table->integer('evjarat');
            $table->string('motorTipus')->nullable();
            $table->date('muszakiAlkalmas');
            $table->timestamps();
        });
        
        CarDetails::create(['neve' => 'Mazda Rx7', 'szine' => 'Fekete', 'evjarat' => 2000, 'motorTipus' => 'Rotary', 'muszakiAlkalmas' => '2023-02-10']);
        CarDetails::create(['neve' => 'Toyota supra mk4', 'szine' => 'Fehér', 'evjarat' => 1999, 'motorTipus' => '', 'muszakiAlkalmas' => '2023-05-17']);
        CarDetails::create(['neve' => 'Nissan Skyline r34 GTR', 'szine' => 'Kék', 'evjarat' => 2003, 'motorTipus' => '', 'muszakiAlkalmas' => '2023-06-19']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_details');
    }
};

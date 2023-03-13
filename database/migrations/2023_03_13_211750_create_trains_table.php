<?php

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda",30);
            $table->string("stazione di partenza,",30);
            $table->string("stazione di arrivo",30);
            $table->string("orario di partenza",5);
            $table->string("orario di arrivo",5);
            $table->char("codice treno",6);
            $table->char("numero carozze",50);
            $table->boolean("in orario");
            $table->boolean("cancellato")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};

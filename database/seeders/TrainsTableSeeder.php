<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new train();
        $train->azienda="trenItalia";
        $train->stazionedipartenza="genova";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
        $train->azienda="trenItalia";
    }
}

<?php

use Illuminate\Database\Seeder;
use App\plan;
class planesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        plan::create([
            "nombre"=>"Normal",
            "valor"=>"60000"
        ]);
        plan::create([
            "nombre"=>"Completo",
            "valor"=>"90000"
        ]);
        plan::create([
            "nombre"=>"Completo + Trainer",
            "valor"=>"160000"
        ]);

    }
}

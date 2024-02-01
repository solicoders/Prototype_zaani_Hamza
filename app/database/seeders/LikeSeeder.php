<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("likes")->insert([
            [
            "nom" => "like 1",
            "utilisateur" => "utilisateur 1",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 1",
            ],
            [
            "nom" => "like 2",
            "utilisateur" => "utilisateur 2",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 2",
            ],
            [
            "nom" => "like 3",
            "utilisateur" => "utilisateur 3",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 3",
            ],
            [
            "nom" => "like 4",
            "utilisateur" => "utilisateur 4",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 4",
            ],
          

        ]);
    }
}

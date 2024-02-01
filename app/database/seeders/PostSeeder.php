<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("posts")->insert([
            [
            "nom" => "Post nom 1",
            "content" => "Post content 1",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 1",
            ],
            [
            "nom" => "Post nom 2",
            "content" => "Post content 2",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 2",
            ],
            [
            "nom" => "Post nom 3",
            "content" => "Post content 3",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 3",
            ],
            [
            "nom" => "Post nom 4",
            "content" => "Post content 4",
            "Date_de_création" => "2021-02-01 10:40:57",
            "Date_de_modification" => "2021-02-01 10:40:57",
            "Référence" => "Référence 4",
            ],
          

        ]);
    }
}

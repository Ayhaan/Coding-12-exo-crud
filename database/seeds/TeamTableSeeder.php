<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            "name" => "Walter White",
            "span" => "chief Executive Officier",
            "img" => "img/team-1.jpg",
            "created_at" => now()
        ]);
        DB::table('teams')->insert([
            "name" => "Sarah Jhinson",
            "span" => "Product Manager",
            "img" => "img/team-2.jpg",
            "created_at" => now()
        ]);
        DB::table('teams')->insert([
            "name" => "William Anderson",
            "span" => "CTO",
            "img" => "img/team-3.jpg",
            "created_at" => now()
        ]);
        DB::table('teams')->insert([
            "name" => "Amanda Jepson",
            "span" => "Accountant",
            "img" => "img/team-4.jpg",
            "created_at" => now()
        ]);
    }
}

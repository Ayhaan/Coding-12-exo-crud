<?php

use Illuminate\Database\Seeder;


class IntroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intros')->insert([
            "img_path" => "img/about-img.jpg",
            "created_at" => now()
        ]);        
        // DB::table('intros')->insert([
        //     "img_path" => "https://lorempixel.com/500/300/abstract/?14535",
        //     "created_at" => now()
        // ]);        
        // DB::table('intros')->insert([
        //     "img_path" => "https://lorempixel.com/500/300/city/?87010",
        //     "created_at" => now()
        // ]);
    }
}

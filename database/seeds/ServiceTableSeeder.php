<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            "logo" => "fa fa-desktop",
            "titre" => "Lorem Ipsum",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);       
         DB::table('services')->insert([
            "logo" => "fa fa-bar-chart",
            "titre" => "Magni Dolores",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);        
        DB::table('services')->insert([
            "logo" => "fa fa-photo",
            "titre" => "Dolor Sitema",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);        
        DB::table('services')->insert([
            "logo" => "fa fa-paper-plane",
            "titre" => "Magni Dolores",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);       
         DB::table('services')->insert([
            "logo" => "fa fa-road",
            "titre" => "Nemo Enim",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);        
        DB::table('services')->insert([
            "logo" => "fa fa-shopping-bag",
            "titre" => "Eiusmod Tempor",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            "created_at" => now()
        ]);
    }
}

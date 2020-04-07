<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 1",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-1.jpg);",
            "created_at" => now()
        ]);    

        DB::table('portfolios')->insert([
            "titre" => "Portfolio 2",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-2.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 3",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-3.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 4",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-4.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 5",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-5.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 6",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-6.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 7",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-7.jpg);",
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            "titre" => "Portfolio 8",
            "span" => "Alored dono par",
            "style_img" => "background-image:url(img/portfolio-8.jpg);",
            "created_at" => now()
        ]);
    }
}

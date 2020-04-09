<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "img" => "img/client-1.jpg",
            "name" => "Saul Goodman",
            "span" => "Lawless Inc",
            // "logoSigne" => "img/quote_sign_left.png",
            "comment" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "created_at" => now()
        ]);    

        DB::table('testimonials')->insert([
            "img" => "img/client-2.jpg" ,
            "name" => "SSara Wilsson",
            "span" => "Odeo Inc",
            // "logoSigne" => "img/quote_sign_left.png",
            "comment" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae.",
            "created_at" => now()
        ]);    

    }
}

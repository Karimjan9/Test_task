<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\ArticleModel;
use App\Models\ArticleTagModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   
        $faker = Factory::create();
        $count=20;
        $sum=ArticleTagModel::get()->count();
       
      
       $array=[];
        for ($i = 0; $i < $count; $i++)
        {
            $array=[];
            for ($z=0; $z < 3; $z++) { 
                $randomNumber = random_int(1, $sum);
                array_push($array,$randomNumber);
            }
            ArticleModel::create(['article_theme'=>$faker->text(150),'article_body'=>$faker->text(600),'created_at'=>$faker->DateTime(),'shifts'=>$array]);
        }
    }
}

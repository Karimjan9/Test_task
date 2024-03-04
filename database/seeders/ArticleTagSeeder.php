<?php

namespace Database\Seeders;

use App\Models\ArticleTagModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array=['a word of wisdom','motive','contradict','simile','comparison','anaphora','alliteration','irony','pitch','antithesis','figurative meaning','dialectical unity','polysemy','formal stability','possessive and','figurative ','rhyming.'];
        for ($i=0; $i < count($array); $i++) { 
            ArticleTagModel::create(['name'=>$array[$i]]);
        }
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'libri',
        'film',
        'cucina',
        'musica',
        'giardinaggio',
        'sport',
        'viaggi',
        'elettronica',
        'console',
        'pets',
        'luxury',
        'vestiti',
        'giocattoli',
        'casa'
    ];

    public function run(): void
    {

        foreach($this->categories as $category){
            Category::create([
                'name'=>$category
            ]);
        }

    }
}

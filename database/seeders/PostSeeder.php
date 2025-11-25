<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::truncate();

        Post::create([
            'title' => 'Beneficios del masaje descontracturante',
            'image_path' => 'https://www.europeanhealthschool.com/es/wp-content/uploads/2024/07/masaje-deportivo-descontracturante.jpg',
            'slug' => 'beneficios-masaje-descontracturante-' . Str::random(5),
            'category' => 'Consejos',
            'excerpt' => 'Cómo aliviar tensiones y mejorar la postura.',
            'content' => "El masaje descontracturante actúa sobre puntos de tensión y mejora la movilidad.\nTip: hidratarse y elongar luego de la sesión potencia el efecto.",
            'is_published' => true,
        ]);

        Post::create([
            'title' => 'Promo: relajante + aromaterapia',
            'image_path' => 'https://www.kukyflor.com/blog/wp-content/uploads/2016/03/aroma.jpg',
            'slug' => 'promo-relajante-aromaterapia-' . Str::random(5),
            'category' => 'Promos',
            'excerpt' => 'Pack relajante con aceites esenciales.',
            'content' => "Durante este mes ofrecemos un pack especial de masaje relajante con aromaterapia.\nReservá con anticipación.",
            'is_published' => true,
        ]);
    }
}
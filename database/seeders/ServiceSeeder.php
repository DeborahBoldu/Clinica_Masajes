<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            [
                'slug' => 'masaje-descontracturante',
                'name' => 'Masaje Descontracturante',
                'image_path' => 'https://f.hubspotusercontent20.net/hubfs/2356021/cabina%20spa%20mesa.jpg',
                'description' => 'Alivia tensiones musculares profundas.',
                'duration_minutes' => 60,
                'price' => 15000,
            ],
            [
                'slug' => 'drenaje-linfatico',
                'name' => 'Drenaje Linfático',
                'image_path' => 'https://www.inesalud.com/sites/default/files/inline-images/masaje-linfatico.png',
                'description' => 'Favorece la eliminación de líquidos y toxinas.',
                'duration_minutes' => 50,
                'price' => 13000,
            ],
            [
                'slug' => 'masaje-relajante',
                'name' => 'Masaje Relajante',
                'image_path' => 'https://imclinic.com/wp-content/uploads/drenaje-linfatico-facial.jpg',
                'description' => 'Relaja mente y cuerpo.',
                'duration_minutes' => 45,
                'price' => 12000,
            ],
        ] as $data) {
            Service::updateOrCreate(
                ['slug' => $data['slug']], 
                array_merge($data, ['is_active' => true]) 
            );
        }
    }
}

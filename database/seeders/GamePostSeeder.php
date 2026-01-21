<?php

namespace Database\Seeders;

use App\Models\GamePost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GamePostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'judul' => 'Elden Ring: Shadow of the Erdtree',
                'slug' => Str::slug('Elden Ring Shadow of the Erdtree Review'),
                'genre' => 'Action RPG',
                'platform' => 'PC / PS5 / Xbox',
                'rating' => 10,
                'analisis_singkat' => 'Ekspansi yang mendefinisikan ulang standar kualitas sebuah DLC.',
                'konten' => '<p>Shadow of the Erdtree bukan sekadar tambahan konten, melainkan sebuah dunia baru yang penuh misteri...</p>',
                'gambar' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1000',
            ],
            [
                'judul' => 'Cyberpunk 2077: Penebusan Sempurna Night City',
                'slug' => Str::slug('Cyberpunk 2077 Review 2026'),
                'genre' => 'Open World RPG',
                'platform' => 'PC / Next-Gen',
                'rating' => 8,
                'analisis_singkat' => 'Night City kini menjadi kota paling imersif yang pernah dibuat.',
                'konten' => '<p>Setelah update besar-besaran, game ini akhirnya memenuhi janji awalnya dengan visual ray-tracing yang memukau...</p>',
                // LINK BARU (Neon City Vibe - Lebih Stabil):
                'gambar' => 'https://images.unsplash.com/photo-1555680202-c86f0e12f086?q=80&w=1000',
            ],
            [
                'judul' => 'Stellar Blade: Aksi Memukau Visual Mewah',
                'slug' => Str::slug('Stellar Blade Review'),
                'genre' => 'Hack and Slash',
                'platform' => 'PlayStation 5',
                'rating' => 6,
                'analisis_singkat' => 'Sistem pertarungan solid namun narasi terasa generik.',
                'konten' => '<p>Visual yang luar biasa tidak cukup menutupi kekurangan dari sisi cerita yang klise...</p>',
                'gambar' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1000',
            ],
        ];

        foreach ($posts as $post) {
            GamePost::create($post);
        }
    }
}
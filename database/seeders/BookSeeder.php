<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'judul' => 'Belajar Laravel API',
            'penulis' => 'Taylor Otwell',
            'stok' => 10,
        ]);

        Book::create([
            'judul' => 'Mastering PHP',
            'penulis' => 'Rasmus Lerdorf',
            'stok' => 5,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // 👈 INI YANG KURANG
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'judul' => 'Belajar Laravel API',
            'penulis' => 'Taylor Otwell',
            'stok' => 10,
        ]);
    }
}

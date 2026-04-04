<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            // Tambah kolom yang kurang
            if (!Schema::hasColumn('books', 'kategori')) {
                $table->string('kategori')->nullable()->after('penulis');
            }
            if (!Schema::hasColumn('books', 'deskripsi')) {
                $table->text('deskripsi')->nullable()->after('kategori');
            }
            if (!Schema::hasColumn('books', 'cover_image')) {
                $table->string('cover_image')->nullable()->after('deskripsi');
            }
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['kategori', 'deskripsi', 'cover_image']);
        });
    }
};
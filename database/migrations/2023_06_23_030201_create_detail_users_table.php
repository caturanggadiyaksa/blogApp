<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->char('first_name', 30);
            $table->char('last_name', 30);
            $table->char('alamat', 200);
            $table->char('no_telp', 15);
            $table->enum('jenis_kelamin', ['Laki-laki', 'perempuan']);
            $table->text('foto_profil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_users');
    }
};

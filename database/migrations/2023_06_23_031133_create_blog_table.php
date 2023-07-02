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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->text('judul');
            $table->text('description');
            $table->text('text_link');
            $table->text('img_cover');
            $table->longText('title_content_one');
            $table->longText('title_content_two');
            $table->longText('title_content_three');
            $table->longText('title_content_four');
            $table->longText('title_content_five');
            $table->longText('title_content_six');
            $table->longText('title_content_seven');
            $table->longText('title_content_night');
            $table->longText('content_one');
            $table->longText('content_two');
            $table->longText('content_three');
            $table->longText('content_four');
            $table->longText('content_five');
            $table->longText('content_six');
            $table->longText('content_seven');
            $table->longText('content_night');
            $table->longText('code_content_one');
            $table->longText('code_content_two');
            $table->longText('code_content_three');
            $table->longText('code_content_four');
            $table->longText('code_content_five');
            $table->longText('code_content_six');
            $table->longText('code_content_seven');
            $table->longText('code_content_night');
            $table->longText('img_content_one');
            $table->longText('img_content_two');
            $table->longText('img_content_three');
            $table->longText('img_content_four');
            $table->longText('img_content_five');
            $table->longText('img_content_six');
            $table->longText('img_content_seven');
            $table->longText('img_content_night');
            $table->text('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};

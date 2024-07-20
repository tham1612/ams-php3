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
        Schema::create('author_post', function (Blueprint $table) {

            $table->foreignIdFor(\App\Models\Author::class)->constrained();
            $table->foreignIdFor(\App\Models\Post::class)->constrained();
            $table->primary([      'post_id', 'author_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_posts');
    }
};

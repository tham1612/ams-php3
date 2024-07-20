<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\catagory::class)->constrained();
            $table->string('name');
            $table->string('slug')->unique()->comment('link baif vieets');

            $table->string('img_thumbnail')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('view')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_hot_deal')->default(false);
            $table->boolean('is_good_deal')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_show_home')->default(false);

            $table->date('published_date')->nullable()->comment('Ngày xuất bản');
            $table->unsignedInteger('likes')->default(0)->comment('Số lượt thích');
            $table->unsignedInteger('comments_count')->default(0)->comment('Số lượng bình luận');


            $table->timestamps();
//
//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * id and timestamps fields are already there. Timestamps method creates
         * 2 equivalent timestamp -> create_at and updted_at
         */
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();

            $table->string('key_post');
            $table->string('lng', 5);
            $table->string('title');
            $table->string('image');
            $table->text('content');
            $table->boolean('enabled');
            $table->dateTime('published_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}

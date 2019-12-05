<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
//        Schema::table('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('content');
            $table->string('image')->nullable();//->after('content');
            $table->unsignedInteger('category_id')->nullable();//->after('blog');
            $table->unsignedInteger('blog_id');//->after('blog');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('posts', function (Blueprint $table) {
//            $table->dropColumn('image');
//            $table->dropColumn('category_id');
//        });
        Schema::drop('blog_posts');
    }
}

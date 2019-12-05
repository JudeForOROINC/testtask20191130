<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog', function (Blueprint $table) {
        //        Schema::table('posts', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('blog_title')->unique();
                    $table->text('content');
                    $table->string('image')->nullable();//->after('content');
                    $table->unsignedInteger('user_id')->nullable();//->after('blog');
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
        //
        Schema::drop('blog');
    }
}

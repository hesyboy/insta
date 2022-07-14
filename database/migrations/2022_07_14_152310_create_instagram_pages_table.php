<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagram_pages', function (Blueprint $table) {
            $table->id();

            $table->string('description')->nullable();

            $table->string('instagram_id')->nullable();
            $table->string('instagram_follower')->nullable();
            $table->string('instagram_following')->nullable();
            $table->string('instagram_like')->nullable();
            $table->string('instagram_view')->nullable();

            $table->string('price')->nullable();
            $table->string('discount')->nullable();

            $table->string('garanty')->nullable();

            $table->string('featured')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('instagram_pages');
    }
}

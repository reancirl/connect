<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('featured_image')->nullable();

            $table->string('slug')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean('robots')->default(1);
            
            $table->string('author')->nullable();
            $table->integer('created_by')->nullable();
            $table->boolean('published')->default(0);
            $table->date('date_published')->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}

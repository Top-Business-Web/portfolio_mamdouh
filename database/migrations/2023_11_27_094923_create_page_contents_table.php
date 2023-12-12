<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('image_owner', 255);
            $table->json('name_owner');
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->text('address');
            $table->json('description_owner');
            $table->integer('customers');
            $table->integer('years_experience');
            $table->integer('best_customers');
            $table->integer('project_successfully');
            $table->string('image_description', 255);
            $table->json('description_about');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
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
        Schema::dropIfExists('page_contents');
    }
}

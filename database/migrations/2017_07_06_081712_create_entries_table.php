<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('synopsis');
            $table->smallInteger('release_year');
            $table->integer('rating');
            $table->string('image_url', 100);
            $table->bigInteger('user_id');
            $table->timestamps();
            $table->integer('type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('description', 45);
            $table->timestamps();
        });
        
        	DB::table('genres')->insert([
				['name' => 'Action', 'description' => 'Action'],
				['name' => 'Costume', 'description' => 'Action'],
				['name' => 'Drama', 'description' => 'Drama'],
				['name' => 'History', 'description' => 'History'],
				['name' => 'Mystery', 'description' => 'Mystery'],
				['name' => 'Sport', 'description' => 'Sport'],
				['name' => 'Western', 'description' => 'Western'],
				['name' => 'Adventure', 'description' => 'Adventure'],
				['name' => 'Comedy', 'description' => 'Comedy'],
				['name' => 'Family', 'description' => 'Family'],
				['name' => 'Horror', 'description' => 'Horror'],
				['name' => 'Reality-TV', 'description' => 'Reality-TV'],
				['name' => 'Thriller', 'description' => 'Thriller'],
				['name' => 'Animation', 'description' => 'Animation'],
				['name' => 'Crime', 'description' => 'Crime'],
				['name' => 'Fantasy', 'description' => 'Fantasy'],
				['name' => 'Kungfu', 'description' => 'Kungfu'],
				['name' => 'Romance', 'description' => 'Romance'],
				['name' => 'Biography', 'description' => 'Biography'],
				['name' => 'Documentary', 'description' => 'Documentary'],
				['name' => 'Game-Show', 'description' => 'Game-Show'],
				['name' => 'Music', 'description' => 'Music'],
				['name' => 'Sci-Fi', 'description' => 'Sci-Fi'],
				['name' => 'War', 'description' => 'War'],
        	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}

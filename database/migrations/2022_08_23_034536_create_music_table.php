<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->text('name');

            $table->unsignedBigInteger('singer_id');
            $table->foreign('singer_id')->on('singers')->references('id')->cascadeOnDelete();

            $table->text('cover_path');
            $table->text('file_path');

            $table->text('text');
            $table->unsignedBigInteger('genre_id');
            $table->text('publish');

            $table->float('rate')->default(0); // Cached
            $table->float('rate_count')->default(0); // Cached
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
        Schema::dropIfExists('music');
    }
}

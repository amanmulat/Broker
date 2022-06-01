<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bath')->nullable();
            $table->float('area')->nullable();
            $table->string('unit_cover');
            $table->json('unit_image');
            $table->integer('sorting');
            $table->json('furnished')->nullable();
            $table->json('status');
            $table->json('sell') ;
            $table->json('rent') ;
            $table->string('desc')->nullable();
            $table->json('amenities') ;
            $table->json('location') ;
            $table->json('contact') ;
            $table->string('tour')->nullable();
            $table->string('progress')->nullable();
            $table->json('kind');
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
        Schema::dropIfExists('units');
    }
}

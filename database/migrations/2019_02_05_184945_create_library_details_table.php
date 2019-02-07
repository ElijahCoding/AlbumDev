<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('library_id')->unsigned()->index();
            $table->text('current_version')->nullable();
            $table->text('description')->nullable();
            $table->text('repository')->nullable();
            $table->text('homepage')->nullable();
            $table->timestamps();

            $table->foreign('library_id')->references('id')->on('libraries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_details');
    }
}

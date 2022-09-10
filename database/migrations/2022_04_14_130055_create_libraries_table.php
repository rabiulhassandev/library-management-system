<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('library_name')->unique();
            $table->string('library_slug')->nullable();
            $table->text('library_phone')->nullable();
            $table->text('library_address')->nullable();
            $table->text('library_map')->nullable();
            $table->text('office_time')->nullable();
            $table->text('library_description')->nullable();
            $table->text('library_image')->default('default.jpg');
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
        Schema::dropIfExists('libraries');
    }
}

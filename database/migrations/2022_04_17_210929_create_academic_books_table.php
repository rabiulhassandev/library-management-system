<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name')->nullable();
            $table->string('class_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default('default.png');
            $table->string('created')->nullable();
            $table->string('status')->default('Available');
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
        Schema::dropIfExists('academic_books');
    }
}

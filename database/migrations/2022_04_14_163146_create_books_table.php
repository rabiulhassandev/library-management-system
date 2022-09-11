<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name')->unique();
            $table->string('book_unique_id')->unique();
            $table->string('book_slug')->nullable();
            $table->string('book_owner')->nullable();
            $table->string('book_owner_unique_id')->nullable();
            $table->string('book_owner_address')->nullable();
            $table->string('book_description')->nullable();
            $table->string('book_pages')->nullable();
            $table->string('book_price')->nullable();
            $table->string('book_publisher')->nullable();
            $table->string('book_address')->nullable();
            $table->string('book_map')->nullable();
            $table->string('writer_name')->nullable();
            $table->string('book_status')->default('available');
            $table->string('book_pdf')->nullable();
            $table->string('book_image')->nullable();
            $table->string('book_created')->nullable();
            $table->timestamps();



            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('writer_id')->nullable();
            $table->unsignedBigInteger('library_id')->nullable();


            $table
            ->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('set null');
            $table
            ->foreign('writer_id')
            ->references('id')
            ->on('book_writers')
            ->onDelete('set null');
            $table
            ->foreign('library_id')
            ->references('id')
            ->on('libraries')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

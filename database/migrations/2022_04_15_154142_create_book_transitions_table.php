<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_transitions', function (Blueprint $table) {
            $table->id();
            $table->string('book_address')->nullable();
            $table->string('book_duration')->nullable();
            $table->string('book_delivery')->nullable();
            $table->string('request_date')->nullable();
            $table->string('request_status')->default('Pending');
            $table->string('return_date')->nullable();
            $table->string('admin_reply_message')->nullable();
            $table->string('admin_delivery_area')->nullable();
            $table->timestamps();


            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table
            ->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('set null');

            $table
            ->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('book_transitions');
    }
}

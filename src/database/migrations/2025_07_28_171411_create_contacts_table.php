<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('gender')->default('男性');
            $table->string('email', 255);
            $table->string('first', 255);
            $table->string('second', 255);
            $table->string('third', 255);
            $table->string('address', 255);
            $table->string('building', 255)->nullable();
            $table->string('detail');
            $table->text('content');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

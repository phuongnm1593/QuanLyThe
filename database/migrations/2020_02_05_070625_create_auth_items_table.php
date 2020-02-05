<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',64)->unique();
            $table->text('description')->nullable();
            $table->string('type',16)->default('role');
            $table->string('rule_name',64)->nullable();
            $table->binary('data')->nullable();
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
        Schema::dropIfExists('auth_items');
    }
}

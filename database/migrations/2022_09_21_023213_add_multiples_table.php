<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_types', function (Blueprint $table) {
            $table->id();
            $table->string('tree_name');
            $table->timestamps();
            $table->string('created_by')->default('Admin');
            $table->string('updated_by')->default(null)->nullable();
        });

        Schema::create('planted_trees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->foreign('uid')->references('id')->on('users');
            $table->unsignedBigInteger('tree_id');
            $table->foreign('tree_id')->references('id')->on('tree_types');
            $table->integer('total');
            $table->timestamps()->nullable();
            $table->string('created_by')->default('Admin');
            $table->string('updated_by')->default(null)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tree_types');
        Schema::dropIfExists('planted_trees');
    }
};

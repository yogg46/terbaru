<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('programer')->constrained()
                ->onUpdate('cascade');
            $table->string('deadline')->nullable();
            $table->string('nama')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default(0);
            $table->string('deskripsi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bugs');
    }
}
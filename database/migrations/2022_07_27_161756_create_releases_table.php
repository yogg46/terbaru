<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('versi')->constrained()
                ->onUpdate('cascade');
            $table->string('deadline')->nullable();
            $table->string('modul_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->unsignedBigInteger('programer')->constrained()
                ->onUpdate('cascade');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('releases');
    }
}
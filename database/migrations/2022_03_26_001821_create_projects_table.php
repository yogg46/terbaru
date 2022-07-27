<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project');
            $table->string('deskripsi_project');
            $table->string('slug');
            $table->unsignedBigInteger('no_client')->constrained()
                ->onUpdate('cascade');
            $table->string('no_project');
            $table->string('catatan')->nullable();
            $table->string('status')->default(1);
            $table->string('level')->default(1);
            $table->string('kategori')->default(1);
            $table->string('tgl_buat')->nullable();
            $table->string('tgl_deadline')->nullable();
            $table->string('tgl_trial')->nullable();
            $table->string('tgl_release')->nullable();
            $table->unsignedBigInteger('marketing')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('leader')->constrained()
                ->onUpdate('cascade')->nullable();
            $table->string('total_progres')->default('0');
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
        Schema::dropIfExists('projects');
    }
}
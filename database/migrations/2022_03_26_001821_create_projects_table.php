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
            $table->string('status')->default(1);
            $table->string('level')->default(1);
            $table->string('kategori')->default(1);
            $table->date('tgl_buat');
            $table->date('tgl_deadline');
            $table->date('tgl_trial');
            $table->date('tgl_release');
            $table->unsignedBigInteger('marketing')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('leader')->constrained()
                ->onUpdate('cascade')->nullable();
            $table->string('total_progres')->default('0');
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
        Schema::dropIfExists('projects');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('nama');
            $table->string('slug')->nullable();
            $table->string('email')->nullable();
            $table->string('cp')->nullable();
            $table->string('status')->default(1)->nullable();
            $table->text('alamat')->nullable();
            $table->unsignedBigInteger('no_kc')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginActicitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_acticities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()
                ->onUpdate('cascade');
            $table->string('deskripsi');
            $table->string('date_time');
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
        Schema::dropIfExists('login_acticities');
    }
}

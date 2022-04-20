<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(bcrypt('password'));
            $table->unsignedBigInteger('role')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->default('1');
            // $table->unsignedBigInteger('id_karyawan')->constrained()
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            $table->rememberToken();
            $table->integer('hitam')->default(0);
            $table->string('NIK')->nullable();
            // $table->string('email')->nullable();
            $table->string('no_telepon')->nullable();
            $table->timestamps();
            $table->integer('status')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

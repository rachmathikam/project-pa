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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')
                        ->references('id')
                        ->on('roles')
                        ->onUpdate('cascade');;
                        $table->foreignId('gender_id')
                                    ->references('id')
                                    ->on('genders')
                                    ->onUpdate('cascade');
            $table->string('nip', 12);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telp');
            // $table->unsignedInteger('role_id');
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
        Schema::dropIfExists('gurus');
    }
};

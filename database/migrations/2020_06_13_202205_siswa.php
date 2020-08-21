<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nrp')->primary('nrp');
            $table->string('nama');
            $table->string('foto');
            $table->unsignedInteger('jurusan_id');
            $table->date('tgl_lahir');
            $table->enum('jk',['Pria','Wanita']);
            $table->foreign('jurusan_id')
                    ->references('id')
                    ->on('jurusan')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamps();
        });


        Schema::table('vote', function (Blueprint $table) {
            $table->foreign('siswa_id')
                    ->references('nrp')
                    ->on('siswa')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            });

            

            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}

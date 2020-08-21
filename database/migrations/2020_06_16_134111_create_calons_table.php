<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_wakil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paslon_nomor');
            $table->string('nis_wakil')->unique();
            $table->string('foto_paslon');
            $table->string('visi');
            $table->string('misi');
            $table->string('slogan');
            $table->unsignedInteger('admin_id');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('users')->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->foreign('nis_wakil')->references('nrp')->on('siswa')->onUpdate('cascade')
            ->onDelete('cascade');

        });
        Schema::table('vote', function (Blueprint $table) {
            $table->unsignedInteger('calon_id');
            $table->foreign('calon_id')->references('id')->on('calon_wakil')->onUpdate('cascade')
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
        Schema::dropIfExists('calon_wakil');
    }
}

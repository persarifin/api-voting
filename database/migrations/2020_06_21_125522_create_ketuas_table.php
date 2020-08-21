<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketua', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nis_ketua')->unique();
            $table->timestamps();
            $table->foreign('nis_ketua')->references('nrp')->on('siswa')->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('calon_wakil', function (Blueprint $table) {
            $table->unsignedInteger('calon_id');
            $table->foreign('calon_id')->references('id')->on('ketua')->onUpdate('cascade')
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
        Schema::dropIfExists('ketua');
    }
}

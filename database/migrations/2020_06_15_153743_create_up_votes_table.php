<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('up_vote', function (Blueprint $table) {
            $table->Increments('id');
            $table->enum('status',['open','close']);
            $table->unsignedInteger('admin_id');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('users')->onUpdate('cascade')
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
        Schema::dropIfExists('up_vote');
    }
}

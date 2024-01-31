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
        Schema::create('expert_infos', function (Blueprint $table) {
            $table->id();
            // $table->string('photo');
            $table->integer('user_id');
            $table->string('expertness');
            $table->integer('phone_num');
            $table->string('address');
            // $table->integer('date_id');
            $table->integer('counsel_id');
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
        Schema::dropIfExists('expert_infos');
    }
};

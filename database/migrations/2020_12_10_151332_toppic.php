<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Toppic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place_name');
            $table->text('place_detail');
            $table->string('place_type');
            $table->text('place_web');
            $table->text('img_path');
            $table->text('map_url');
            $table->string('username');
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
        Schema::dropIfExists('member_place');
    }
}

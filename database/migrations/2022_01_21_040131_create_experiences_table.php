<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('event')->nullable()->default(null);
            $table->string('position')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('tgl')->nullable()->default(null);
            $table->boolean('validation')->nullable()->default(false);
            $table->string('image')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *P
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}

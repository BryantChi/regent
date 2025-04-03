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
        Schema::create('activity_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('image')->nullable();
            $table->foreignId('classification_id')->constrained('classification')->onDelete('cascade');
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
        Schema::drop('activity_infos');
    }
};

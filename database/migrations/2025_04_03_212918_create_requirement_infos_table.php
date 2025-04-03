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
        Schema::create('requirement_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable()->comment('需求類型');
            $table->string('identity')->nullable()->comment('身份');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('phone')->nullable()->comment('電話');
            $table->string('email')->nullable()->comment('電子郵件');
            $table->string('address')->nullable()->comment('地址');
            $table->longText('message')->nullable()->comment('需求內容');
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
        Schema::drop('requirement_infos');
    }
};

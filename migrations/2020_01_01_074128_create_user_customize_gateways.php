<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCustomizeGateways extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_customize_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->index()->nullable()->comment('User Id selected for customize gateway');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('list_gateway_id')->index()->nullable()->comment('Selected Gateway');
            $table->foreign('list_gateway_id')->references('id')->on('list_gateways');

            $table->boolean('active')->nullable()->default(0)->comment('User can modify this attribute');
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
        Schema::dropIfExists('user_customize_gateways');
    }
}

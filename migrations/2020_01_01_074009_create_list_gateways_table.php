<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('key', ['zarinpal', 'mellat', 'saman',
                'payir', 'irankish', 'sadad', 'parsian', 'pasargad',
                'asanpardakht', 'paypal'])->default('mellat')->comment('List Of Gateways , Type ENUM');

            $table->string('config', 2000)->nullable()->comment('The array list of gateway config max 2k');
            $table->boolean('active')->nullable()->default(1)->comment('Activation of gateway');
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
        Schema::dropIfExists('list_gateways');
    }
}

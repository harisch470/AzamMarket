<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('S_id');
            $table->string('name',50);
            $table->string('type',10);
            $table->string('shopName',60);
            $table->string('email',50)->unique();
            $table->string('address',120);
            $table->double('contactNo');
            $table->double('subCharges');
            $table->string('password',200);
            $table->string('profileImg',150);
            $table->string('coverImg',150);
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
        Schema::dropIfExists('sellers');
    }
}

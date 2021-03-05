<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('settings',function (Blueprint $table){
            $table->id();
            $table->string('bitcoinWalletAddress')->nullable()->default(null);
            $table->string('litecoinWalletAddress')->nullable()->default(null);
            $table->string('ethereumWalletAddress')->nullable()->default(null);
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
        //
    }
}

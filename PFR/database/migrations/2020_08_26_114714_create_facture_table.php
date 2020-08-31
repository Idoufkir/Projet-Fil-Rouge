<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->id();
            $table->string('Subject',150);
            $table->text('Desc');
            $table->unsignedBigInteger('ID_manager');
            $table->unsignedBigInteger('ID_client');
            $table->foreign('ID_manager')->references('id')->on('users');
            $table->foreign('ID_client')->references('id')->on('users');
            $table->string('Provider or company',150);
            $table->string('Status',150);
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
        Schema::dropIfExists('facture');
    }
}

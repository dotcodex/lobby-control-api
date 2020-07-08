<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');
            $table->integer('edificie_quantity');
            $table->string('edifice_name');    
            $table->bigInteger('commune_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->integer('score')->unsigned();
            
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->foreign('customer_id')->references('id')->on('customers');

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
        Schema::dropIfExists('diagnostics');
    }
}

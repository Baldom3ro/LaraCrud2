<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->String('street',40)->nullable()->default('calle');
            $table->integer('internal_num')->unsigned()->nullable()->default(12);
            $table->integer('external_num')->unsigned()->nullable()->default(12);
            $table->String('neighborthood',50)->nullable()->default('vecindario');
            $table->String('town',50)->nullable()->default('ciudad');
            $table->String('state',50)->nullable()->default('estado');
            $table->String('country',50)->nullable()->default('pais');
            $table->integer('postal_code')->unsigned()->nullable()->default(12);
            $table->String('references',150)->nullable()->default('referencias');
            $table->foreignId('client_id');            
            
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
